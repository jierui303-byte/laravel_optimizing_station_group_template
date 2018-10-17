<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
//use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Validator;

class IndexController extends CommonController
{
    public function index()
    {
        return view('admin.index');
    }

    //后台页面中间页面
    public function info()
    {
        //获取文章每天更新篇数


        return view('admin.info');
    }

    //更改超级管理员密码
    public function pass()
    {
        if ($input = Input::all()) {
            $rules = [
              'password' => 'required|between:6,20|confirmed',
            ];

            $message = [
                'password.required' => '新密码不能为空!',
                'password.between' => '新密码必须在6-20位之间!',
                'password.confirmed' => '新密码和确认密码不一致!',
            ];

            $validator = Validator::make($input, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                $user = User::first();
                $_password = Crypt::decrypt($user->user_pass);
                if ($input['password_o'] == $_password) {
                    $user->user_pass = Crypt::encrypt($input['password']);
                    $user->update();
                    return back()->with('errors', '密码修改成功!');
                } else {
                    return back()->with('errors', '原密码错误!');
                }

            } else {
                return back()->withErrors($validator);
            }

        } else {
            return view('admin.pass');
        }
        return view('admin.pass');
    }
}
