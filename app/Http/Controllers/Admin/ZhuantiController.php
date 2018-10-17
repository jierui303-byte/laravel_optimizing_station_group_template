<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Zhuanti;
use App\Http\Model\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class ZhuantiController extends CommonController
{
    //全部分类列表
    public function index()
    {
        $zhuantis = (new Zhuanti)->tree();

        return view('admin.zhuanti.index')->with('data', $zhuantis);
    }

    //ajax分类排序
    public function changeorder()
    {
        $input = Input::all();
        $cate = Zhuanti::find($input['zhuan_id']);
        $cate->zhuan_order = $input['zhuan_order'];
        $re = $cate->update();
        if ($re) {
            $data = [
                'status' => 0,
                'msg' => '分类排序更新成功!',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '分类排序更新失败,请稍后重试!',
            ];
        }
        return $data;
    }

    //add添加分类
    public function create()
    {
        $data = Zhuanti::where('zhuan_pid', 0)->get();

        return view('admin/zhuanti/add', compact('data'));
    }

    //add添加分类表单提交的方法
    public function store()
    {
        if ($input = Input::except('_token')) {
            $rules = [
                'zhuan_name' => 'required',
                'zhuan_keywords' => 'required',
            ];

            $message = [
                'zhuan_name.required' => '分类名称不能为空!',
                'zhuan_keywords.required' => '分类关键词tag标签不能为空!',
            ];//保证tag标签必须存在

            $validator = Validator::make($input, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                //再执行 拆分入库成功后，再把分类写入数据库
                $re = Zhuanti::create($input);//返回刚才写入数据库成功的数据信息及ID
//                var_dump($re['cate_id']);
//                exit;
                if ($re) {
                    return redirect('admin/zhuanti');
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

    //编辑分类
    public function edit($zhuan_id)
    {
        $field = Zhuanti::find($zhuan_id);
        $data = Zhuanti::where('zhuan_pid', 0)->get();
        return view('admin.zhuanti.edit', compact('field', 'data'));
    }

    //用来接收edit提交过来更新
    public function update($zhuan_id)
    {
        $input = Input::except('_token', '_method');
        $re = Zhuanti::where('zhuan_id', $zhuan_id)->update($input);
        if ($re) {
            return redirect('admin/zhuanti');
        } else {
            return back()->with('errors', '分类信息更新失败,请稍后重试!');
        }
    }

    //delete 删除单个分类
    public function destroy($zhuan_id)
    {
        $re = Zhuanti::where('zhuan_id', $zhuan_id)->delete();
        Zhuanti::where('zhuan_pid', $zhuan_id)->update(['zhuan_pid'=>0]);//顶级分类删除后,把其下面的子分类全部变为顶级分类
        if ($re) {
            $data = [
                'status' => 0,
                'msg' => '分类删除成功!',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '分类删除失败,请稍后重试!',
            ];
        }
        return $data;
    }

    public function show()
    {
        
    }





}
