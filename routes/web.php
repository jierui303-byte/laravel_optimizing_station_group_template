<?php

use App\Http\Model\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$url = explode('.',$_SERVER['HTTP_HOST']);
//域名前缀
$domainQ = $url[0];
//域名
$domainC = $url[1];
//域名后缀
$domainA = $url[2];

$a = (new Category())->tree();
//var_dump($a);die;

//echo $_SERVER['HTTP_HOST'].'<br/>';//获取当前域名
//echo $_SERVER['REQUEST_URI'].'<br/>';//获取当前域名的后缀
//获取来源网址,即点击来到本页的上页网址
//echo $_SERVER["HTTP_REFERER"].'<br/>';
//获取当前的域名:
//echo $_SERVER['SERVER_NAME'].'<br/>';

//涉及到域名没有备案的环节了

//echo $url[0].'<br/>';
//echo $url[1].'<br/>';
//echo $url[2];

//主域名后台
Route::group(['domain'=>'www.wsfashion.cn', 'middleware' => ['web', 'admin.login'], 'prefix' => 'admin', 'namespace' => 'Admin'], function(){

    Route::get('/', 'IndexController@index');//后台登陆路由
    Route::get('info', 'IndexController@info');//后台登陆路由
    Route::get('quit', 'LoginController@quit');//验证码路由
    Route::any('pass', 'IndexController@pass');//验证码路由

    Route::resource('category', 'CategoryController');//创建文章分类模块 资源路由
    Route::post('category/create', 'CategoryController@update');//创建文章分类模块 资源路由
    Route::post('category/{cate_id}', 'CategoryController@update');//创建文章分类模块 资源路由
    Route::post('cate/changeorder', 'CategoryController@changeorder');//ajax请求

    Route::resource('address', 'AddressController');//创建二级地域模块 资源路由
    Route::post('address/create', 'AddressController@update');//创建二级地域模块 资源路由
    Route::post('address/{cate_id}', 'AddressController@update');//创建二级地域模块 资源路由
    Route::post('address/changeorder', 'AddressController@changeorder');//ajax请求

    Route::resource('zhuanti', 'ZhuantiController');//创建文章分类模块 资源路由
    Route::post('zhuan/changeorder', 'ZhuantiController@changeorder');//ajax请求


    Route::resource('article', 'ArticleController');//创建文章模块 资源路由
    Route::get('article/sitemap', 'ArticleController@sitemap');//创建文章模块 资源路由
    Route::get('article/shoulu', 'ArticleController@shoulu');//创建文章模块 资源路由
    Route::any('article/baidutuisong/{art_id}', 'ArticleController@baidutuisong');//创建文章模块 资源路由


    Route::resource('tag', 'TagController');//创建标签模块 资源路由
    Route::resource('caiji', 'CaijiController');//创建文章模块 资源路由


    Route::resource('links', 'LinksController');//创建友情链接模块 资源路由
    Route::post('links/changeorder', 'LinksController@changeorder');//创建友情链接模块 路由

    Route::resource('navs', 'NavsController');//创建自定义导航模块 资源路由
    Route::post('navs/changeorder', 'NavsController@changeorder');//创建自定义导航模块 路由


    /*注意: get方式请求路由要写在所有方法路由前面,否则页面不会有响应*/
    Route::get('config/putfile', 'ConfigController@putFile');//创建 将配置项写入配置文件的方法 路由
    Route::resource('config', 'ConfigController');//创建网站配置模块 资源路由
    Route::post('config/changeorder', 'ConfigController@changeorder');//创建配置模块排序方法 路由
    Route::post('config/changecontent', 'ConfigController@changeContent');//创建配置模块修改配置值的方法 路由


    Route::any('upload', 'CommonController@upload');//图片上传

});
//Route::group(['domain'=>'www.wsfashion.cn'], function(){
//    Route::any('/admin', 'Admin\IndexController@index');//后台首页登录页
//    /***
//     * 栏目管理
//     * 文章管理
//     * 专题管理
//     * 友链管理
//     * 采集规则
//     * 采集管理
//     * 留言管理
//     *
//     * 主站广告位出租
//     * 二级域名站群出租，主要按照地域产品词，做出排名出租【专题可以自定义】
//     * 二级目录专题出租，地域产品词【二级目录专题模版全部一样】
//     * 要给客户提供一个文章发布的系统后台程序，让客户专门来发文章
//     * 前台展示广告可以分IP来进行展示。
//     *
//     *
//     */
//
//});
//主站前台
Route::group(['domain'=>'www.wsfashion.cn', 'middleware' => ['web']], function(){

    Route::any('/', 'Home\IndexController@index');//前台首页

    //有几类页面是相同的，只是右侧内容不一致，可以采用同一个模版样式 比如封面
    //比如：公司简介，联系我们，经营理念，企业文化，资质证书，售后服务，资料下载等
//    Route::any('/about-{cate_id}-1.html', 'Home\IndexController@about');//公司简介,关于我们
//    Route::any('/contact-{cate_id}-1.html', 'Home\IndexController@contact');//联系我们

    //封面页路由
    //栏目缩写-栏目ID-栏目模版类型【1封面模版 2是列表模版 3是自定义模版】
    Route::any('/{cate_suoxie}-{cate_id}-type{cate_type}.html', 'Home\IndexController@suoxie');//联系我们

    //列表页和内容页路由
    Route::any('/{cate_suoxie}-{cate_id}-{art_id}-type{cate_type}.html', 'Home\IndexController@procontent');//产品内容页

    /**
     * 特点： 栏目缩写-栏目ID-内容ID-1.html
     *
     * 携带一个模版编号，比如1：封面，2为列表，3为自定义
     *
     * 比如：新增一个栏目，选择栏目属性为：封面，列表，自定义
     * 选择封面后，自动生成路由格式为：封面栏目缩写-封面栏目ID-封面模版ID.html
     * 选择列表后，自动生成路由格式为：列表栏目缩写-列表栏目ID-列表模版ID.html
     * 选择自定义后，自动生成路由格式为：自定义栏目缩写-自定义栏目ID-3为自定义.html
     *
     * 相同属性栏目调用模版都是一样的。
     * 封面模版，列表模版，列表内容页模版，自定义模版1，自定义模版2等等。
     *
     */

    //列表页和列表内容页的路由不一样，需要单独设置  比如：产品中心，公司新闻，公司动态，分类文章列表
    //列表栏目缩写-列表栏目ID-列表模版ID.html   顶级栏目和二级栏目ID都是唯一的，路径可以一样
//    Route::any('/product-{cate_id}-1.html', 'Home\IndexController@product');//产品分类列表页
//    Route::any('/product-{cate_id}-{art_id}-1.html', 'Home\IndexController@procontent');//产品内容页

//    Route::any('/product-{cate_id}-{twocate_id}-1.html', 'Home\IndexController@productTwo');//产品分类二级列表页
//    Route::any('/product-{cate_id}-{twocate_id}-{art_id}-1.html', 'Home\IndexController@procontent');//产品分类二级内容页

//    Route::any('/news-{cate_id}-{art_id}-1.html', 'Home\IndexController@content');//文章页
//    Route::any('/news-{cate_id}-1.html', 'Home\IndexController@news');//新闻中心


    //再有一种就是自定义页面，比如留言板
    Route::any('/bbs-{cate_id}-1.html', 'Home\IndexController@bbs');//留言板


    //其他路由
    Route::any('admin/login', 'Admin\LoginController@login');//后台登陆路由
    Route::get('admin/code', 'Admin\LoginController@code');//验证码路由
    Route::get('admin/crypt', 'Admin\LoginController@crypt');//计算加密后密码
    /***
     * 机械设备汇总，机械维修，机械保养，机械维护，机械百科，机械设计，机械组装，机械制造
     * 机械制图，机械生产厂家，全自动机械，半自动机械，人工智能，农业机械、食品机械、机械配件
     * 市场动态，公告，采购，求购，出售，机械人才招聘，机械企业公司库，机械供应信息，机械论坛，
     * 资讯，展会，机械问答，办理会员，价格，行情，直播，机械商城，机械加工
     */

});

/***
 * 主域名是www.wsfashion.cn
 * 后续新增的都是栏目绑定的二级域名  做一个机械行业站群，解析各种机械站的二级域名
 * 比如：www.jierui303.cn  beijing.jierui303.cn nanjing.jierui303.cn
 *
 */

// 地址.wsfashion.cn 地址二级域名判定
Route::group(['domain'=>'{user}.wsfashion.cn'], function(){
    //得出了二级分类名称，
    // 到数据库中查找该类目下的自分类及其自分类下的文章，
    //调用显示出来
    //比方说 beijing  shanghai   nanjing  shandong
    /**
     * 这类的二级地域名称，根据不同的二级目录，创建不同的模版文件夹，里面存放不同的模版文件
     * 比如小额贷款  【每个二级域名都是一个独立的站，www目录主站作为一个出租平台来使用】
     * 北京小额贷款
     * 南京小额贷款
     *
     *
     */
    //首页beijing， 路由固定
    Route::any('/', 'Common\IndexController@index');//首页
    Route::any('/news/{id}', 'Common\IndexController@index');//文章页
    Route::any('/news', 'Common\IndexController@news');//新闻中心
    Route::any('/about-{id}.html', 'Common\IndexController@about');//公司简介,关于我们
    Route::any('/product', 'Common\IndexController@product');//产品分类页
    Route::any('/contact', 'Common\IndexController@contact');//联系我们
    Route::any('/bbs', 'Common\IndexController@bbs');//留言板

//    $a = (new Category())->tree();
//    var_dump($a);
    //这里的路由不能定死了，如果定死了不合适
    //$url[1]根据这个动态顶级路由名称 来判定选择哪个控制器及其相关方法及目录






});

//Route::group(['domain'=>'huawei.{user}.wsfashion.cn'], function($user){
//    //得出了二级分类名称，
//    // 到数据库中查找该类目下的自分类及其自分类下的文章，
//    //调用显示出来
//    //比方说 beijing  shanghai   nanjing  shandong
//    /**
//     * 这类的二级地域名称，根据不同的二级目录，创建不同的模版文件夹，里面存放不同的模版文件
//     * 比如小额贷款  【每个二级域名都是一个独立的站，www目录主站作为一个出租平台来使用】
//     * 北京小额贷款
//     * 南京小额贷款
//     *
//     *
//     *
//     */
//    //首页beijing， 路由固定
//    Route::any('/', 'Common\IndexController@index');//首页
//    Route::any('/news/{id}', 'Common\IndexController@index');//文章页
//    Route::any('/news', 'Common\IndexController@index');//新闻中心
//    Route::any('/about', 'Common\IndexController@index');//公司简介,关于我们
//    Route::any('/product', 'Common\IndexController@index');//产品分类页
//    Route::any('/contact', 'Common\IndexController@index');//联系我们
//    Route::any('/bbs', 'Common\IndexController@index');//留言板
//
//    //这里的路由不能定死了，如果定死了不合适
//    //$url[1]根据这个动态顶级路由名称 来判定选择哪个控制器及其相关方法及目录
//
//
//
//
//
//
//});


//顶级域名判定
//Route::group(['domain'=>'{user}.wsfashion.cn'], function(){
    //得出了二级分类名称，
    // 到数据库中查找该类目下的自分类及其自分类下的文章，
    //调用显示出来
    //比方说 beijing  shanghai   nanjing  shandong
    /**
     * 这类的二级地域名称，根据不同的二级目录，创建不同的模版文件夹，里面存放不同的模版文件
     * 比如小额贷款  【每个二级域名都是一个独立的站，www目录主站作为一个出租平台来使用】
     * 北京小额贷款
     * 南京小额贷款
     *
     *③各个资源路径常量

    一、public_path('uploads');

    说明：public文件路径

    二、base_path('xx');

    三、app_path('xx');

    四、resource_path('xx');
     */
    //首页beijing
//    Route::get('/', function ($user) {
//        echo public_path('uploads');
//        echo '<br>';
//        echo base_path('public');
//        echo '<br>';
//        echo app_path('http');
//        echo '<br>';
//        echo resource_path('views');

//        //判断当前二级域名对应的模版目录是否存在，不存在的话使用公共模版
//        //存在的话则使用自有模版
//        if(is_dir(resource_path('views').'/'.$user)){
//            //模版存在
//            echo '模版存在';
//            //存在模版时，走固定的控制器，但是在模版解析时解析不一样的模版
//
////            return view($user.'.welcome')->with("msg", $user);//自动调用到不同的模版文章进行显示
//        }else{
//            //模版不存在
//            echo '模版不存在';
//            return view('welcome')->with("msg", $user);
//        }

//    });

    //列表页
//    Route::get('/list/2', function ($user) {
//        //根据不同的分类定位到不同的模版中
//        return view($user)->with("msg", $user);
//    });
//
//    //文章页
//    Route::get('/list/article/2', function ($user) {
//        return view('welcome')->with("msg", $user);
//    });
//});