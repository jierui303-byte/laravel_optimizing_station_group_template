<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Links;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class LinksController extends Controller
{
    //全部友情链接列表
    public function index()
    {
        $data = Links::orderBy('link_order', 'asc')->get();
        return view('admin.links.index', compact('data'));
    }

    //ajax分类排序
    public function changeorder()
    {
        $input = Input::all();
        $links = Links::find($input['link_id']);
        $links->link_order = $input['link_order'];
        $re = $links->update();
        if ($re) {
            $data = [
                'status' => 0,
                'msg' => '友情链接排序更新成功!',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '友情链接排序更新失败,请稍后重试!',
            ];
        }
        return $data;
    }

    //add添加友情链接
    public function create()
    {
        return view('admin/links/add');
    }

    //add添加友情链接表单提交的方法
    public function store()
    {
        if ($input = Input::except('_token')) {
            $rules = [
                'link_name' => 'required',
                'link_url' => 'required',
            ];

            $message = [
                'link_name.required' => '链接名称不能为空!',
                'link_url.required' => '链接URL不能为空!',
            ];

            $validator = Validator::make($input, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                $re = Links::create($input);
                if ($re) {
                    return redirect('admin/links');
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

    //编辑友情链接
    public function edit($link_id)
    {
        $field = Links::find($link_id);
        return view('admin.links.edit', compact('field'));
    }

    //用来接收edit提交过来更新
    public function update($link_id)
    {
        $input = Input::except('_token', '_method');
        $re = Links::where('link_id', $link_id)->update($input);
        if ($re) {
            return redirect('admin/links');
        } else {
            return back()->with('errors', '友情链接信息更新失败,请稍后重试!');
        }
    }


    //delete 删除单个友情链接
    public function destroy($link_id)
    {
        $re = Links::where('link_id', $link_id)->delete();
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
