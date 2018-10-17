@extends('layouts.admin')


@section('content')

    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 文章管理
    </div>
    <!--面包屑导航 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_title">
                <h3>文章列表</h3>
            </div>
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>新增文章</a>
                    <a href="{{url('admin/article')}}"><i class="fa fa-recycle"></i>全部文章列表</a>
                    <a href="#"><i class="fa fa-refresh"></i>更新网站地图</a>
                    <form action="" method="">
                        <input type="text" value="" name="keywords">
                        <input type="submit" name="submit" value="搜索">
                    </form>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th class="tc">ID</th>
                        <th>SEO标题</th>
                        {{--<th class="tc" width="20%">SEO关键字</th>--}}
                        {{--<th class="tc" width="20%">SEO描述</th>--}}
                        <th class="tc" width="8%">文章状态</th>
                        <th class="tc" width="10%">查看文章</th>
                        <th class="tc" width="10%">创建时间</th>
                        <th class="tc" width="10%">定时发布</th>
                        <th class="tc" width="8%">是否收录</th>
                        <th class="tc" width="8%">收录时间</th>
                        <th class="tc" width="20%">操作</th>
                    </tr>
                    @foreach($data as $v)
                    <tr>
                        <td class="tc">{{$v->art_id}}</td>
                        <td>
                            <a href="https://www.baidu.com/s?wd=http://jierui303.com/a/{{$v->art_id}}">{{$v->art_title}}</a>
                        </td>
                        {{--<td>{{$v->art_tag}}</td>--}}
                        {{--<td>{{$v->art_description}}</td>--}}
                        @if($v->art_status == 1)
                            <td>已发布</td>
                            @else
                            <td>草稿状态</td>
                            @endif
                        <td>
                            <a href="http://jierui303.com/a/{{$v->art_id}}">查看文章</a>
                        </td>
                        <td>{{date('Y-m-d', $v->art_time)}}</td>
                        <td>{{date('Y-m-d', $v->art_dingTime)}}</td>
                        @if($v->art_isSouLu == '1')
                            <td style="color: red">已收录</td>
                        @else
                            <td>未收录</td>
                        @endif
                        <td>{{$v->art_souLuDate}}</td>
                        <td>
                            <a href="{{url('admin/article/'.$v->art_id.'/edit')}}">修改</a>
                            <a href="javascript:;" onclick="delArt({{$v->art_id}})">删除</a>
                            <a href="{{url('admin/article/baidutuisong/'.$v->art_id)}}">主动推送</a>
                        </td>
                    </tr>
                    @endforeach
                </table>

                <div class="page_list">
                    {{$data->links()}}
                </div>

            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
<style>
    .result_content ul li span {
        font-size: 15px;
        padding: 6px 12px;
    }
</style>

<script type="text/javascript">
    //删除单个文章
    function delArt(art_id){
        //询问框
        layer.confirm('您确定要删除这篇文章吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            //确定 ajax删除
            $.post('{{url('admin/article/')}}/'+art_id, {'_method':'delete', '_token':'{{csrf_token()}}'}, function(data){
                if (data.status == 0) {
                    location.href = location.href;//刷新当前页面
                    layer.msg(data.msg, {icon: 6});
                } else {
                    layer.msg(data.msg, {icon: 5});
                }
            });
        }, function(){
            layer.msg('也可以这样', {
                time: 20000, //20s后自动关闭
                btn: ['明白了', '知道了']
            });
        });
    }

</script>


@endsection
