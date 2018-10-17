@extends('layouts.beijing')

@section('info')<title>北京制冷设备_仓库制冷设备_北京冷库安装_北京冷库工程有限公司</title>
<meta name="keywords" content="北京制冷设备,仓库制冷设备,北京冷库安装,北京冷库工程有限公司">
<meta name="description" content="北京制冷设备,仓库制冷设备,北京冷库安装,北京冷库工程有限公司">
@endsection

@section('content')
<div class="container">
    <div class="left">
        <div class="lefta">
            <h3>产品介绍</h3>
        </div>
        <div class="leftb">
            <div class="leftba">
                <ul>
                    @foreach($twoCates as $k=>$v)
                    <li><a href="{{url('product-'.$v->cate_id.'-type2.html')}}">{{$v->cate_name}}</a></li>
                    @endforeach
                    <li><a href="">冷库门</a></li>
                    <li><a href="">冷库板</a></li>
                    <li><a href="">冷库机组</a></li>
                    <li><a href="">铝排蒸发器</a></li>
                    <li><a href="">冷风机</a></li>
                </ul>
            </div>
        </div>
        <div class="lefta">
            <h3>新闻动态</h3>
        </div>
        <div class="leftb">
            <div class="leftbb">
                <ul>
                    <li><a href="" title="冷库工程隔墙穿孔及处理：">冷库工程隔墙穿孔及处理：</a></li>
                    <li><a href="" title="制冷设备的安装注意细节：">制冷设备的安装注意细节：</a></li>
                    <li><a href="" title="酒窖到底能为酒作些什么呢？">酒窖到底能为酒作些什么...</a></li>
                    <li><a href="" title="酒窖，储存着大量的葡萄酒">酒窖，储存着大量的葡萄酒</a></li>
                    <li><a href="" title="冷库工程建设电气安装安全注意事项">冷库工程建设电气安装安...</a></li>
                </ul>
            </div>
        </div>
        <div class="lefta">
            <h3>联系我们</h3>
        </div>
        <div class="leftb">
            <div class="leftbb">
                <p>公司所在地：北京市-市辖区-昌平区<br>
                    经营地址：东小口镇半截塔村<br>
                    邮政编码：100076<br>
                    联系人: 王女士<br>
                    电话：010-xxxxxxx<br>
                    传真：010-xxxxxxx<br>
                    手机：13523419148<br>
                    电子邮箱：jierui303@163.com</p>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="righta">
            <h3>{{$field->cate_name}}</h3>
            <span>
                您的位置：
                <a href="{{url('/')}}">网站首页</a> -
                <a href="">{{$field->cate_name}}</a>
            </span>
        </div>
        <div class="rightb">
            <div class="righte">
                @foreach($artList as $k=>$v)
                <p>
                    <a href="{{url('/product-'.$v->cate_id.'-'.$v->art_id.'-type1.html')}}" title="{{$v->art_title}}">
                        <img src="{{getImgUrl($v->art_content)[0]}}">
                    </a>
                    <a href="{{url('/product-'.$v->cate_id.'-'.$v->art_id.'-type1.html')}}" title="{{$v->art_title}}">{{$v->art_title}}</a>
                </p>
                @endforeach
            </div>
            <div class="rightf">
                {{$artList->render()}}
            </div>
        </div>
    </div>
</div>
@endsection