@extends('layouts.admin')

@section('content')

    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 系统基本信息
    </div>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/category/create')}}"><i class="fa fa-plus"></i>新增分类</a>
                <a href="{{url('admin/tag/create')}}"><i class="fa fa-plus"></i>新增Tag标签</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>新增文章</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>城市二级管理</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>网站模版管理</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>行业栏目管理</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>关键词库管理</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>随机句子库管理</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>tag标签管理</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>采集地址列表</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>采集规则管理</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>友链管理</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>引蜘蛛链接管理</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>权重蜘蛛池管理</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>留言管理</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>发货管理</a>
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i></a>

                {{--<a href="#"><i class="fa fa-recycle"></i>批量删除</a>--}}
                {{--<a href="#"><i class="fa fa-refresh"></i>更新排序</a>--}}
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->


    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>文章每日更新</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                <div id="main" style="width: 600px;height:400px;"></div>
                <script type="text/javascript">
                    // 基于准备好的dom，初始化echarts实例
                    var myChart = echarts.init(document.getElementById('main'));

                    var option = {
                        color: ['#3398DB'],
                        tooltip : {
                            trigger: 'axis',
                            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
                            }
                        },
                        grid: {
                            left: '3%',
                            right: '4%',
                            bottom: '3%',
                            containLabel: true
                        },
                        xAxis : [
                            {
                                type : 'category',
                                data : ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                                axisTick: {
                                    alignWithLabel: true
                                }
                            }
                        ],
                        yAxis : [
                            {
                                type : 'value'
                            }
                        ],
                        series : [
                            {
                                name:'直接访问',
                                type:'bar',
                                barWidth: '60%',
                                data:[10, 52, 200, 334, 390, 330, 220]
                            }
                        ]
                    };

                    // 使用刚指定的配置项和数据显示图表。
                    myChart.setOption(option);
                </script>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->


    <div class="result_wrap">
        <div class="result_title">
            <h3>系统基本信息</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>操作系统</label><span>{{PHP_OS}}</span>
                </li>
                <li>
                    <label>运行环境</label><span>{{$_SERVER['SERVER_SOFTWARE']}}</span>
                </li>
                <li>
                    <label>PHP运行方式</label><span>apache2handler</span>
                </li>
                <li>
                    <label>静静设计-版本</label><span>v-0.1</span>
                </li>
                <li>
                    <label>上传附件限制</label><span><?php echo get_cfg_var("upload_max_filesize") ? get_cfg_var("upload_max_filesize") : '不允许上传附件';?></span>
                </li>
                <li>
                    <label>北京时间</label><span><?php echo date('Y年m月d日 H时i分s秒');?></span>
                </li>
                <li>
                    <label>服务器域名/IP</label><span>{{$_SERVER['SERVER_NAME']}} [ {{$_SERVER['SERVER_ADDR']}} ]</span>
                </li>
                <li>
                    <label>Host</label><span>{{$_SERVER['SERVER_ADDR']}}</span>
                </li>
            </ul>
        </div>
    </div>


    <div class="result_wrap">
        <div class="result_title">
            <h3>使用帮助</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    1. 文章收录检测情况
                    2. 文章主动推送功能
                    3. 每日文章更新动态图标
                    4. 首页被收录的动态图标
                </li>
                <li>
                    <label>官方交流网站：</label><span><a href="http://www.apcline.com">http://www.apcline.com</a></span>
                </li>
                <li>
                    <label>官方交流QQ群：</label><span><a href="#"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png"></a></span>
                </li>
            </ul>
        </div>
    </div>
    <!--结果集列表组件 结束-->

@endsection
