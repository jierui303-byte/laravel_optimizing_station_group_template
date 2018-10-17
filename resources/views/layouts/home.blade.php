<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->


    {{--百度站长平台HTML标签验证--}}
    <meta name="baidu-site-verification" content="xO6Ex9eT0S" />
    {{--百度联盟HTML标签验证--}}
    <meta name="baidu_union_verify" content="aecac7b3e0cbd3f7a6ada5640e8503e2">

    {{--搜狗站长平台HTML标签验证--}}
    <meta name="sogou_site_verification" content="n9oP846vbb"/>
    {{--搜狗站长平台HTML标签验证--}}

    {{--360站长平台HTML标签验证--}}
    <meta name="360-site-verification" content="80962eaa2a4491a0513e375ef1e0d2a6" />
    {{--360站长平台HTML标签验证--}}

    {{--神马站长平台HTML标签验证--}}
    <meta name="shenma-site-verification" content="912be43594bb51cf09d7fbd86b24788c_1511680534">
    {{--神马站长平台HTML标签验证--}}

    {{--http://www.2898.com/sourcelist.htm##站长资源平台HTML标签验证--}}
    <meta name="wlhlauth" content="e19fc90d9ae09fe7551950b5e2c4ff7c"/>
    {{--http://www.2898.com/sourcelist.htm##站长资源平台HTML标签验证--}}



    <link rel="icon" href="{{asset('resources/views/home/images/favicon1.ico')}}" type="image/x-icon" />
    <link rel="canonical" href="http://www.jierui303.com">
    @yield('info')
    <link href="{{asset('resources/views/home/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/animate/animate.min.css')}}" rel="stylesheet">

    <link href="{{asset('resources/views/home/css/base.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/index.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/new.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/tagscloud.css')}}" rel="stylesheet">

    <!--引入的prism.js代码高亮插件, 暂时无效-->
    <link href="{{asset('resources/views/home/css/prism.css')}}" rel="stylesheet">

    <!-- 百度编辑器代码高亮引入文件-->
    <link rel="stylesheet" href="{{asset('resources/org/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css')}}" type="text/css">
    <script type="text/javascript" src="{{asset('resources/org/ueditor/third-party/SyntaxHighlighter/shCore.js')}}"></script>
    <script>
        SyntaxHighlighter.config.bloggerMode = true;
        SyntaxHighlighter.defaults['class-name'] = 'daima';
        SyntaxHighlighter.defaults['tab-size'] = 2;
        SyntaxHighlighter.defaults['toolbar'] = true;
        SyntaxHighlighter.defaults['quick-code'] = true;
        SyntaxHighlighter.defaults['pad-line-numbers'] = true;
//        SyntaxHighlighter.defaults['gutter'] = false;
        SyntaxHighlighter.defaults['smart-tabs'] = false;
        SyntaxHighlighter.all();
    </script>

    <!--检测访问页面的手机设备,自动跳转到移动页面中-->
    <SCRIPT LANGUAGE="JavaScript">
        function mobile_device_detect(url)
        {
            var thisOS=navigator.platform;
            var os=new Array("iPhone","iPod","iPad","android","Nokia","SymbianOS","Symbian","Windows Phone","Phone","Linux armv71","MAUI","UNTRUSTED/1.0","Windows CE","BlackBerry","IEMobile");
            for(var i=0;i<os.length;i++)
            {
                if(thisOS.match(os[i]))
                {
                    window.location=url;
                }
            }

            //因为相当部分的手机系统不知道信息,这里是做临时性特殊辨认
            if(navigator.platform.indexOf('iPad') != -1)
            {
                window.location=url;
            }

            //做这一部分是因为Android手机的内核也是Linux
            //但是navigator.platform显示信息不尽相同情况繁多,因此从浏览器下手，即用navigator.appVersion信息做判断
            var check = navigator.appVersion;

            if( check.match(/linux/i) )
            {
                //X11是UC浏览器的平台 ，如果有其他特殊浏览器也可以附加上条件
                if(check.match(/mobile/i) || check.match(/X11/i))
                {
                    window.location=url;
                }
            }

            //类in_array函数
            Array.prototype.in_array = function(e)
            {
                for(i=0;i<this.length;i++)
                {
                    if(this[i] == e)
                        return true;
                }
                return false;
            }
        }
        mobile_device_detect("http://m.jierui303.com/");
    </SCRIPT>
    <!--检测访问页面的手机设备,自动跳转到移动页面中-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('resources/views/home/js/modernizr.js')}}"></script>
    <![endif]-->
</head>
<body STYLE="padding-top:0;">

<div class="container-fluid" style="padding:0;">
<div class="container-fluid logo" style="padding: 0;background: #fff;">
    {{--<div class="row" style="background-repeat: no-repeat; background-attachment: scroll; background-position: center top; background-image: url("//i.gtimg.cn/qzone/space_item/orig/12/107436_top.jpg") !important;">--}}
        {{--<a href="" style="height: 300px;">--}}
            {{--<img src="http://i.gtimg.cn/qzone/space_item/orig/12/107436_top.jpg" alt="">--}}
        {{--</a>--}}
    {{--</div>--}}
    <div class="container">
        <div class="row">
            <div class="gonggao">
                公告：
                <div class="gonggaoList">
                    {{--<a href="">xampp服务器 在win7上的安装以及虚拟机配置</a>--}}
                    {{--<a href="">windows7[win7]服务器上配置虚拟机时，hosts文件修改后无法保存的解决方案</a>--}}
                    {{--<a href="">linux 服务器 github import repository创建github仓库</a>--}}
                    {{--<a href="">虚拟机linux服务器操作系统中安装vmtools</a>--}}
                    {{--<a href="">a标签如何增加nofollow标签_SEO中的</a>--}}
                    @foreach($hot as $k=>$v)
                        <a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <h1>
                <a class="navbar-brand" href="{{url('/')}}" title="Jerry's Blog_Jerry的编程之路" style="margin:0 0 15px 0;padding:0;">
                    <img src="{{url('resources/views/home/images/logo1.png')}}" alt="">
                </a>
            </h1>
        </div>
        {{--<div class="row">--}}
            {{--<form class="navbar-form navbar-right hidden-sm hidden-md hidden-xs">--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" class="form-control" placeholder="Search">--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-default">Submit</button>--}}
            {{--</form>--}}
        {{--</div>--}}
    </div>
</div>

<div class="container-fluid" style="padding:0;">

    {{--<div class="row">--}}
        {{--bootstrap的导航条--}}
        <nav class="navbar navbar-default" style="margin-top:0;border-radius: 0;min-height:40px;">
            <div class="container" style="padding: 0;">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="row navbar-header">
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">--}}
                    <button type="button" class="collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="row collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding: 0;">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active">
                            <h1>
                            <a href="{{url('/')}}" title="Jerry's Blog_Jerry的编程之路" style="padding-top: 9px;padding-bottom: 9px;">首页 <span class="sr-only">(current)</span></a>
                            </h1>
                        </li>
                        @foreach($navs as $k=>$v)
                            <li><a href="{{$v->nav_url}}" title="自学{{$v->nav_name}}编程技术" style="padding-top: 15px;">{{$v->nav_name}}</a></li>
                        @endforeach
                        <li class="dropdown">
                            <a href="{{url('cate/1')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top: 15px;">PHP<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('cate/2')}}" title="">PHP函数</a></li>
                                <li><a href="{{url('cate/3')}}" title="">PHP框架</a></li>
                                <li><a href="{{url('cate/14')}}" title="">PHP session与cookie</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{url('cate/2')}}" title="">PHP文件上传下载</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{url('cate/15')}}" title="">PHP操作Mysql数据库</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{url('cate/4')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top: 15px;">web前端 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('cate/5')}}" title="">HTML5</a></li>
                                <li><a href="{{url('cate/6')}}" title="">CSS3</a></li>
                                <li><a href="{{url('cate/7')}}" title="">Javascript</a></li>
                                <li><a href="{{url('cate/8')}}" title="">SVG</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{url('cate/9')}}" title="">canvas</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{url('cate/16')}}" title="">百度MIP</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{url('cate/10')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top: 15px;">Linux <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('cate/10')}}" title="">Linux服务器配置及搭建</a></li>
                                <li><a href="{{url('cate/10')}}" title="">Linux SVN及git</a></li>
                                <li><a href="{{url('cate/10')}}" title="">Linux服务器架构搭建</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{url('cate/10')}}" title="">Linux服务器性能检测</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{url('cate/10')}}" title="">Linux服务器集群学习</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{url('cate/11')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top: 15px;">jQuery <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('cate/22')}}" title="">jquery框架</a></li>
                                <li><a href="#" title="">jquery插件</a></li>
                                <li><a href="#" title="">jquery特效</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="http://tool.jierui303.com" title="">自制SEO优化小工具</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#" title="">One more separated link</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top: 15px;">APP <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" title="">VUE APP开发</a></li>
                                <li><a href="#" title="">React Native App开发</a></li>
                                <li><a href="#" title="">Ionic App开发</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#" title="">Hbuilder App开发</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#" title="">混合app开发视频</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top: 15px;">数据库 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('cate/17')}}" title="">mysql数据库</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top: 15px;">SEO <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('cate/27')}}" title="">SEO优化</a></li>
                                <li><a href="{{url('cate/69')}}" title="">SEO推广</a></li>
                                <li><a href="{{url('cate/71')}}" title="">网络营销</a></li>
                                <li><a href="{{url('cate/66')}}" title="">整站优化</a></li>
                                <li><a href="{{url('cate/63')}}" title="">SEO诊断</a></li>
                                <li><a href="{{url('cate/55')}}" title="">黑帽SEO</a></li>
                                <li><a href="{{url('cate/64')}}" title="">SEO问答</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        {{--bootstrap的导航条--}}
    {{--</div>--}}
{{--</div>--}}

</div>


<div class="container" style="padding:0;">

    <div class="shuye"></div>

<!--公告栏-->
{{--<div class="row" style="height: 100px;background: orchid">--}}

{{--</div>--}}
<!--公告栏-->






@section('content')

    <h3>
        <a href="" title="">最新<span>文章</span></a>
    </h3>
    <ul class="rank">
        @foreach($hot as $k=>$v)
            <li><a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>
        @endforeach
    </ul>


    <h3>
        <a href="" title="">随机<span>文章</span></a>
    </h3>
    <ul class="rank">
        @foreach($suijiArt as $k=>$v)
            <li><a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>
        @endforeach
    </ul>

    <h3 class="ph">
        <a href="" title="">博客<span>标签</span></a>
    </h3>
    <div class="rank">
    @foreach($tagList as $k=>$v)
    <a href="{{url('tag/'.$v['id'])}}" style="padding:5px;color:#0da344;display: inline-block;">{{$v['tag_name']}}</a>
    @endforeach
    </div>

        {{--<h3 class="ph">--}}
        {{--<p>最新<span>文章</span></p>--}}
    {{--</h3>--}}
    {{--<ul class="paih">--}}
        {{--@foreach($hot as $k=>$v)--}}
            {{--<li><a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}


    {{--<h3 class="ph">--}}
        {{--<p>随机<span>文章</span></p>--}}
    {{--</h3>--}}
    {{--<ul class="paih">--}}
        {{--@foreach($hot as $k=>$v)--}}
            {{--<li><a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}


    {{--把最新文章,采用监控元素位置,然后把元素置顶,只有左侧内容可以滚动,右侧浮动不动.--}}

    {{--<h3 class="ph">--}}
        {{--<p>微信订阅号<span>二维码</span></p>--}}
    {{--</h3>--}}
    {{--<h3 class="ph">--}}
        {{--<p>android<span>混合app下载</span></p>--}}
    {{--</h3>--}}
    {{--<h3 class="ph">--}}
        {{--<p>iOS<span>混合app下载</span></p>--}}
    {{--</h3>--}}


@show

</div>

    <div class="row footer">
        <div class=" footerTop">
            <div class="col-lg-4">
                <h2>Jerry的编程之路</h2>
            </div>
            <div class="col-lg-4">
                {{--<p>技术分享论坛：http://www.apcline.com   暂定域名</p>--}}
            </div>
            <div class="col-lg-4">
                <h4>杰瑞博客*APP下载</h4>
                <div>iPhone</div>
                <div>Android</div>
            </div>
        </div>
        <div class=" footerBottom">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 footerBottomCenter">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>
                    <a href="#">PHP教程</a>
                    <a href="#">HTML教程</a>
                    <a href="#">Javascript教程</a>
                    <a href="#">CSS教程</a>
                    <a href="#">jQuery教程</a>
                    <a href="#">jQuery UI教程</a>
                    <a href="#">Bootstrap教程</a>
                    <a href="#">Mysql教程</a>
                    <a href="#">Linux教程</a>
                    <a href="#">Nginx教程</a>
                    <a href="#">Apache教程</a>
                    </p>
                    {{--<p>Design by APCline <a href="http://www.apcline.com/" target="_blank">http://www.apcline.com</a> <a href="/">网站统计</a></p>--}}
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>
                        {!! Config::get('web.copyright') !!}
                        {!! Config::get('web.web_count') !!}
                    </p>
                    <p>站长：Jerry 电话：13523419148 qq:841287295</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {{--<p>--}}
                        {{--<a href="http://www.miitbeian.gov.cn/">京ICP备16056489号</a>--}}
                        {{--<a href="http://webscan.360.cn/index/checkwebsite/url/jierui303.com"><img border="0" src="http://img.webscan.360.cn/status/pai/hash/c3973cc8811063b3720e9fb87bfcc0f7"/></a>--}}
                    {{--</p>--}}
                    {{--<p>Design by APCline <a href="http://www.apcline.com/" target="_blank">http://www.apcline.com</a> <a href="/">网站统计</a></p>--}}
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>

<script src="{{asset('resources/views/home/js/prism.js')}}"></script>
{{--<script src="{{asset('resources/views/home/js/silder.js')}}"></script>--}}



<!--swiper引入文件-->
<script src="{{asset('resources/views/home/js/idangerous.swiper.min.js')}}"></script>
<script>
    var swiperParent = new Swiper('.swiper-parent',{
        pagination: '.pagination-parent',
        paginationClickable: true,
        loop: true,
        slidesPerView: 6,
        autoplay:5000,
        autoplayDisableOnInteraction : false
    });
    var swiperNested1 = new Swiper('.swiper-nested',{
        mode: 'vertical',
        pagination: '.pagination-nested',
        paginationClickable: true,
        loop: true,
        slidesPerView: 2,
        autoplay:5000,
        autoplayDisableOnInteraction : false
    });
</script>
<!--swiper引入文件-->
</body>
</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('resources/views/home/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
{{--<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>--}}

<!--兼容bootstrap的tab切换页-->
<!-- Latest compiled and minified CSS -->
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">--}}

{{--<!-- Optional theme -->--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">--}}

{{--<!-- Latest compiled and minified JavaScript -->--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>--}}
{{--<!--兼容bootstrap的tab切换页-->--}}





<!--bootstrap的masonry和imagesloaded插件实现瀑布流-->
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script>
    var $container = $('.masonry-container');
    $container.imagesLoaded( function () {
        $container.masonry({
            columnWidth: '.item',
            itemSelector: '.item'
        });
    });
    $('a[data-toggle=tab]').each(function () {
        var $this = $(this);

        $this.on('shown.bs.tab', function () {
            $container.imagesLoaded( function () {
                $container.masonry({
                    columnWidth: '.item',
                    itemSelector: '.item'
                });
            });
        });
    });
</script>
<!--bootstrap的masonry和imagesloaded插件实现瀑布流-->


<script type="text/javascript">
    $(function(){
//        //控制页面滚动位置的执行动画  稍微改进了封装成函数调用了。
//        var eTop=$('.tuWenTeXiao').offset().top;//橙色容器距离整个页面顶部的距离
//        var wTop=$(window).height();//绿色框可视区域的高度
//        $(window).on('resize', function(){
//            wTop=$(window).height();//缩放窗口这个高度会改变，需要再取得
//        });
//        $(window).on('scroll', function(){
//            var dTop = $(document).scrollTop();//绿色框可视区域上面到黑色页面顶部的距离，会实时改变
//            //放在scroll事件里面
//            if(dTop+wTop-100 > eTop){
//                //动画播放事件
//                console.log(eTop);
//                $('.tuWenTeXiao').addClass('animated bounce');
//                $('.tuWenTeXiaoLeft').addClass('animated bounceInUp');
//            }
//        });


//        addAnimates('tuWenTeXiaoLeft', 'animated bounceInLeft');
//        addAnimates('tuWenTeXiaoRight', 'animated bounceInRight');
//        addAnimates('products', 'animated bounceInUp');//作品列表
//        addAnimates('myLink', 'animated rotateInUpLeft');//友情链接
//
//
//        function addAnimates(className, classStyleStr){
//            //控制页面滚动位置的执行动画
//            var eTop=$('.'+className).offset().top;//橙色容器距离整个页面顶部的距离
//            var wTop=$(window).height();//绿色框可视区域的高度
//            $(window).on('resize', function(){
//                wTop=$(window).height();//缩放窗口这个高度会改变，需要再取得
//            });
//            $(window).on('scroll', function(){
//                var dTop = $(document).scrollTop();//绿色框可视区域上面到黑色页面顶部的距离，会实时改变
//                //放在scroll事件里面
//                if(dTop+wTop+300 > eTop){
//                    //动画播放事件
//                    console.log(eTop);
//                    $('.'+className).addClass(classStyleStr);
//                }
//            });
//        }


        //更改bootstrap的tab切换触发事件，改为鼠标移动上时进行切换
        $('.tabDiv a[data-toggle="tab"]').on('mousemove', function(){
            $(this).tab('show');
        });
        //更改bootstrap的tab切换触发事件，改为鼠标移动上时进行切换
        $('.clickPaihang a[data-toggle="tab"]').on('mousemove', function(){
            $(this).tab('show');
        });


        //更改bootstrap的tab切换触发事件，改为鼠标移动上时进行切换
        $('.lbTab a[data-toggle="tab"]').on('mousemove', function(){
            $(this).tab('show');
        });



    })

</script>

<!--百度链接提交自动推送代码-->
<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
<!--百度链接提交自动推送代码-->

<!--360链接自动推送代码-->
<script>
    (function(){
        var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?058afa0b33dfc964d9359638ab9c2c13":"https://jspassport.ssl.qhimg.com/11.0.1.js?058afa0b33dfc964d9359638ab9c2c13";
        document.write('<script src="' + src + '" id="sozz"><\/script>');
    })();
</script>
<!--360链接自动推送代码-->



<script>
    (function(){
        //gonggaoList 公告上下滚动
        var aLength = $('.gonggaoList a').length-1;
        var top = 0;
        var timer = setInterval(function(){
            top += 25;
//            console.log(top+'====');
            //当top值最大时恢复为0
            if(top > 25*aLength){
                top = 0;
            }
            $('.gonggaoList').css({
                top: -top+'px',
                transition: 'all 1s'
            });
        }, 3000);
    })()
</script>
<script>
    $(function () {
        $(".dropdown").mouseover(function () {
            $(this).addClass("open");
        });

        $(".dropdown").mouseleave(function(){
            $(this).removeClass("open");
        })

    });

</script>
<script>
    $(function(){
        var targetLjV = 0;

        $(window).scroll(function(){
            var targetHeight = $(".visitors").offset().top;
            var scrollTop = $(this).scrollTop();
            console.log(scrollTop);
            //鼠标向上走，值减少 向下走，值增加
            if(scrollTop <= targetLjV){
                console.log('向上：'+scrollTop);
                if(targetLjV == 0){
                    return false;
                }
                $(".visitors").removeClass('dingwei');
                //取消定位，然后值归位0
                targetLjV = 0;
                //重新获取一次元素距离顶部的距离
                targetHeight = $(".visitors").offset().top;
            }
            if(scrollTop>targetHeight-400){
                if(targetLjV != 0){
                    return false;
                }
                targetLjV = scrollTop;
                console.log('木白哦位置：'+targetLjV);
                $(".visitors").addClass('dingwei');
            }
        });

    });
</script>
