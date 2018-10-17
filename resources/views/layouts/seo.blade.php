<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--百度html验证标签--}}
    <meta name="baidu-site-verification" content="9ZkfFGY3Hy" />
    <meta name="sogou_site_verification" content="WQY4PsZ3Jl"/>


    @yield('info')
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/seo/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/seo/css/nprogress.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/seo/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/seo/css/font-awesome.min.css')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('resources/views/seo/images/icon.png')}}">
    <link rel="shortcut icon" href="{{asset('resources/views/seo/images/favicon.ico')}}">
    <script src="{{asset('resources/views/seo/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('resources/views/seo/js/nprogress.js')}}"></script>
    <script src="{{asset('resources/views/seo/js/jquery.lazyload.min.js')}}"></script>
    <!-- 引入 ECharts 文件 -->
    <script src="{{asset('resources/views/admin/style/js/echarts.min.js')}}"></script>
    <!--[if gte IE 9]>
    <script src="{{asset('resources/views/seo/js/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('resources/views/seo/js/html5shiv.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('resources/views/seo/js/respond.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('resources/views/seo/js/selectivizr-min.js')}}" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script>window.location.href='upgrade-browser.html';</script>
    <![endif]-->
</head>
<body class="user-select">
<header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="header-topbar hidden-xs link-border">
                <ul class="site-nav topmenu">
                    <li><a href="{{url('/tags')}}" >标签云</a></li>
                    <li><a href="{{url('/bookmark')}}" rel="nofollow" >书签</a></li>
                    <li><a href="{{url('/readers')}}" rel="nofollow" >读者墙</a></li>
                    {{--<li>--}}
                        {{--<a href="{{url('/rss')}}" title="RSS订阅" >--}}
                            {{--<i class="fa fa-rss"></i> RSS订阅--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    <li><a href="#" rel="nofollow" >登陆</a></li>
                    <li><a href="#" rel="nofollow" >注册</a></li>
                </ul>
                百度谷歌网站优化⌈SEO外包⌋服务公司,专业承接各种北京seo网站优化推广服务,网站建设,关键词排名,app定制开发,黑帽快排技术
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                @yield('logo')
            </div>
            <div class="collapse navbar-collapse" id="header-navbar">
                <form class="navbar-form visible-xs" action="{{url('/article/search')}}" method="post">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20" autocomplete="off">
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
                        </span>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a data-cont="杰瑞SEO" title="北京seo,杰瑞SEO" href="{{url('/')}}">首页</a></li>
                    <li><a data-cont="北京SEO优化" title="北京SEO优化" href="{{url('/cate/27')}}">北京SEO优化</a></li>
                    <li><a data-cont="北京SEO推广" title="北京SEO推广" href="{{url('/cate/69')}}">北京SEO推广</a></li>
                    <li><a data-cont="北京网络营销" title="北京网络营销" href="{{url('/cate/71')}}">网络营销</a></li>
                    <li><a data-cont="北京网站建设" title="北京网站建设" href="{{url('/cate/61')}}">北京网站建设</a></li>
                    <li><a data-cont="北京黑帽seo" title="北京黑帽seo技术" href="{{url('/cate/55')}}">黑帽seo技术</a></li>
                    <li><a data-cont="北京SEO网站优化,北京SEO整站优化" title="北京SEO网站优化,北京SEO整站优化" href="{{url('/cate/66')}}">SEO整站优化</a></li>
                    <li><a data-cont="SEO诊断服务" title="SEO诊断服务" href="{{url('/cate/63')}}">SEO诊断</a></li>
                    <li><a data-cont="SEO常见问题" title="SEO常见问题" href="{{url('/cate/64')}}">SEO常见问题</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>



    @yield('content')

    @yield('right')


<footer class="footer">
    <div class="container">
        版权归 <a href="{{url('/')}}" target="_blank">杰瑞SEO工作室</a> 所有 | 基于Laravel框架开发 | <a href="http://jierui303.blog.163.com/" target="_blank" rel="nofollow">网易博客</a> | <a href="http://blog.sina.com.cn/u/2133961123" target="_blank" rel="nofollow">新浪博客</a> | <a href="http://www.miitbeian.gov.cn/" rel="nofollow">京ICP备16056489号</a> | 托管于<a href="https://promotion.aliyun.com/ntms/act/ambassador/sharetouser.html?userCode=cdiv8d2g&productCode=vm&utm_source=cdiv8d2g"  rel="nofollow">阿里云ECS</a> |
    </div>
    <div id="gotop"><a class="gotop"></a></div>
</footer>
<script src="{{asset('resources/views/seo/js/bootstrap.min.js')}}"></script>
<script src="{{asset('resources/views/seo/js/jquery.ias.js')}}"></script>
<script src="{{asset('resources/views/seo/js/scripts.js')}}"></script>
</body>
</html>
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
