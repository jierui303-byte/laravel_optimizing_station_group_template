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
                <h3>tag标签列表</h3>
            </div>
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{url('admin/tag/create')}}"><i class="fa fa-plus"></i>新增tag标签</a>
                    <a href="{{url('admin/tag')}}"><i class="fa fa-recycle"></i>全部tag标签列表</a>
                    {{--<a href="#"><i class="fa fa-refresh"></i>更新排序</a>--}}
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <div>
                    <a href="">phpPHP教程</a>
                </div>
                <table class="list_tab">
                    <tr>
                        <th class="tc">ID</th>
                        <th>Tag标签名称</th>
                        <th>所属分类id</th>
                        <th class="tc" width="10%">发布时间</th>
                        <th>操作</th>
                    </tr>
                    @foreach($data as $v)
                    <tr>
                        <td class="tc">{{$v->id}}</td>
                        <td>{{$v->tag_name}}</td>
                        <td>{{$v->tag_category_id}}</td>
                        <td>{{date('Y-m-d', $v->tag_time)}}</td>
                        <td>
                            <a href="{{url('admin/tag/'.$v->id.'/edit')}}">修改</a>
                            <a href="javascript:;" onclick="delArt({{$v->id}})">删除</a>
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
    function delArt(tag_id){
        //询问框
        layer.confirm('您确定要删除这个tag标签吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            //确定 ajax删除
            $.post('{{url('admin/tag/')}}/'+tag_id, {'_method':'delete', '_token':'{{csrf_token()}}'}, function(data){
                if (data.status == 0) {
                    location.href = location.href;//刷新当前页面
                    layer.msg(data.msg, {icon: 6});
                } else {
                    layer.msg(data.msg, {icon: 5});
                }
            });
        }, function(){
//            layer.msg('也可以这样', {
//                time: 20000, //20s后自动关闭
//                btn: ['明白了', '知道了']
//            });
        });
    }
</script>


@endsection
