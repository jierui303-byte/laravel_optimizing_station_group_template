<?php

namespace App\Http\Controllers\Common;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Model\Category;


class CommonController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //初始化, 里面存取的数据对于子类可以共享数据
    public function __construct()
    {
//        $url = explode('.',$_SERVER['HTTP_HOST']);
//        //域名前缀
//        $domainQ = $url[0];
//        //域名
//        $domainC = $url[1];
//        //域名后缀
//        $domainA = $url[2];
//
//        echo '域名前缀：'.$domainQ.'<br/>';
//        echo '域名：'.$domainC.'<br/>';
//        echo '域名后缀：'.$domainA.'<br/>';
//
//        View::share('categorysTTl', $domainQ);//把变量共享,所有子类视图均可使用

        $twoCates = (new Category())->getAllTwoCAIDAN(3);
        var_dump($twoCates);
        View::share('twoCates', $twoCates);//把变量共享,所有子类视图均可使用

    }
}
