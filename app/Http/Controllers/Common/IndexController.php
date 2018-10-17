<?php

namespace App\Http\Controllers\Common;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Model\Address;
use App\Http\Model\Category;
use Illuminate\Support\Facades\Request;


class IndexController extends CommonController
{
    public $cate_id;//顶级栏目ID
    public $cate_name;//顶级栏目名称
    public $CAIDAN;//顶级栏目下对应的导航条 保存在此，便于其余方法调用

    public function __construct()
    {
        $url = explode('.',$_SERVER['HTTP_HOST']);
        //域名前缀
        $domainQ = $url[0];
        //域名
        $domainC = $url[1];
        //域名后缀
        $domainA = $url[2];

//        echo '域名前缀：'.$domainQ.'<br/>';
//        echo '域名：'.$domainC.'<br/>';
//        echo '域名后缀：'.$domainA.'<br/>';

        $diqu = (new Address())->tree();
        $this->diqu = $diqu;
//        var_dump($diqu);

//        $this->cate_name = (new Address())->getLMSuoxie($domainQ);
        $this->cate_name = '';
//        $this->cate_id = (new Category())->getLMSuoxie($domainQ);


        //获取栏目下的菜单导航条
//        $this->CAIDAN = (new Category())->getAllTwoCAIDAN($this->cate_id);
//        var_dump($this->CAIDAN);
//

    }

    public function index(){
        $CAIDAN = $this->CAIDAN;
        $cate_name = $this->cate_name;
        $diqu = $this->diqu;

        //获取全国地区栏目
//        $diqu = (new Category())->getAllTopCategoryInfo();

        return view('beijing.index', compact('CAIDAN', 'cate_name', 'diqu'));
    }

    public function news(){
        echo '新闻中心';
        $cate_name = $this->cate_name;
        return view('beijing.news', compact('cate_name'));
    }

    public function about(Request $request, $id){
//        echo '关于我们';
        $cate_name = $this->cate_name;
//        var_dump($request->path());
        var_dump($id);
        return view('beijing.about', compact('cate_name'));
    }

    public function product(){
        echo '产品中心';
        $cate_name = 'sss';
        return view('beijing.product', compact('cate_name'));
    }

    public function contact(){
        echo '联系我们';
        $cate_name = $this->cate_name;
        return view('beijing.contact', compact('cate_name'));
    }

    public function bbs(){
        echo '留言板';
        $cate_name = $this->cate_name;
        return view('beijing.bbs', compact('cate_name'));
    }
}
