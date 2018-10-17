@extends('layouts.admin')

@section('content')

    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 文档管理
    </div>
    <!--面包屑导航 结束-->

	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>文档管理</h3>
            @if(count($errors)>0)
                <div class="mark">
                    @if(is_object($errors))
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    @else
                        <p>{{$errors}}</p>
                    @endif
                </div>
            @endif
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>添加文章</a>
                <a href="{{url('admin/article')}}"><i class="fa fa-recycle"></i>全部文章</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    
    <div class="result_wrap">
        <form action="{{url('admin/article')}}" method="post">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th><i class="require">*</i>文章标题：</th>
                        <td>
                            <input type="text" class="lg" id="art_title" name="art_title">
                            <p style="color: red;">备注：文章标题字数：</p>
                        </td>
                    </tr>
                    <tr>
                        <th>编辑：</th>
                        <td>
                            <input type="text" class="sm" id="art_editor" name="art_editor" value="Jerry">
                        </td>
                    </tr>
                    <tr>
                        <th width="120"><i class="require">*</i>分类：</th>
                        <td>
                            <select name="cate_id" id="cate_id">
                                @foreach($data as $k=>$d)
                                    <option value="{{$d->cate_id}}">{{$d->_cate_name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>关键字：</th>
                        <td id="tagList">
                            <input type="text" class="lg" id="art_tag" name="art_tag" value="">
                            {{--<input type="checkbox" class="lg" name="art_tag[]" value="">php教程--}}
                            {{--<input type="checkbox" class="lg" name="art_tag[]" value="">php开发--}}
                            <p style="color: red;">备注：每篇文章关键词平均2-3个即可</p>
                        </td>
                    </tr>
                    <tr>
                        <th>内容描述：</th>
                        <td>
                            <textarea id="art_description" name="art_description"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>是否原创：</th>
                        <td>
                            <select name="art_is_original" id="art_is_original">
                                <option value="0">原创</option>
                                <option value="1">转载[给出转载地址URL]</option>
                                <option value="2">教程</option>
                                <option value="3">笔记</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>文档属性：</th>
                        <td>
                            <input type="checkbox" value="0" >头条[h]
                            <input type="checkbox" value="1" >推荐[c]
                            <input type="checkbox" value="2" >幻灯[f]
                            <input type="checkbox" value="3" >特荐[a]
                            <input type="checkbox" value="4" >滚动[s]
                            <input type="checkbox" value="5" >加粗[b]
                            <input type="checkbox" value="6" >图片[p]
                            <input type="checkbox" value="7" >跳转[j]
                        </td>
                    </tr>
                    <tr>
                        <th>文章来源地址：</th>
                        <td>
                            <input type="text" class="lg" id="art_laiYuanUrl" name="art_laiYuanUrl">
                        </td>
                    </tr>
                    <tr>
                        <th>是否存为草稿：</th>
                        <td>
                            <input type="radio" class="lg" id="art_status" name="art_status" value="0" checked>是0,代表还是未发布的草稿状态
                            <input type="radio" class="lg" id="art_status" name="art_status" value="1">否1,代表文章已经发布
                        </td>
                    </tr>
                    <tr>
                        <th>发布时间：</th>
                        <link rel="stylesheet" type="text/css" href="{{asset('resources/views/admin/style/css/jquery.datetimepicker.css')}}"/>
                        <td>
                            <input type="text" value="" id="datetimepicker" name="art_dingTime" placeholder="选择时间"/>
                        </td>
                        <script src="{{asset('resources/views/admin/style/js/jquery.date.js')}}"></script>
                        <script src="{{asset('resources/views/admin/style/js/jquery.datetimepicker.full.js')}}"></script>
                        <script>
                            $('#datetimepicker').datetimepicker({
                                dayOfWeekStart : 1,
                                lang:'ch',
//                                disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
                                startDate:	new Date()
                            });
                        </script>
                    </tr>
                    <tr>
                        <th>文章内容：</th>
                        <td>
                            <P style="color: red;">备注：文章中内容要用到h3-h4标签；<br/>文章中的重点关键词加粗，反色；<br/>文章头部加图片；<br/>文章第一段的前250个字中要包含栏目关键词；</P>
                            <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.config.js')}}"></script>
                            <!--因为ueditor.all.js中修改了结合Prism代码高亮, 但并未压缩生成all.min.js文件, 所以此处将引入all.min.js替换成引用all.js-->
			    {{--<!--<script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.min.js')}}"> </script>-->--}}
			                <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.js')}}"></script><!-- 建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败,这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
                            <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                            <script id="editor" name="art_content" type="text/plain" style="width:860px;height:500px;"></script>
                            <script type="text/javascript">
                                //实例化编辑器
                                //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                                var ue = UE.getEditor('editor');

                            </script>
                            {{--Ueditor编辑器样式矫正--}}
                            <style>
                                .edui-default{line-height: 28px;}
                                div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
                                {overflow: hidden; height:20px;}
                                div.edui-box{overflow: hidden; height:22px;}
                            </style>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="发布文章">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <script>
        $(function(){
            $('#cate_id').change(function(){
                var cate_id = $(this).val();
                console.log($(this).val());

                $.ajax("http://www.jierui303.com/article/getTagListArticle", {'cate_id':cate_id}, function(data){
                    console.log(data);
                    if (data.status == 0) {
                        var tagLists = '';
                        for(var i=0;i<data.tags.length;i++){
                            tagLists += '<input type="checkbox" class="lg" name="art_tag[]" value="'+data.tags[i]['id']+'">'+data.tags[i]['tag_name'];
                        }
                        $('#tagList').append(tagLists);//把tag标签结果插入到文档中
//                        console.log(data.tags);
//                        console.log(tagLists);
                        //信息框-例1
                        layer.alert(data.msg, {icon: 6});
                    } else {
                        //信息框-例4
                        layer.msg(data.msg, {icon: 5});
                    }
                });

            });

        });

    </script>

@endsection
