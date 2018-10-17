@extends('layouts.admin')

@section('content')

    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 全部分类
    </div>
    <!--面包屑导航 结束-->

	<!--结果页快捷搜索框 开始-->
	{{--<div class="search_wrap">--}}
        {{--<form action="" method="post">--}}
            {{--<table class="search_tab">--}}
                {{--<tr>--}}
                    {{--<th width="120">选择分类:</th>--}}
                    {{--<td>--}}
                        {{--<select onchange="javascript:location.href=this.value;">--}}
                            {{--<option value="">全部</option>--}}
                            {{--<option value="http://www.baidu.com">百度</option>--}}
                            {{--<option value="http://www.sina.com">新浪</option>--}}
                        {{--</select>--}}
                    {{--</td>--}}
                    {{--<th width="70">关键字:</th>--}}
                    {{--<td><input type="text" name="keywords" placeholder="关键字"></td>--}}
                    {{--<td><input type="submit" name="sub" value="查询"></td>--}}
                {{--</tr>--}}
            {{--</table>--}}
        {{--</form>--}}
    {{--</div>--}}
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <div class="result_title">
                <h3>分类列表</h3>
            </div>
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{url('admin/category/create')}}"><i class="fa fa-plus"></i>添加分类</a>
                    <a href="{{url('admin/category')}}"><i class="fa fa-recycle"></i>全部分类</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th class="tc" width="5%">ID</th>
                        <th>分类名称</th>
                        <th>分类页面属性</th>
                        <th>操作</th>
                    </tr>
                    @foreach($data as $v)
                    <tr>
                        <td class="tc">{{$v->cate_id}}</td>
                        <td>
                            {{$v->_cate_name}}
                            <span>&nbsp;&nbsp;【文档：{{$v->_cate_num}}】</span>
                        </td>
                        <td>
                            列表页|内容页|封面
                        </td>
                        <td style="width:30%;">
                            <a href="{{url('admin/article/create/?art_id='.$v->cate_id)}}">+内容</a>
                            <a href="{{url('admin/category/create/?cate_id='.$v->cate_id)}}">增加子类</a>
                            <a href="{{url('admin/category/'.$v->cate_id.'/edit')}}">修改</a>
                            <a href="{{url('admin/category/'.$v->cate_id.'/edit')}}">移动</a>
                            <a href="javascript:;" onclick="delCate({{$v->cate_id}})">删除</a>
                            <input type="text" name="ord[]" onchange="changeOrder(this,{{$v->cate_id}})" value="{{$v->cate_order}}">
                        </td>
                    </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
<script>

    function changeOrder(obj, cate_id) {
        var _token = '{{csrf_token()}}';
        var cate_order = $(obj).val();
        $.post("{{url('admin/cate/changeorder')}}", {'_token':_token, 'cate_id':cate_id, 'cate_order':cate_order}, function(data){
            if (data.status == 0) {
                //信息框-例1
                layer.alert(data.msg, {icon: 6});
            } else {
                //信息框-例4
                layer.msg(data.msg, {icon: 5});
            }
        });
    }


    //删除分类
    function delCate(cate_id){
        //询问框
        layer.confirm('您确定要删除这个分类吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            //确定 ajax删除
            $.post('{{url('admin/category/')}}/'+cate_id, {'_method':'delete', '_token':'{{csrf_token()}}'}, function(data){
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