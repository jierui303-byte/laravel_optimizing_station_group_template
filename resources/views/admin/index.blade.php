@extends('layouts.admin')

@section('content')

    <!--头部 开始-->
    <div class="top_box">
        <div class="top_left">
            <div class="logo">杰瑞后台管理模板</div>
            <ul>
                <li><a href="{{url('/')}}" target="_blank" class="active">前台首页</a></li>
                <li><a href="{{url('admin/info')}}" target="main" >管理页</a></li>
            </ul>
        </div>
        <div class="top_right">
            <ul>
                <li>管理员：admin</li>
                <li><a href="{{url('admin/pass')}}" target="main">修改密码</a></li>
                <li><a href="{{url('admin/quit')}}">退出</a></li>
            </ul>
        </div>
    </div>
    <!--头部 结束-->

    <!--左侧导航 开始-->
    <div class="menu_box">
        <ul>
            <li>
                <h3><i class="fa fa-fw fa-picture-o"></i>常用操作</h3>
                <ul class="sub_menu">
                    <li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>导航栏目管理列表</a></li>
                    <li><a href="{{url('admin/address')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>二级地域管理列表</a></li>
                    <li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-cloud-upload"></i>文档管理列表</a></li>
                    <li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>留言管理</a></li>
                    <li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-cloud-upload"></i>发货管理</a></li>
                    <li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-cloud-upload"></i>友链管理列表</a></li>
                </ul>
            </li>
            <li>
                <h3><i class="fa fa-fw fa-picture-o"></i>三级站管理</h3>
                <ul class="sub_menu">
                    <li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>城市二级管理</a></li>
                    <li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-cloud-upload"></i>行业栏目管理</a></li>
                </ul>
            </li>
            <li>
                <h3><i class="fa fa-fw fa-picture-o"></i>网站模版管理</h3>
                <ul class="sub_menu">
                    <li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>城市二级管理</a></li>
                    <li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-cloud-upload"></i>行业栏目管理</a></li>
                </ul>
            </li>
            <li>
                <h3><i class="fa fa-fw fa-picture-o"></i>权重蜘蛛池管理</h3>
                <ul class="sub_menu">
                    <li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>关键词库管理</a></li>
                    <li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-cloud-upload"></i>随机句子库管理</a></li>
                    <li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-cloud-upload"></i>tag标签管理</a></li>
                </ul>
            </li>
            <li>
                <h3><i class="fa fa-fw fa-clipboard"></i>采集管理</h3>
                <ul class="sub_menu">
                    <li><a href="{{url('admin/caiji/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加采集规则</a></li>
                    <li><a href="{{url('admin/caiji')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>采集列表</a></li>
                </ul>
            </li>
            {{--<li>--}}
                {{--<h3><i class="fa fa-fw fa-clipboard"></i>博客板块</h3>--}}
                {{--<ul class="sub_menu">--}}
                    {{--<li>--}}
                        {{--<h3><i class="fa fa-fw fa-clipboard"></i>分类管理</h3>--}}
                        {{--<ul class="sub_menu">--}}
                            {{--<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>--}}
                            {{--<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<h3><i class="fa fa-fw fa-clipboard"></i>文章管理</h3>--}}
                        {{--<ul class="sub_menu">--}}
                            {{--<li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加文章</a></li>--}}
                            {{--<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>文章列表</a></li>--}}
                            {{--<li><a href="{{url('admin/article/sitemap')}}" target="main"><i class="fa fa-refresh"></i>更新网站地图</a></li>--}}
                            {{--<li><a href="{{url('admin/article/shoulu')}}" target="main"><i class="fa fa-refresh"></i>更新文章收录</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<h3><i class="fa fa-fw fa-cog"></i>博客设置</h3>--}}
                        {{--<ul class="sub_menu">--}}
                            {{--<li><a href="{{url('admin/links')}}" target="main"><i class="fa fa-fw fa-image"></i>友情链接</a></li>--}}
                            {{--<li><a href="{{url('admin/navs')}}" target="main"><i class="fa fa-fw fa-navicon"></i>自定义导航</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li>--}}
                {{--<h3><i class="fa fa-fw fa-clipboard"></i>分类管理</h3>--}}
                {{--<ul class="sub_menu">--}}
                    {{--<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>--}}
                    {{--<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<h3><i class="fa fa-fw fa-clipboard"></i>教程专题管理</h3>--}}
                {{--<ul class="sub_menu">--}}
                    {{--<li><a href="{{url('admin/zhuanti/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加教程专题名称</a></li>--}}
                    {{--<li><a href="{{url('admin/zhuanti')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>教程专题名称列表</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<h3><i class="fa fa-fw fa-tags"></i>Tag标签管理</h3>--}}
                {{--<ul class="sub_menu">--}}
                    {{--<li><a href="{{url('admin/tag/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加Tag标签</a></li>--}}
                    {{--<li><a href="{{url('admin/tag')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>Tag标签列表</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<h3><i class="fa fa-fw fa-file-text-o"></i>文章管理</h3>--}}
                {{--<ul class="sub_menu">--}}
                    {{--<li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加文章</a></li>--}}
                    {{--<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>文章列表</a></li>--}}
                    {{--<li><a href="{{url('admin/article/sitemap')}}" target="main"><i class="fa fa-refresh"></i>更新网站地图</a></li>--}}
                    {{--<li><a href="{{url('admin/article/shoulu')}}" target="main"><i class="fa fa-refresh"></i>更新文章收录</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<h3><i class="fa fa-fw fa-file-text-o"></i>留言评论管理</h3>--}}
                {{--<ul class="sub_menu">--}}
                    {{--<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>留言列表</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<h3><i class="fa fa-fw fa-film"></i>视频教程管理</h3>--}}
                {{--<ul class="sub_menu">--}}
                    {{--<li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-cloud-upload"></i>上传视频文件</a></li>--}}
                    {{--<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>视频文件列表</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<h3><i class="fa fa-fw fa-picture-o"></i>个人相册管理</h3>--}}
                {{--<ul class="sub_menu">--}}
                    {{--<li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-cloud-upload"></i>上传相册图片</a></li>--}}
                    {{--<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>相册图片列表</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li>
                <h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
                <ul class="sub_menu">
                    <li><a href="{{url('admin/links')}}" target="main"><i class="fa fa-fw fa-image"></i>友情链接</a></li>
                    <li><a href="{{url('admin/navs')}}" target="main"><i class="fa fa-fw fa-navicon"></i>自定义导航</a></li>
                    <li><a href="{{url('admin/config')}}" target="main"><i class="fa fa-fw fa-cogs"></i>网站配置</a></li>
                    <li><a href="{{url('admin/users')}}" target="main"><i class="fa fa-fw fa-cogs"></i>用户管理</a></li>
                    <li><a href="{{url('admin/users')}}" target="main"><i class="fa fa-fw fa-cogs"></i>积分管理</a></li>
                </ul>
            </li>
            <li>
                <h3><i class="fa fa-fw fa-thumb-tack"></i>工具导航</h3>
                <ul class="sub_menu">
                    <li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>图标调用</a></li>
                    <li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>
                    <li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>
                    <li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!--左侧导航 结束-->

    <!--主体部分 开始-->
    <div class="main_box">
        <iframe src="{{url('admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
    </div>
    <!--主体部分 结束-->

    <!--底部 开始-->
    <div class="bottom_box">
        CopyRight © 2015. Powered By <a href="http://www.apcline.com">http://www.apcline.com</a>.
    </div>
    <!--底部 结束-->

@endsection
