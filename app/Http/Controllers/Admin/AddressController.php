<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Address;
use App\Http\Model\Category;
use App\Http\Model\Province;
use App\Http\Model\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class AddressController extends CommonController
{
    //全部分类列表
    public function index()
    {
        $addresss = (new Address())->tree();

        return view('admin.address.index')->with('data', $addresss);
    }

    //ajax分类排序
    public function changeorder()
    {
        $input = Input::all();
        $cate = Category::find($input['cate_id']);
        $cate->cate_order = $input['cate_order'];
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
    public function create(Request $request)
    {
        $RequestUri = $request->getRequestUri();
        $RequestUriArr = explode('=',$RequestUri);
        $cate_id = isset($RequestUriArr[1]) ? $RequestUriArr[1] : 0;//页码不存在时,默认显示第一页

//        var_dump($RequestUriArr[1]);

        return view('admin/address/add');
    }

    //add添加分类表单提交的方法
    public function store()
    {
        if ($input = Input::except('_token')) {
            $rules = [
                'address_name' => 'required',
                'address_suoxie' => 'required',
            ];

            $message = [
                'address_name.required' => '分类名称不能为空!',
                'address_suoxie.required' => '分类关键词tag标签不能为空!',
            ];//保证tag标签必须存在

//            var_dump($input);exit;
            $validator = Validator::make($input, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                //再执行 拆分入库成功后，再把分类写入数据库
                $re = Address::create($input);//返回刚才写入数据库成功的数据信息及ID
//                var_dump($re['cate_id']);
//                exit;
                if ($re) {
                    return redirect('admin/address');
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
    public function edit($id)
    {
        $field = Address::find($id);
//        var_dump($field);

        return view('admin.address.edit', compact('field'));
    }

    //用来接收edit提交过来更新
    public function update($cate_id)
    {
        $input = Input::except('_token', '_method');
        $re = Category::where('cate_id', $cate_id)->update($input);
        if ($re) {
            return redirect('admin/address');
        } else {
            return back()->with('errors', '分类信息更新失败,请稍后重试!');
        }
    }

    //delete 删除单个分类
    public function destroy($cate_id)
    {
        $re = Category::where('cate_id', $cate_id)->delete();
        Category::where('cate_pid', $cate_id)->update(['cate_pid'=>0]);//顶级分类删除后,把其下面的子分类全部变为顶级分类
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
