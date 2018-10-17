<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;//加密模块
use Illuminate\Support\Facades\Input;

require_once 'resources/org/code/Code.class.php';

class LoginController extends CommonController
{
    public function login()
    {
        if ($input = Input::all()) {
            $code = new \Code;
            $_code = $code->get();

            if (strtoupper($input['code']) != $_code) {
//                var_dump($input['code']);//表单的值
                var_dump($_code);//生成的session值没保存到.
//                exit;
                return back()->with('msg', '验证码错误!');//这个机制是把值存在了session里面 取值:session('msg')
            }

            $user = User::first();
            if ($user->user_name != $input['user_name'] || Crypt::decryptString($user->user_pass) != $input['user_pass'] ) {
                return back()->with('msg', '用户名或密码错误!');
            }

            session(['user'=>$user]);//将用户信息存入session中
//            dd(session('user'));

            return redirect('admin/');//跳转
        } else {
            return view('admin.login');
        }

    }

    public function code()
    {
        $code = new \Code;
        $code->make();
        
    }

    public function getcode()
    {
        $code = new \Code;
        dd($code->get());
    }
    
    public function crypt()
    {
        $str = 'Lisa7410qaz..';
        $str_p = 'eyJpdiI6Imd4aXpiTDVEVXBsXC84ODMrNTlMck93PT0iLCJ2YWx1ZSI6IlJyM0F3WHR3cUdhdHd2eHg2VW9US3c9PSIsIm1hYyI6IjMzN2NiODQzNTVmMzYyMzhkYWQzYTVkOTE5N2FkYTkwOGYyZDk5YWY0MDc5ZWY3YjdkMGQ2OTc0ZWQyNDNmZTAifQ';

        //加密方法
        $encrypted = Crypt::encryptString($str);
        var_dump($encrypted);

        //解密方法
        $decrypted = Crypt::decryptString($encrypted);
    }

    public function quit()
    {
        session(['user'=>null]);
        return redirect('admin/login');
    }
}
