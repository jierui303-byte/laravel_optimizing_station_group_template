<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Address;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Model\Category;
use App\Http\Model\Article;
use Illuminate\Support\Facades\Request;


class IndexController extends CommonController
{
    public $cate_id;//顶级栏目ID
    public $cate_name;//顶级栏目名称
    public $CAIDAN;//顶级栏目下对应的导航条 保存在此，便于其余方法调用
    public $diqu;

    public function __construct()
    {
        $url = explode('.', $_SERVER['HTTP_HOST']);
        //域名前缀
        $domainQ = $url[0];
        //域名
        $domainC = $url[1];
        //域名后缀
        $domainA = $url[2];

        echo '域名前缀：'.$domainQ.'<br/>';
        echo '域名：'.$domainC.'<br/>';
        echo '域名后缀：'.$domainA.'<br/>';

        //获取全国地区栏目
        $diqu = (new Address())->tree();
        $this->diqu = $diqu;
//        var_dump($diqu);
        //这个是主站域名，地区缩写没有
        $this->cate_name = '';
//        var_dump($this->cate_name);
//        exit;


    }

    public function __call($methodName,$argument){
        echo "实例方法 $methodName 不存在\n";
    }



    public function index()
    {
//        echo 'hello word';
//        echo getPinYin('欢迎光临');
        $cate_name = $this->cate_name;
        $diqu = $this->diqu;

        //获取导航列表
        $a = (new Category())->treeS();
        foreach ($a as $k=>$value){
            echo $value['level'];
            echo str_repeat('--', $value['level']), $value['cate_name'].'<br />';
            echo '<pre>';
            var_dump($value['cate_name']);
            var_dump($value['cate_suoxie']);
            var_dump($value['cate_path']);
            echo 'aaaa';
            echo '</pre>';
        }


        return view('beijing.index', compact('CAIDAN', 'cate_name', 'diqu'));
    }

    //列表页
    public function news(){
        echo '新闻中心';
        $cate_name = $this->cate_name;
        return view('beijing.news', compact('cate_name'));
    }

    //文章页
    public function content(){
        echo '新闻中心';
        $cate_name = $this->cate_name;
        return view('beijing.content', compact('cate_name'));
    }

    //封面页
    public function suoxie(Request $request, $cate_suoxie, $cate_id, $cate_type){
        $cate_name = $this->cate_name;
        echo '$cate_suoxie:=='.$cate_suoxie.'==='.$cate_id;
        //判断栏目类型 $cate_type 【1封面模版 2是列表模版 3是自定义模版】
        /**
         * 1封面模版 fengmian
         * 2是列表模版  list
         * 3是自定义模版
         * 获取到该栏目设定的模版文件分别是啥，找到对应模版文件解析
         *
         */
        if($cate_type == 1){
            //封面页 不同页面类型获取数据变量不一样
            //获取栏目的信息
            $cate_info = (new Category())->getCategoryName($cate_id);
            var_dump($cate_info['cate_name']);
            var_dump($cate_id);

            $twoCates = (new Category())->getAllTwoCAIDAN(3);
            return view('beijing.fengmian', compact('cate_info','cate_name','twoCates'));

        }elseif ($cate_type == 2){
            //列表页
            //获取当前第几页
            $RequestUri = $_SERVER['REQUEST_URI'];
//        var_dump($RequestUri);
            $RequestUriArr = explode('=',$RequestUri);
            $pageNum = isset($RequestUriArr[1]) ? $RequestUriArr[1] : 1;//页码不存在时,默认显示第一页

            $cate_name = $this->cate_name;
            //获取栏目的信息
            $field = (new Category())->getCategoryName($cate_id);
//        var_dump($field['cate_name']);
            //获取栏目下所有产品二级栏目 由于顶级栏目与二级栏目共用一个方法，所以需要判断是顶级还是二级
            $isId = (new Category())->isTwoOne($cate_id);
//        var_dump($isId);
            if($isId == '0'){
                //等于0是顶级栏目
                $twoCates = (new Category())->getAllTwoCAIDAN($cate_id);
            }else{
                //不等于0是二级栏目，二级栏目没有二级目录 所以获取父级栏目ID下的二级栏目
                $twoCates = (new Category())->getAllTwoCAIDAN($isId);
            }

            //获取栏目下所有产品文章列表
            $artList = (new Article())->getCaInfoList($cate_id, $pageNum);

            return view('beijing.product_list', compact('cate_name', 'field', 'artList', 'twoCates'));
        }


    }

    //产品顶级栏目列表页
    public function product(Request $request, $cate_id){
        //获取当前第几页
        $RequestUri = $_SERVER['REQUEST_URI'];
//        var_dump($RequestUri);
        $RequestUriArr = explode('=',$RequestUri);
        $pageNum = isset($RequestUriArr[1]) ? $RequestUriArr[1] : 1;//页码不存在时,默认显示第一页

        $cate_name = $this->cate_name;
        //获取栏目的信息
        $field = (new Category())->getCategoryName($cate_id);
//        var_dump($field['cate_name']);
        //获取栏目下所有产品二级栏目 由于顶级栏目与二级栏目共用一个方法，所以需要判断是顶级还是二级
        $isId = (new Category())->isTwoOne($cate_id);
//        var_dump($isId);
        if($isId == '0'){
            //等于0是顶级栏目
            $twoCates = (new Category())->getAllTwoCAIDAN($cate_id);
        }else{
            //不等于0是二级栏目，二级栏目没有二级目录 所以获取父级栏目ID下的二级栏目
            $twoCates = (new Category())->getAllTwoCAIDAN($isId);
        }

        //获取栏目下所有产品文章列表
        $artList = (new Article())->getCaInfoList($cate_id, $pageNum);

        return view('beijing.product_list', compact('cate_name', 'field', 'artList', 'twoCates'));
    }

    //产品内容页
    public function procontent(Request $request, $cate_suoxie, $cate_id, $art_id, $cate_type){
        echo '联系我们';
        $cate_name = $this->cate_name;

        //获取产品信息
        $proInfo = (new Article())->getSeoArticleContent($art_id);

        //获取栏目下所有产品二级栏目
        $twoCates = (new Category())->getAllTwoCAIDAN($cate_id);

        //获取产品信息的上一篇 下一篇
        $proInfoPN = (new Article())->getArticlePrevNext($cate_id, $art_id);

        return view('beijing.product_article', compact('cate_name', 'proInfo', 'proInfoPN', 'twoCates'));
    }

    //封面页
    public function contact(){
        echo '联系我们';
        $cate_name = $this->cate_name;

        return view('beijing.fengmian', compact('cate_name'));
    }

    //自定义
    public function bbs(){
        echo '留言板';
        $cate_name = $this->cate_name;
        return view('beijing.bbs', compact('cate_name'));
    }
}
