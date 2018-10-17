<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Article;
use App\Http\Model\Category;
use App\Http\Model\Tag;
use \Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class TagController extends CommonController
{
    //全部文字列表
    public function index(Request $request)
    {
        //获取当前第几页
        $RequestUri = $request->getRequestUri();
        $RequestUriArr = explode('=',$RequestUri);
        $pageNum = isset($RequestUriArr[1]) ? $RequestUriArr[1] : 1;//页码不存在时,默认显示第一页

//        $data = Article::orderBy('art_id', 'desc')->paginate(20);
//        paginate($perPage = null, $columns = ['*'], $pageName = 'page', $page = null)

        $data = DB::table('tag')->orderBy('id', 'desc')->paginate($perPage = 20, $columns = ['*'], $pageName = 'page', $page = $pageNum);//paginate分页
        $data->setPath('tag');


        return view('admin.tag.index', compact('data'));
    }

    //get.admin/article/create 添加文章
    public function create()
    {
        $categoryData = (new Category())->tree();

        return view('admin.tag.add', compact('categoryData'));
    }

    //add添加文章表单提交的方法
    public function store()
    {
        $input = Input::except('_token');
        $input['tag_time'] = time();

        $rules = [
            'tag_name' => 'required',
            'tag_category_id' => 'required',
        ];

        $message = [
            'tag_name.required' => 'tag标题不能为空!',
            'tag_category_id.required' => 'tag标签分类id不能为空!',
        ];

        $validator = Validator::make($input, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
        if ($validator->passes()) {
            $re = null;
            //拆分带有逗号分隔符的字符串
            $tagArr = explode(',', $input['tag_name']);//把字符串拆分成数组
            for($i=0;$i<count($tagArr);$i++){
                $input['tag_name'] = $tagArr[$i];
                //通过Tag模型入库
                $re = Tag::create($input);
                if (!$re) {
                    return back()->with('errors', 'tag标签数据写入数据库失败,请稍后重试!');
                }
            }

            if ($re) {
                return redirect('admin/tag');
            }



        } else {
            return back()->withErrors($validator);
        }

    }

    //编辑文章
    public function edit($tag_id)
    {
        $field = Tag::find($tag_id);

        $categoryData = (new Category())->tree();


        return view('admin.tag.edit', compact('data', 'field', 'categoryData'));
    }

    //用来接收edit提交过来更新
    public function update($tag_id)
    {
        $input = Input::except('_token', '_method');
        $re = Tag::where('id', $tag_id)->update($input);
        if ($re) {
            return redirect('admin/tag');
        } else {
            return back()->with('errors', 'tag标签更新失败,请稍后重试!');
        }
    }


    //delete 删除单个文章
    public function destroy($tag_id)
    {
        $re = Tag::where('id', $tag_id)->delete();
        if ($re) {
            $data = [
                'status' => 0,
                'msg' => 'tag标签删除成功!',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => 'tag标签删除失败,请稍后重试!',
            ];
        }
        return $data;
    }


}
