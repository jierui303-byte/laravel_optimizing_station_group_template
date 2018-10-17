@extends('layouts.admin')

@section('content')

    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 分类管理
    </div>
    <!--面包屑导航 结束-->

	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>添加文章分类</h3>
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
                <a href="{{url('admin/category/create')}}"><i class="fa fa-plus"></i>添加分类</a>
                <a href="{{url('admin/category')}}"><i class="fa fa-recycle"></i>全部分类</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    
    <div class="result_wrap">
        <form action="{{url('admin/category')}}" method="post">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>父级分类：</th>
                        <td>
                            <select name="cate_pid">
                                <option value="0">==顶级栏目==</option>
                                @foreach($data as $d)
                                    @if($d->cate_pid == 0)
                                        {{--判断该栏目是顶级栏目还是二级栏目--}}
                                        @if($d->cate_id == $cate_id)
                                             {{--判断是否ID是否一致--}}
                                            <option value="{{$d->cate_id}}" selected>{{$d->cate_name}}</option>
                                        @else
                                            <option value="{{$d->cate_id}}">{{$d->cate_name}}</option>
                                        @endif
                                    @else
                                        @if($d->cate_id == $cate_id)
                                            {{--先判断是否ID是否一致--}}
                                            <option value="{{$d->cate_id}}" selected>======{{$d->cate_name}}</option>
                                        @else
                                            <option value="{{$d->cate_id}}">======{{$d->cate_name}}</option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>栏目名称：</th>
                        <td>
                            <input type="text" name="cate_name" onchange="getPinYin(this,this.value)">
                            <span><i class="fa fa-exclamation-circle yellow"></i>分类名称必须填写</span>
                        </td>
                    </tr>
                    <tr>
                        <th>栏目缩写：</th>
                        <td>
                            <input type="text" name="cate_suoxie">
                        </td>
                    </tr>
                    <tr>
                        <th>栏目属性：</th>
                        <td>
                            <select name="cate_type" id="cate_type">
                                <option value="1">频道封面</option>
                                <option value="2">列表栏目</option>
                                <option value="3">外部链接</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>栏目路径：</th>
                        <td>
                            <input type="text" class="lg" name="cate_path">
                        </td>
                    </tr>
                    <tr>
                        <th>栏目SEO标题：</th>
                        <td>
                            <input type="text" class="lg" name="cate_title">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>栏目SEO关键字：</th>
                        <td>
                            <textarea name="cate_keywords"></textarea>
                            <span><i class="fa fa-exclamation-circle yellow"></i>分类SEO关键词之间必须用英文逗号隔开，中文逗号不会进行关键词拆分</span>
                        </td>
                    </tr>
                    <tr>
                        <th>栏目SEO描述：</th>
                        <td>
                            <textarea name="cate_description"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>栏目内容：</th>
                        <td>
                            <P style="color: red;">备注：文章中内容要用到h3-h4标签；<br/>文章中的重点关键词加粗，反色；<br/>文章头部加图片；<br/>文章第一段的前250个字中要包含栏目关键词；</P>
                            <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.config.js')}}"></script>
                            <!--因为ueditor.all.js中修改了结合Prism代码高亮, 但并未压缩生成all.min.js文件, 所以此处将引入all.min.js替换成引用all.js-->
                            {{--<!--<script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.min.js')}}"> </script>-->--}}
                            <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.js')}}"></script><!-- 建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败,这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
                            <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                            <script id="editor" name="cate_content" type="text/plain" style="width:860px;height:500px;"></script>
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
                        <th><i class="require">*</i>排序：</th>
                        <td>
                            <input type="text" class="sm" name="cate_order">
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="提交">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <script>
        //汉字转拼音函数
        function getPinYin(obj, value) {
            //ajax去请求laravel 转拼音插件接口
            $.post("/api/getPinYin",{address:obj.value},function(result){
                $('input[name=cate_suoxie]').val(result);
                // console.log(result);
            });
        }

        //得判断是顶级分类还是二级分类
        //其次还的判断栏目页面属性，根据不同属性值来选择不同模版
        $('#cate_type').change(function(){
            var num = $(this).val();//封面ID
            //获取栏目缩写
            var suoxie = $('input[name=cate_suoxie]').val();
            var str = '';
            console.log(num);
            if(num == 1){
                //频道封面路由 '栏目缩写-栏目ID-封面ID'
                $('input[name=cate_path]').val(suoxie+'-栏目ID-type'+num+'.html');
            }else if(num == 2){
                //列表栏目路由

            }else if(num == 3){
                //其他自定义栏目路由

            }
        })
    </script>

@endsection