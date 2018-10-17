<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;


class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'art_id';
    public $timestamps = false;
    protected $guarded = [];


    //文章顶级分类列表及其该类目下所有文章中时间倒叙10篇文章[时间倒序]
    public function getAllTopCategoryArticle($currentTime)
    {
        //声明一个变量
        $topData = array();

        //获取所有的顶级分类ID及其分类名称
        $topNav = (new Category())->getAllTopCategoryId();

        foreach($topNav as $k => $value){
//            var_dump($value['cate_name']);
            //遍历获取每个顶级栏目下的时间倒序最新的10篇文章
            //获取顶级栏目下所有子栏目的文章
            $topNavArticles = $this->orderBy('art_dingTime', 'desc')->where('art_status', '1')->where('cate_pid', $value['cate_id'])->where(function($q1) use($currentTime){
                $q1->orWhere('art_dingTime', '<', $currentTime);
            })->take(13)->get(['art_id', 'art_title', 'art_description', 'art_time', 'art_dingTime', 'art_content']);//获取了所有的顶级栏目
//            var_dump($topNavArticles);
            $topNav[$k]['cate_id'] = $value['cate_id'];//顶级栏目下的文章列表
            $topNav[$k]['cate_name'] = $value['cate_name'];//顶级栏目名称
            $topNav[$k]['articleList'] = $topNavArticles;//顶级栏目下的文章列表
        }

        $topData['topNav'] = $topNav;
//        echo '<pre>';
//            var_dump($topData);
//        echo '</pre>';
        return $topData;
    }

    //所有文章中最新的6篇文章 作为轮播图内容
    public function getHotArticle($currentTime)
    {
        $hotArticle = $this->orderBy('art_dingTime', 'desc')->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->take(8)->get();//take显示limit数量
        return $hotArticle;
    }

    //文章随机推荐10条  暂未修改
    public function getSuiJiArticle()
    {
        //文章随机推荐10条
//        $suijiArticle = Article::orderBy('art_time', 'asc')->get();//take显示limit数量
        $suijiArticle = Article::orderBy('art_dingTime', 'asc')->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->pluck('art_id');//lists()获取包含单个列值的数组
        //lists()获取art_id字段下的值
        $suijiIdArr = array();//随机id数组
        $suijiArticleList = array();//随机id获取到文章数组
        //先获取到随机的id数组
        for($i=0;$i<=10;$i++){
            //判断随机获取文章个数，达到10个的就不需要再获取了
            if(count($suijiIdArr) >= 10){
                break;//跳出循环
            }
            $suijiId = rand(1,count($suijiArticle)-1);//保证文章id是连号的,否则会出错
            //判断一下ID是否重复，重复的话就不放入数组内
            if(in_array($suijiId, $suijiIdArr)){
                continue;//跳出本次循环,继续下次循环
            }
            $suijiIdArr[] = $suijiArticle[$suijiId];
            //再获取所有随机id的文章
            $suijiArticleList[$i] = Article::where('art_id', $suijiArticle[$suijiId])->first();
        }
//        echo '<pre>';
//        var_dump($suijiArticleList);
//        echo '</pre>';
    }

    //获取顶级类目及二级类目名称及ID
    public function getTwoCategoryArticle()
    {
        //获取顶级类目及二级类目名称及ID
        $topNavName = Category::orderBy('cate_order', 'desc')->where('cate_pid', 0)->get();//获取了所有的顶级栏目
        $topTwoNav = array();
        $bgColor = [
            '#70c3ff',
            '#fd6a7f',
            '#7f8ea0',
            '#89d04f',
            '#fd6a7f',
            '#fd6a7f',
            '#fd6a7f',
            '#fd6a7f'
        ];
        foreach($topNavName as $k => $value){
//            var_dump($value['cate_name']);
            $topNavTwos = Category::where('cate_pid', $value['cate_id'])->get();//获取了所有的顶级栏目
            foreach ($topNavTwos as $key=>$v){
                $topTwoNav[$k]['topNavName'] = $value['cate_name'];
                $topTwoNav[$k]['topNavNameId'] = $value['cate_id'];
                $topTwoNav[$k]['twoNavNameList'][$key]['cate_name'] = $v['cate_name'];
                $topTwoNav[$k]['twoNavNameList'][$key]['cate_id'] = $v['cate_id'];
            }
        }

//        echo '<pre>';
//        var_dump($topTwoNav);
//        echo '</pre>';
    }

    //点击量最高的6篇文章(站长推荐)
    public function ff()
    {
        //点击量最高的6篇文章(站长推荐)
        $pics = Article::orderBy('art_view', 'desc')->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->take(6)->get();//take显示limit数量
    }

    //图文列表5篇(带分页)
    public function aa()
    {
        //图文列表5篇(带分页)
        $data = Article::orderBy('art_time', 'desc')->paginate(5);//paginate分页
        $data = Article::leftJoin('category', 'article.cate_id', '=', 'category.cate_id')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->where('art_status', '1')->orderBy('art_dingTime', 'desc')->paginate(10);//paginate分页
    }

    //文章二级分类列表及其类目下10篇文章[时间倒序]
    public function bb()
    {
        //文章二级分类列表及其类目下10篇文章[时间倒序]
        $twoData = array();
        $twoNav = Category::orderBy('cate_order', 'desc')->where('cate_pid', '>', 0)->get();//获取了所有的二级栏目
        foreach($twoNav as $k=>$value){
            $twoNavArticles = Article::orderBy('art_time', 'desc')->where('art_status', '1')->orderBy('art_view', 'desc')->where('cate_id', $value['cate_id'])->where(function($q1) use($currentTime){
                $q1->orWhere('art_dingTime', '<', $currentTime);
            })->take(10)->get();//获取所有二级栏目下的10个文章
            $twoNav[$k]['cate_id'] = $value['cate_id'];
            $twoNav[$k]['cate_name'] = $value['cate_name'];
            $twoNav[$k]['articleList'] = $twoNavArticles;//顶级栏目下的文章列表
            $twoNav[$k]['articleNum'] = count($twoNavArticles);//顶级栏目下的文章列表

//            echo '<pre>';
//            var_dump($twoNav[$k]['cate_name']);
//            echo '</pre>';
        }
        $twoData['twoNav'] = $twoNav;
    }

    //原创文章获取
    public function yuanchuang($currentTime)
    {
        $yuanchuang = $this->orderBy('art_dingTime', 'desc')->where('art_status', '1')->where('art_is_original', 0)->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->take(10)->get();
        return $yuanchuang;
    }

    //原创文章获取
    public function zhuanzhai($currentTime)
    {
        $zhuanzhai = $this->orderBy('art_dingTime', 'desc')->where('art_status', '1')->where('art_is_original', 1)->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->take(10)->get();
        return $zhuanzhai;
    }

    //原创文章获取
    public function phps($currentTime)
    {
        $phps = $this->orderBy('art_dingTime', 'desc')->where('art_status', '1')->where('cate_id', 16)->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->take(10)->get();
        return $phps;
    }

    //原创文章获取
    public function seos($currentTime)
    {
        $seos = $this->orderBy('art_dingTime', 'desc')->where('art_status', '1')->where('cate_pid', 13)->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->take(10)->get();
//        dd($seos);
        return $seos;
    }


    //laravel使用原生sql查询语句 pdo
    public function yuanShengSql()
    {
        //laravel使用原生sql查询语句 pdo
        $seos = DB::select('select * from blog_article where art_id = :id', [':id'=>1]);

        //插入数据
        DB::insert('insert into users (id, name, email, password) values (?, ?, ? , ? )',
            [1, 'Laravel','laravel@test.com','123']);

        //更新
        $affected = DB::update('update users set name="LaravelAcademy" where name = ?', ['Academy']);
        echo $affected;

        //删除
        $deleted = DB::delete('delete from users');
        echo $deleted;

        //通用语句
        DB::statement('drop table users');

        //监听查询事件
        DB::listen(function($sql, $bindings, $time) {
            echo 'SQL语句执行：'.$sql.'，参数：'.json_encode($bindings).',耗时：'.$time.'ms';
        });

        //数据库事务  http://blog.csdn.net/fationyyk/article/details/50856730
        DB::transaction(function () {
            DB::table('users')->update(['id' => 1]);
            DB::table('posts')->delete();
        });

        return $seos;
    }


    //获取顶级分类下seo最新发布的文章：文章所属分类名称，文章内部缩略图
    public function getSeoArticleNew($pageNum){
        $currentTime = time();

        //cate_id=13是SEO的分类ID
        $data = Article::leftJoin('category', 'article.cate_id', '=', 'category.cate_id')
            ->where(function($q1) use($currentTime){
            $q1->orWhere('article.art_dingTime', '<', $currentTime);
        })->where('article.cate_pid', '13')->where('article.art_status', '1')->orderBy('article.art_dingTime', 'desc')->paginate($perPage = 8, $columns = ['*'], $pageName = 'page', $page = $pageNum);//paginate分页

        return $data;
    }


    //根据文章分类ID查找该分类下的其他相关文章
    public function getXGArticle($cate_id)
    {
        $currentTime = time();

        $data = Article::where('cate_id', $cate_id)->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->orderBy('art_id', 'desc')->take(6)->get();
        return $data;
    }

    //获取顶级分类下seo推荐的文章3篇：文章所属分类名称，文章内部缩略图
    public function getSeoArticleTuiJian(){
        $currentTime = time();

        //cate_id=13是SEO的分类ID
        $data = Article::leftJoin('category', 'article.cate_id', '=', 'category.cate_id')
            ->where(function($q1) use($currentTime){
                $q1->orWhere('article.art_dingTime', '<', $currentTime)->where('article.cate_pid', '13')->where('article.art_status', '1');
            })->orderBy('article.art_dingTime', 'desc')->take(1)->get();//paginate分页

        return $data;
    }

    //点击推荐下的每个栏目2篇文章
    public function getSeoArticleTuiJianDown(){
        $currentTime = time();
        $topId = 13;
        $tuijianDown = array();

        //获取所有的seo下板块ID
        $twoIdInfos = (new Category())->getTwoCategory($topId);

        //然后遍历获取每个ID下点击量最多的文章两条，组合成二维数组
        foreach ($twoIdInfos as $k=>$v){
            $tuijianDown[$k] = Article::leftJoin('category', 'article.cate_id', '=', 'category.cate_id')
                ->where(function($q1) use($currentTime,$v){
                    $q1->orWhere('article.art_dingTime', '<', $currentTime)->where('article.cate_id', $v['cate_id'])->where('article.art_status', '1');
                })->orderBy('article.art_dingTime', 'desc')->take(2)->get();//paginate分页
        }
        //cate_id=13是SEO的分类ID
//        $data = Article::leftJoin('category', 'article.cate_id', '=', 'category.cate_id')
//            ->where(function($q1) use($currentTime){
//                $q1->orWhere('article.art_dingTime', '<', $currentTime)->where('article.cate_pid', '13')->where('article.art_status', '1')->orderBy('article.art_dingTime', 'desc');
//            })->take(1)->get();//paginate分页

        return $tuijianDown;
    }

    //获取顶级分类下seo推荐的文章3篇：文章所属分类名称，文章内部缩略图
    public function getSeoArticlePingLun(){
        $currentTime = time();

        //cate_id=13是SEO的分类ID
        $data = Article::leftJoin('category', 'article.cate_id', '=', 'category.cate_id')
            ->where(function($q1) use($currentTime){
                $q1->orWhere('article.art_dingTime', '<', $currentTime)->where('article.cate_pid', '13')->where('article.art_status', '1')->orderBy('article.art_dingTime', 'desc');
            })->take(8)->get();//paginate分页

        //使用联表查询

        return $data;
    }

    //获取顶级分类下seo文章总数量
    public function getSeoArticleAllNum(){
        $currentTime = time();

        //cate_id=13是SEO的分类ID
        $data = Article::where(function($q1) use($currentTime){
                $q1->orWhere('article.art_dingTime', '<', $currentTime)->where('article.cate_pid', '13')->where('article.art_status', '1');
            })->count();//paginate分页

        //使用联表查询

        return $data;
    }

    //获取seo顶级类目下自分类ID的文章列表
    public function getSeoTwoNavArticleAll($cate_id, $pageNum){
        $currentTime = time();

        //cate_id=13是SEO的分类ID
        $data = Article::leftJoin('category', 'article.cate_id', '=', 'category.cate_id')
            ->where(function($q1) use($currentTime){
                $q1->orWhere('article.art_dingTime', '<', $currentTime);
            })->where('article.cate_id', $cate_id)->where('article.art_status', '1')->orderBy('article.art_dingTime', 'desc')->paginate($perPage = 8, $columns = ['*'], $pageName = 'page', $page = $pageNum);//paginate分页

        return $data;
    }


    //获取指定文章ID的内容及信息
    public function getSeoArticleContent($art_id){
        $currentTime = time();
        //文章查看次数自增
        Article::where('art_id', $art_id)->increment('art_view');

        $cate_id = $this->getArticleCateId($art_id);

        //cate_id=13是SEO的分类ID
        $data = Article::leftJoin('category', 'article.cate_id', '=', 'category.cate_id')
            ->where('article.art_id', $art_id)
            ->where('article.art_dingTime', '<', $currentTime)
            ->where('article.art_status', '1')->first();

        return $data;
    }

    //根据文章ID获取分类ID
    public function getArticleCateId($art_id)
    {
        $data = Article::where('art_id', $art_id)->first();
        return $data['cate_id'];
    }

    //获取指定栏目ID下所有文章数量
    public function getCaNum($cate_id){
        $data = Article::where('cate_id', $cate_id)->get();
        return count($data);
    }

    //获取指定栏目ID下所有文章列表
    public function getCaInfoList($cate_id, $pageNum){
        $data = Article::where('cate_id', $cate_id)->orderBy('art_dingTime', 'desc')->paginate($perPage = 1, $columns = ['*'], $pageName = 'page', $page = $pageNum);
        return $data;
    }


    //根据关键词查询文章
    public function searchKeywords($keyword, $pageNum)
    {
        $currentTime = time();

        $data = Article::where('art_title', 'like','%'.$keyword.'%')->get();
        $data = Article::leftJoin('category', 'article.cate_id', '=', 'category.cate_id')
            ->where(function($q1) use($currentTime){
                $q1->orWhere('article.art_dingTime', '<', $currentTime);
            })->where('article.cate_pid', 13)->where('article.art_title', 'like','%'.$keyword.'%')->where('article.art_status', '1')->orderBy('article.art_dingTime', 'desc')->paginate($perPage = 2, $columns = ['*'], $pageName = 'page', $page = $pageNum);//paginate分页

        return $data;
    }


    //获取指定某个栏目ID下 文章的上一篇下一篇
    public function getArticlePrevNext($cate_id, $art_id)
    {
        $currentTime = time();

        //文章的上一篇下一篇
        $article['pre'] = Article::where('art_id', '<', $art_id)->where('cate_id', $cate_id)->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->orderBy('art_id', 'desc')->first();
        $article['next'] = Article::where('art_id', '>', $art_id)->where('cate_id', $cate_id)->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->orderBy('art_id', 'asc')->first();

        return $article;
    }

}
