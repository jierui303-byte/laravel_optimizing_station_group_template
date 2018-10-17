<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Config;
use App\Http\Model\Navs;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ConfigController extends Controller
{
    //配置项
    public function index()
    {
        $data = Config::orderBy('conf_order', 'asc')->get();
        //根据不同的类型进行不同的显示处理
        foreach ($data as $k=>$v) {
            switch ($v->field_type) {
                case 'input':

                    $data[$k]->_html = '<input type="text" name="conf_content[]" class="lg" value="'.$v->conf_content.'">';
                    break;
                case 'textarea':
                    $data[$k]->_html = '<textarea type="text" class="lg" name="conf_content[]">'.$v->conf_content.'</textarea>';
                    break;
                case 'radio':
                    //   1|开启,0|关闭
                    $arr = explode(',', $v->field_value);
                    $str = '';
                    $c = '';
                    foreach ($arr as $m=>$n) {
                        $r = explode('|', $n);
                        $c = $v->conf_content == $r[0] ? 'checked' : '';
                        $str .= '<input type="radio" name="conf_content[]" '.$c.' value="'.$r[0].'">'.$r[1].'&nbsp;&nbsp;';
                    }

                    $data[$k]->_html = $str;

                    break;

            }
        }
        return view('admin.config.index', compact('data'));
    }

    //ajax配置项排序
    public function changeorder()
    {
        $input = Input::all();
        $navs = Config::find($input['conf_id']);
        $navs->conf_order = $input['conf_order'];
        $re = $navs->update();
        if ($re) {
            $data = [
                'status' => 0,
                'msg' => '配置项排序更新成功!',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '配置项排序更新失败,请稍后重试!',
            ];
        }
        return $data;
    }

    //修改配置提交表单 接收
    public function changeContent()
    {
        $input = Input::all();
        foreach ($input['conf_id'] as $k=>$v) {
            Config::where('conf_id', $v)->update(['conf_content'=>$input['conf_content'][$k]]);
        }
        $this->putFile();//更新数据库内配置内容时 也需要更新一下配置文件中的内容,两者同步
        return back()->with('errors', '配置项更新成功!');
    }

    //把配置项写入到文件中,放置在config文件夹中
    public function putFile()
    {
//        echo \Illuminate\Support\Facades\Config::get('web.web_title');//从配置文件获取内容  格式:文件名.配置项下标

        $config = Config::pluck('conf_content', 'conf_name')->all();//从数据库读取出配置内容
//        var_export($config, true);//把数组中的内容转换成字符串,便于存储在web.php这个配置文件中
        $path = base_path().'/config/web.php';
        $str = '<?php return '.var_export($config, true).';';//拼成配置文件格式
        file_put_contents($path, $str);

    }
    

    //add添加配置项
    public function create()
    {
        return view('admin/config/add');
    }

    //add添加配置项表单提交的方法
    public function store()
    {
        if ($input = Input::except('_token')) {
            $rules = [
                'conf_name' => 'required',
                'conf_title' => 'required',
            ];

            $message = [
                'conf_name.required' => '配置名称不能为空!',
                'conf_title.required' => '配置标题不能为空!',
            ];

            $validator = Validator::make($input, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                $re = Config::create($input);
                if ($re) {
                    return redirect('admin/config');
                } else {
                    return back()->with('errors', '数据填充失败,请稍后重试!');
                }
            } else {
                return back()->withErrors($validator);
            }

        } else {
            return view('admin.pass');
        }
    }

    //编辑配置项
    public function edit($conf_id)
    {
        $field = Config::find($conf_id);
        return view('admin.config.edit', compact('field'));
    }

    //用来接收edit提交过来更新
    public function update($conf_id)
    {
        $input = Input::except('_token', '_method');
        $re = Config::where('conf_id', $conf_id)->update($input);
        if ($re) {
            $this->putFile();//更新数据库内配置内容时 也需要更新一下配置文件中的内容,两者同步
            return redirect('admin/config');
        } else {
            return back()->with('errors', '配置项信息更新失败,请稍后重试!');
        }
    }


    //delete 删除单个配置项
    public function destroy($conf_id)
    {
        $re = Config::where('conf_id', $conf_id)->delete();
        if ($re) {
            $this->putFile();//更新数据库内配置内容时 也需要更新一下配置文件中的内容,两者同步
            $data = [
                'status' => 0,
                'msg' => '配置项删除成功!',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '配置项删除失败,请稍后重试!',
            ];
        }
        return $data;
    }

    public function show()
    {

    }


}
