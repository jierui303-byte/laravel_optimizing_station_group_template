@extends('layouts.beijing')

@section('info')
    <title>{{$cate_name}}制冷设备_{{$cate_name}}仓库制冷设备_{{$cate_name}}冷库安装_{{$cate_name}}冷库工程有限公司</title>
    <meta name="keywords" content="北京制冷设备,仓库制冷设备,北京冷库安装,北京冷库工程有限公司">
    <meta name="description" content="北京制冷设备,仓库制冷设备,北京冷库安装,北京冷库工程有限公司">
@endsection

@section('content')
    <div class="fenl">
        <div class="fenlin">
            <a href="{{url('/')}}"><h2>冷库安装</h2></a>
            <a href="{{url('/')}}"><h2>冷库出租</h2></a>
            <a href="{{url('/')}}"><h2>设备销售</h2></a>
            <a href="{{url('/')}}"><h2>冷库设计</h2></a>
            <a href="{{url('/')}}"><h2>冷库报价</h2></a>
            <a href="{{url('/')}}"><h2>冷库建造</h2></a>
            <a href="{{url('/')}}"><h2>冷库造价</h2></a>
        </div>
    </div>
    <div class="sy_ss_box">
        <div class="sy_ss">

            <form id="destoon_search" action="#" onsubmit="return Dsearch(1);">
                <input type="hidden" name="spread" value="0" id="bdcsMain">
                <div class="sy_ss_left">
                    <p><h3><span>您是否在搜：</span>
                        <a href="#">冷库建造</a>   |
                        <a href="#">医药冷库</a>   |
                        <a href="#">冷库设计</a>   |
                        <a href="#">速冻库建造</a>   |
                        <a href="#">冷库设备销售</a>   |
                        <a href="#">冷库工程</a>
                    </h3></p>
                </div>
                <div class="sy_ss_right">
                    <input name="kw" id="destoon_kw" type="text" class="sy_srk" value="Search" onfocus="this.value='';this.style.color='#000'" autocomplete="off">
                    <input name="submit" type="image" src="{{url('resources/beijing/images/ss2.png')}}" class="sy_sre">
                </div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
    <div id="001" class="sy_01">
        <ul>
            <li><i><a href="{{url('/')}}"><img alt="医药冷库" src="http://www.kvjv.com/skin/style/images/fw_36.png" data-bd-imgshare-binded="1"></a></i> <span><a href="{{url('/')}}"><em></em><h2>医药冷库建造</h2><u>Medicine Cold storage</u></a></span></li>
            <li><i><a href="{{url('/')}}"><img alt="双温冷库建造" src="http://www.kvjv.com/skin/style/images/fw_32.png" data-bd-imgshare-binded="1"></a></i> <span><a href="{{url('/')}}"><em></em><h2>双温冷库建造</h2><u>Keep Cool Cold storage</u></a></span></li>
            <li><i><a href="{{url('/')}}"><img alt="冷藏库建造" src="http://www.kvjv.com/skin/style/images/fw_34.png" data-bd-imgshare-binded="1"></a></i> <span><a href="{{url('/')}}"><em></em><h2>冷藏库建造</h2><u>Preservation Cold storage</u></a></span></li>
            <li><i><a href="{{url('/')}}"><img alt="物流冷库建造" src="http://www.kvjv.com/skin/style/images/fw_26.png" data-bd-imgshare-binded="1"></a></i> <span><a href="{{url('/')}}"><em></em><h2>物流冷库建造</h2><u>Logistics Cold storage</u></a></span></li>
            <li><i><a href="{{url('/')}}"><img alt="保鲜冷库" src="http://www.kvjv.com/skin/style/images/fw_28.png" data-bd-imgshare-binded="1"></a></i> <span><a href="{{url('/')}}"><em></em><h2>保鲜冷库</h2><u>Ca Cold storage</u></a></span></li>
            <li><i><a href="{{url('/')}}"><img alt="速冻冷库" src="http://www.kvjv.com/skin/style/images/fw_30.png" data-bd-imgshare-binded="1"></a></i> <span><a href="{{url('/')}}"><em></em><h2>速冻库建造</h2><u>Quick-frozen Cold storage</u></a></span></li>
        </ul>
    </div>

    <div class="container">
        <div class="ppe">
            <h3>产品展示</h3>
        </div>
        <div class="ppea" style="margin-top:25px;">
            <p>
                <a href="32">
                    <img src="{{url('resources/beijing/images/20170120095538545.jpg')}}">
                </a>
                <a href="32" title="气调冷库">气调冷库</a>
            </p>
            <p>
                <a href="16">
                    <img src="{{url('resources/beijing/images/20170120095515540.jpg')}}">
                </a>
                <a href="16" title="酒窖工程">酒窖工程</a>
            </p>
            <p>
                <a href="13">
                    <img src="{{url('resources/beijing/images/20170120095451174.jpg')}}"></a>
                <a href="13" title="建设现场风采">建设现场风采</a>
            </p>
            <p>
                <a href="5">
                    <img src="{{url('resources/beijing/images/20170120095407232.jpg')}}">
                </a>
                <a href="5" title="电商物流库">电商物流库</a>
            </p>
        </div>
    </div>


    {{--<div class="tec">--}}
        {{--<div class="container">--}}
            {{--<div class="teca">--}}
                {{--<h2>冷库建设服务项目</h2>--}}
            {{--</div>--}}
            {{--<div class="lei">--}}
                {{--<div class="case-content">--}}
                    {{--<div class="case-item">--}}
                        {{--<div class="ih-item circle effect1">--}}
                            {{--<a href="18">--}}
                                {{--<div class="spinner"></div>--}}
                                {{--<div class="img">--}}
                                    {{--<img src="{{url('resources/beijing/images/20160504115010183.jpg')}}" alt="气调冷库" height=200 width=200>--}}
                                {{--</div>--}}
                                {{--<div class="info">--}}
                                    {{--<div class="info-back">--}}
                                        {{--<h3>气调冷库</h3>--}}
                                        {{--<p>北京空调冷气设备</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="case-item">--}}
                        {{--<div class="ih-item circle effect1">--}}
                            {{--<a href="18">--}}
                                {{--<div class="spinner"></div>--}}
                                {{--<div class="img"><img src="{{url('resources/beijing/images/20160504115031376.jpg')}}" alt="医疗冷库" height=200 width=200></div>--}}
                                {{--<div class="info">--}}
                                    {{--<div class="info-back">--}}
                                        {{--<h3>医疗冷库</h3>--}}
                                        {{--<p>北京医疗冷库设备</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="case-item">--}}
                        {{--<div class="ih-item circle effect1">--}}
                            {{--<a href="18">--}}
                                {{--<div class="spinner"></div>--}}
                                {{--<div class="img"><img src="{{url('resources/beijing/images/20160504115047586.jpg')}}" alt="冷库保养" height=200 width=200></div>--}}
                                {{--<div class="info">--}}
                                    {{--<div class="info-back">--}}
                                        {{--<h3>冷库保养</h3>--}}
                                        {{--<p>北京制冷设备保养</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="case-item">--}}
                        {{--<div class="ih-item circle effect1">--}}
                            {{--<a href="18">--}}
                                {{--<div class="spinner"></div>--}}
                                {{--<div class="img"><img src="{{url('resources/beijing/images/20160504115102115.jpg')}}" alt="电商物流冷库" height=200 width=200></div>--}}
                                {{--<div class="info">--}}
                                    {{--<div class="info-back">--}}
                                        {{--<h3>电商物流冷库</h3>--}}
                                        {{--<p>北京电商制冷设备</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="case-item">--}}
                        {{--<div class="ih-item circle effect1">--}}
                            {{--<a href="&amp;catid=45">--}}
                                {{--<div class="spinner"></div>--}}
                                {{--<div class="img">--}}
                                    {{--<img src="{{url('resources/beijing/images/yuan1.jpg')}}" alt="学习LOS" height="200" width="200">--}}
                                {{--</div>--}}
                                {{--<div class="info">--}}
                                    {{--<div class="info-back">--}}
                                        {{--<h3>保鲜冷库</h3>--}}
                                        {{--<p>北京制冷设备</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="case-item">--}}
                        {{--<div class="ih-item circle effect1">--}}
                            {{--<a href="&amp;catid=43">--}}
                                {{--<div class="spinner"></div>--}}
                                {{--<div class="img">--}}
                                    {{--<img src="{{url('resources/beijing/images/yuan2.jpg')}}" alt="学习" height="200" width="200">--}}
                                {{--</div>--}}
                                {{--<div class="info">--}}
                                    {{--<div class="info-back">--}}
                                        {{--<h3>小型冷库</h3>--}}
                                        {{--<p>北京仓库制冷设备</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="case-item">--}}
                        {{--<div class="ih-item circle effect1">--}}
                            {{--<a href="&amp;catid=47">--}}
                                {{--<div class="spinner"></div>--}}
                                {{--<div class="img">--}}
                                    {{--<img src="{{url('resources/beijing/images/yuan3.jpg')}}" alt="学习" height="200" width="200">--}}
                                {{--</div>--}}
                                {{--<div class="info">--}}
                                    {{--<div class="info-back">--}}
                                        {{--<h3>食品冷库</h3>--}}
                                        {{--<p>北京工厂制冷设备</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="case-item">--}}
                        {{--<div class="ih-item circle effect1">--}}
                            {{--<a href="&amp;catid=44">--}}
                                {{--<div class="spinner"></div>--}}
                                {{--<div class="img">--}}
                                    {{--<img src="{{url('resources/beijing/images/yuan4.jpg')}}" alt="学习" height="200" width="200">--}}
                                {{--</div>--}}
                                {{--<div class="info">--}}
                                    {{--<div class="info-back">--}}
                                        {{--<h3>双温冷库</h3>--}}
                                        {{--<p>北京小型制冷设备</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="uia">
        <!--一次合作 终生朋友-->
        <div class="sy_02">
            <div class="sy_02_lm">
                <div class="container">
                    <div class="sy_02_qw">
                        <em><img alt="合作流程" src="{{url('resources/beijing/images/zl_50.png')}}"></em>
                        <dl>
                            <dd class="sy_02_dy">售前咨询</dd>
                            <dd class="sy_02_de">免费冷库设计</dd>
                            <dd class="sy_02_ds">双方确定方案</dd>
                            <dd class="sy_02_dshi">签定合同</dd>
                            <dd class="sy_02_dw">设备进场</dd>
                            <dd class="sy_02_dl">开始施工</dd>
                            <dd class="sy_02_dq">施工结束验收</dd>
                            <dd class="sy_02_db">售后服务</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="gei">
            <div class="geia">
                <div class="geiaa">
                    <h3>关于我们<i>ABOUT</i></h3>
                </div>
                <div class="geiab">
                    <p style="text-indent:2em;">
                        {{$cate_name}}北京制冷设备有限公司拥有专业冷库设计高级工程师，建库队伍强大。可承建成不同大小规模的冷库。公司工程部按冷库的面积、温度及不同的使用需要给予全理化配置设计冷库安装、酒窖以最选进的设计方案为客户降低成本投资，多品种，多规格的库板也可根据您的需要定制特殊的异型冷库，确保库的精度。外型美观为用户充分利用现有场地和建筑空间提供......
                        <a href="15&amp;id=7">《查看详情》</a>
                    </p>
                </div>
            </div>
            <div class="geia" style="padding-left:26px;">
                <div class="geiaa">
                    <h3>新闻动态<i>NEWS</i></h3>
                </div>
                <div class="geiac">
                    <div class="geiaca">
                        <span><img src="{{url('resources/beijing/images/20160504020045236.png')}}"></span>
                        <h4><a href="16&amp;id=34" title="冷库工程隔墙穿孔及处理：">{{$cate_name}}冷库工程隔墙穿孔及处理：</a></h4>
                        <p>
                            库工程隔墙穿孔及处理：
                            冷库安装由于冷库工程系统管......<a href="16&amp;id=34">【查看详情】</a>
                        </p>
                    </div>
                    <div class="geiaca">
                        <span><img src="{{url('resources/beijing/images/20160504020345916.png')}}"></span>
                        <h4><a href="16&amp;id=33" title="制冷设备的安装注意细节：">{{$cate_name}}制冷设备的安装注意细节：</a></h4>
                        <p>
                            冷设备的安装注意细节：
                            冷库安装：1.根据设备装箱单......<a href="16&amp;id=33">【查看详情】</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="geia" style="padding-left:26px;">
                <div class="geiaa">
                    <h3>联系我们<i>CONTACT</i></h3>
                </div>
                <div class="geiad">
                    <a href="&amp;catid=21"><img src="{{url('resources/beijing/images/messageimg.jpg')}}"></a>
                </div>
            </div>
        </div>
    </div>

    <!--您是不是关心以下问题呢-->
    <div class="sy_03">
        <h4>您是不是关心以下问题呢？</h4>
        <em>Are most concerned about the following questions?</em>
        <ul>
            <li>
                <em><img alt="冷库建造价格" src="http://www.kvjv.com/file/upload/201502/02/11-56-32-56-1.jpg" data-bd-imgshare-binded="1"></em>
                <h3><a href="{{url('/')}}">冷库建造价格</a></h3>
                <p>初步有冷库建造计划的朋友在脑海里首先会考虑这样一个问题：冷库建造造...</p>
                <i><a href="{{url('/')}}" rel="nofollow">MORE...</a></i>
            </li>
            <li>
                <em><img alt="冷库售后服务？" src="http://www.kvjv.com/file/upload/201502/02/14-36-34-80-1.jpg" data-bd-imgshare-binded="1"></em>
                <h3><a href="{{url('/')}}">冷库售后服务？</a></h3>
                <p>冷库建造的售后服务想必是冷库使用者除了冷库质量和冷库设计外最关心的...</p>
                <i><a href="{{url('/')}}" rel="nofollow">MORE...</a></i>
            </li>
            <li>
                <em><img alt="冷库工程所使用设备品牌？" src="http://www.kvjv.com/file/upload/201502/02/14-59-27-75-1.jpg" data-bd-imgshare-binded="1"></em>
                <h3><a href="{{url('/')}}">冷库工程所使用设备品牌？</a></h3>
                <p>很多爽歪歪(制冷制冷粉丝的爱称)们比较好奇制冷制冷那牛哄哄的冷库工程...</p>
                <i><a href="{{url('/')}}" rel="nofollow">MORE...</a></i>
            </li>
            <li>
                <em><img alt="当地有没有冷库案例?" src="http://www.kvjv.com/file/upload/201502/02/14-54-31-45-1.jpg" data-bd-imgshare-binded="1"></em>
                <h3><a href="{{url('/')}}">当地有没有冷库案例?</a></h3>
                <p>在您深入了解了制冷制冷的企业资质、规模、技术、发展历程以及冷库设计...</p>
                <i><a href="{{url('/')}}" rel="nofollow">MORE...</a></i>
            </li>
        </ul>
    </div>
    <!--您是不是关心以下问题呢-->

    <!--广告开始-->
    <div class="yoa">
        <!--制冷制冷 自荐理由-->
        <div id="002" class="sy_04">
            <div class="caea">
                <h3>提供服务</h3>
            </div>
        </div>
        <!--线条-->
        <div class="sy_05">
            <div class="sy_05_lm">
                <div class="sy_05_we">
                    <dl>
                        <dt><img src="{{url('resources/beijing/images/tj_49.png')}}"></dt>
                        <dd><h4><a href="&amp;catid=37" rel="nofollow">提供整套解决方案</a></h4><p>通过了解客户需求，为客户提供更加实用受益的冷库设计解决方案。</p><span><a href="&amp;catid=37" rel="nofollow">详细&gt;&gt;</a></span></dd>
                    </dl>
                    <dl>
                        <dt><img src="{{url('resources/beijing/images/tj_52.png')}}" title="“专业冷库设计建造”"></dt>
                        <dd><h4><a href="&amp;catid=38" title="“专业冷库设计建造”">专业冷库设计建造</a></h4><p>只有专注才有完美，丰富的专业知识、多年的冷库设计建造经验。</p><span><a href="&amp;catid=38" rel="nofollow">详细&gt;&gt;</a></span></dd>
                    </dl>
                    <dl>
                        <dt><img src="{{url('resources/beijing/images/tj_56.png')}}"></dt>
                        <dd><h4><a href="&amp;catid=42" rel="nofollow">权威认证行业资质</a></h4><p>不是所有冷库建造公司都能拥有，制冷这样的冷库建造资质。</p><span><a href="&amp;catid=42" rel="nofollow">详细&gt;&gt;</a></span></dd>
                    </dl>
                    <dl>
                        <dt><img src="{{url('resources/beijing/images/tj_57.png')}}"></dt>
                        <dd><h4><a href="&amp;catid=39" rel="nofollow">经验丰富的运作团队</a></h4><p>我们的多位冷库设计工程师从业几十载，设计师冷库设计案例超万套。</p><span><a href="&amp;catid=39" rel="nofollow">详细&gt;&gt;</a></span></dd>
                    </dl>
                    <dl>
                        <dt><img src="{{url('resources/beijing/images/tj_60.png')}}"></dt>
                        <dd><h4><a href="&amp;catid=19" rel="nofollow">众多知名企业合作商</a></h4><p>冷库建造案例：雅玛多物流、上海西郊国际农贸中心、神威药业、望湘园等多家名企合作商。</p><span><a href="&amp;catid=19" rel="nofollow">详细&gt;&gt;</a></span></dd>
                    </dl>
                    <dl>
                        <dt><img src="{{url('resources/beijing/images/tj_61.png')}}"></dt>
                        <dd><h4><a href="&amp;catid=41" rel="nofollow">最及时的售前售后服务</a></h4><p>售前：免费提供冷库设计建造报价。售后：定期跟踪回访。限时免费维护。</p><span><a href="&amp;catid=41" rel="nofollow">详细&gt;&gt;</a></span></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <!--广告结束-->
    <div class="cae">
        <div class="container">
            <div class="caea">
                <h3>案例展示</h3>
            </div>
            <div class="sy_07">
                <div class="sy_07_top">
                    <ul>
                        <li id="newstag1" class="" onmouseover="setTab('newstag',1,8)"><a href="{{url('/')}}10.html">医药冷库</a></li>
                        <li id="newstag2" onmouseover="setTab('newstag',2,8)" class="hover"><a href="{{url('/')}}11.html">物流冷库</a></li>
                        <li id="newstag3" onmouseover="setTab('newstag',3,8)" class=""><a href="{{url('/')}}12.html">食品冷库</a></li>
                        <li id="newstag4" onmouseover="setTab('newstag',4,8)" class=""><a href="{{url('/')}}13.html">餐饮冷库</a></li>
                        <li id="newstag5" onmouseover="setTab('newstag',5,8)" class=""><a href="{{url('/')}}14.html">科研冷库</a></li>
                        <li id="newstag6" onmouseover="setTab('newstag',6,8)" class=""><a href="{{url('/')}}15.html">气调冷库</a></li>
                        <li id="newstag7" onmouseover="setTab('newstag',7,8)" class=""><a href="{{url('/')}}16.html">速冻冷库</a></li>
                        <li id="newstag8" onmouseover="setTab('newstag',8,8)" class=""><a href="{{url('/')}}17.html">工业冷库</a></li>
                    </ul>
                </div>
                <div class="sy_07_box">
                    {{--<div class="sy_07_tub" style="display: none;" id="con_newstag_1">--}}
                        {{--<ul>--}}
                            {{--<li><a href="{{url('/')}}160.html"><img width="160" height="120" alt="鲁抗医药4期18000平米冷库项目" src="http://www.kvjv.com/casespic/2013-11-29/13856966173645430000.jpg" title="鲁抗医药4期18000平米冷库项目" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}55.html"><img width="160" height="120" alt="上海新兴医药血浆冷库安装工程" src="http://www.kvjv.com/casespic/2013-11-29/13856965716316230000.jpg" title="上海新兴医药血浆冷库安装工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}69.html"><img width="160" height="120" alt="阿斯利康制药有限公司医药冷库" src="http://www.kvjv.com/casespic/2013-11-29/13856968058808820000.jpg" title="阿斯利康制药有限公司医药冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}68.html"><img width="160" height="120" alt="河北省神威药业防爆冷库工程" src="http://www.kvjv.com/casespic/2013-11-29/13856967449546320000.jpg" title="河北省神威药业防爆冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}67.html"><img width="160" height="120" alt="九州通达医药冷库安装完毕" src="http://www.kvjv.com/casespic/2013-11-29/13856966871783420000.jpg" title="九州通达医药冷库安装完毕" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}65.html"><img width="160" height="120" alt="鲁抗医药大型综合冷库工程" src="http://www.kvjv.com/casespic/2013-11-29/13856966173645430000.jpg" title="鲁抗医药大型综合冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}99.html"><img width="160" height="120" alt="康宁生命医药器械冷库工程" src="http://www.kvjv.com/file/upload/201505/19/15-06-30-58-1.jpg" title="康宁生命医药器械冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}111.html"><img width="160" height="120" alt="宁波英特物流有限公司医药冷库建造" src="http://www.kvjv.com/file/upload/201508/18/14-03-23-73-1.png" title="宁波英特物流有限公司医药冷库建造" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}155.html"><img width="160" height="120" alt="北京军区陆军总医院血浆冷库项目" src="http://www.kvjv.com/file/upload/201611/18/11-25-37-12-1.jpg" title="北京军区陆军总医院血浆冷库项目" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}154.html"><img width="160" height="120" alt="北大国际医院冷库新建项目" src="http://www.kvjv.com/file/upload/201611/18/10-29-27-71-1.png" title="北大国际医院冷库新建项目" data-bd-imgshare-binded="1"></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="sy_07_tub" style="display: block;" id="con_newstag_2">--}}
                        {{--<ul>--}}
                            {{--<li><a href="{{url('/')}}61.html"><img width="160" height="120" alt="宁波宝真大型食品物流工程" src="http://www.kvjv.com/file/upload/201504/27/15-23-33-37-1.jpg" title="宁波宝真大型食品物流工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}84.html"><img width="160" height="120" alt="西郊国际农产品交易中心2500吨大型果蔬冷库工程" src="http://www.kvjv.com/casespic/2013-11-29/13856971001785620000.jpg" title="西郊国际农产品交易中心2500吨大型果蔬冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}71.html"><img width="160" height="120" alt="雅玛多大型物流冷库工程" src="http://www.kvjv.com/casespic/2013-11-29/13856969222849680000.jpg" title="雅玛多大型物流冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}70.html"><img width="160" height="120" alt="济洪蔬菜配送中心冷库工程" src="http://www.kvjv.com/casespic/2013-11-29/13856968883802790000.jpg" title="济洪蔬菜配送中心冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}57.html"><img width="160" height="120" alt="全盛4万多立方雀巢仓储基地" src="http://www.kvjv.com/casespic/2013-11-29/13856948476071120000.jpg" title="全盛4万多立方雀巢仓储基地" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}86.html"><img width="160" height="120" alt="荣庆物流建造20000立方低温冷库工程" src="http://www.kvjv.com/casespic/2013-11-29/13856971536944800000.jpg" title="荣庆物流建造20000立方低温冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}108.html"><img width="160" height="120" alt="天津大田物流集团10000立方冷库工程" src="http://www.kvjv.com/file/upload/201508/18/11-17-23-32-1.png" title="天津大田物流集团10000立方冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}105.html"><img width="160" height="120" alt="绥芬河酷洋冷链有限公司物流冷藏库" src="http://www.kvjv.com/file/upload/201507/29/10-59-51-81-1.png" title="绥芬河酷洋冷链有限公司物流冷藏库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}150.html"><img width="160" height="120" alt="浙江富阳振翔冷藏冷冻库项目" src="http://www.kvjv.com/file/upload/201611/09/14-53-38-45-1.jpg" title="浙江富阳振翔冷藏冷冻库项目" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}126.html"><img width="160" height="120" alt="达缘供应链跨境生鲜冷库建造" src="http://www.kvjv.com/file/upload/201603/29/16-39-30-16-1.gif" title="达缘供应链跨境生鲜冷库建造" data-bd-imgshare-binded="1"></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="sy_07_tub" style="display: none;" id="con_newstag_3">--}}
                        {{--<ul>--}}
                            {{--<li><a href="{{url('/')}}88.html"><img width="160" height="120" alt="“我厨”生鲜电商冷库一期工程" src="http://www.kvjv.com/file/upload/201504/27/15-13-26-46-1.jpg" title="“我厨”生鲜电商冷库一期工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}103.html"><img width="160" height="120" alt="上海周黑鸭食品有限公司高温库" src="http://www.kvjv.com/file/upload/201505/22/11-07-40-41-1.jpg" title="上海周黑鸭食品有限公司高温库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}102.html"><img width="160" height="120" alt="许留山双温冷库工程" src="http://www.kvjv.com/file/upload/201505/22/10-13-35-91-1.jpg" title="许留山双温冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}49.html"><img width="160" height="120" alt="好想你枣业保鲜冷库工程" src="http://www.kvjv.com/casespic/2013-11-29/13856972956830790000.jpg" title="好想你枣业保鲜冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}48.html"><img width="160" height="120" alt="上海梅林食品冷库氨改氟" src="http://www.kvjv.com/casespic/2013-12-12/13868184326042750000.gif" title="上海梅林食品冷库氨改氟" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}157.html"><img width="160" height="120" alt="诺心蛋糕加工速冻冷库" src="http://www.kvjv.com/file/upload/201703/09/16-54-12-34-2.jpg" title="诺心蛋糕加工速冻冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}156.html"><img width="160" height="120" alt="可口可乐冷库项目" src="http://www.kvjv.com/file/upload/201611/18/13-10-08-64-1.jpg" title="可口可乐冷库项目" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}146.html"><img width="160" height="120" alt="兰州正林农垦食品有限公司" src="http://www.kvjv.com/file/upload/201607/13/14-52-05-45-1.png" title="兰州正林农垦食品有限公司" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}143.html"><img width="160" height="120" alt="四川洪雅县雅妹子生态食品有限公司低温食品车间改造" src="http://www.kvjv.com/file/upload/201606/13/11-36-27-81-1.jpg" title="四川洪雅县雅妹子生态食品有限公司低温食品车间改造" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}139.html"><img width="160" height="120" alt="宜宾市娥天歌食品有限公司食品冷库工程" src="http://www.kvjv.com/file/upload/201605/20/16-03-37-75-1.jpg" title="宜宾市娥天歌食品有限公司食品冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="sy_07_tub" style="display: none;" id="con_newstag_4">--}}
                        {{--<ul>--}}
                            {{--<li><a href="{{url('/')}}74.html"><img width="160" height="120" alt="望湘园多温带大型冷库工程" src="http://www.kvjv.com/casespic/2013-11-29/13856976268718510000.jpg" title="望湘园多温带大型冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}159.html"><img width="160" height="120" alt="海底捞火锅-餐饮冷库" src="http://www.kvjv.com/file/upload/201706/23/15-09-34-45-1.jpg" title="海底捞火锅-餐饮冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}107.html"><img width="160" height="120" alt="赤坂亭新物流中心餐饮冷库项目" src="http://www.kvjv.com/file/upload/201507/29/14-46-48-76-1.jpg" title="赤坂亭新物流中心餐饮冷库项目" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}106.html"><img width="160" height="120" alt="江苏大娘水饺食品有限公司冷库制冷设备系统技术改造项目" src="http://www.kvjv.com/file/upload/201507/29/13-46-00-48-1.jpg" title="江苏大娘水饺食品有限公司冷库制冷设备系统技术改造项目" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}73.html"><img width="160" height="120" alt="澳门豆捞15000立方食品冷库工程" src="http://www.kvjv.com/casespic/2013-11-29/13856976031288830000.jpg" title="澳门豆捞15000立方食品冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}151.html"><img width="160" height="120" alt="成都艾丝碧西餐饮管理有限公司" src="http://www.kvjv.com/file/upload/201611/09/16-09-54-59-1.jpg" title="成都艾丝碧西餐饮管理有限公司" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}147.html"><img width="160" height="120" alt="民大附中食堂冷库建造" src="http://www.kvjv.com/file/upload/201607/13/15-22-55-32-1.jpg" title="民大附中食堂冷库建造" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}109.html"><img width="160" height="120" alt="江西红又红实业有限公司冷库建造项目" src="http://www.kvjv.com/file/upload/201508/18/11-44-16-16-1.png" title="江西红又红实业有限公司冷库建造项目" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}104.html"><img width="160" height="120" alt="上海世博会冷藏冷库建设" src="http://www.kvjv.com/file/upload/201505/28/11-25-22-59-1.jpg" title="上海世博会冷藏冷库建设" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}75.html"><img width="160" height="120" alt="松东百味佳餐饮食品库工程" src="http://www.kvjv.com/casespic/2013-11-29/13856976596581980000.jpg" title="松东百味佳餐饮食品库工程" data-bd-imgshare-binded="1"></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="sy_07_tub" style="display: none;" id="con_newstag_5">--}}
                        {{--<ul>--}}
                            {{--<li><a href="{{url('/')}}123.html"><img width="160" height="120" alt="嘉兴同济环境研究院科研冷库" src="http://www.kvjv.com/file/upload/201512/30/13-21-55-64-1.jpg" title="嘉兴同济环境研究院科研冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}138.html"><img width="160" height="120" alt="中国矿业大学低温实验室冷库" src="http://www.kvjv.com/file/upload/201605/20/15-43-55-12-1.jpg" title="中国矿业大学低温实验室冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}133.html"><img width="160" height="120" alt="国家海洋局第二海洋研究所低温科研冷库" src="http://www.kvjv.com/file/upload/201604/07/14-25-07-57-1.jpg" title="国家海洋局第二海洋研究所低温科研冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}125.html"><img width="160" height="120" alt="上海华新生物高技术有限公司科研冷库" src="http://www.kvjv.com/file/upload/201601/29/11-20-23-26-1.jpg" title="上海华新生物高技术有限公司科研冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}78.html"><img width="160" height="120" alt="抗体药物国家工程研究中心冷库" src="http://www.kvjv.com/casespic/2013-12-2/13859450480889320000.jpg" title="抗体药物国家工程研究中心冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}77.html"><img width="160" height="120" alt="国家化合物低温冷库安装工程" src="http://www.kvjv.com/casespic/2013-12-2/13859450089629030000.jpg" title="国家化合物低温冷库安装工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}76.html"><img width="160" height="120" alt="基因科技生物试剂库工程" src="http://www.kvjv.com/casespic/2013-12-2/13859449796562380000.jpg" title="基因科技生物试剂库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}54.html"><img width="160" height="120" alt="上海迈瑞尔科学防爆冷库" src="http://www.kvjv.com/casespic/2013-12-2/13859454741385620000.jpg" title="上海迈瑞尔科学防爆冷库" data-bd-imgshare-binded="1"></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="sy_07_tub" style="display: none;" id="con_newstag_6">--}}
                        {{--<ul>--}}
                            {{--<li><a href="{{url('/')}}90.html"><img width="160" height="120" alt="湖北鲜果园冷冻食品有限公司水果气调库工程" src="http://www.kvjv.com/file/upload/201504/28/11-14-33-82-1.jpg" title="湖北鲜果园冷冻食品有限公司水果气调库工程" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}153.html"><img width="160" height="120" alt="贵州镇宁自治县坝美水果种植农业专业合作社-火龙果气调库" src="http://www.kvjv.com/file/upload/201611/09/16-36-22-23-1.jpg" title="贵州镇宁自治县坝美水果种植农业专业合作社-火龙果气调库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}152.html"><img width="160" height="120" alt="巴中市恩阳区何家坝葡萄种植专业合作社" src="http://www.kvjv.com/file/upload/201611/09/16-30-30-12-1.jpg" title="巴中市恩阳区何家坝葡萄种植专业合作社" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}140.html"><img width="160" height="120" alt="重庆互鹏农业发展有限公司猕猴桃气调库" src="http://www.kvjv.com/file/upload/201605/20/16-51-41-24-1.jpg" title="重庆互鹏农业发展有限公司猕猴桃气调库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}132.html"><img width="160" height="120" alt="张家港凤凰农产品合作社气调冷库" src="http://www.kvjv.com/file/upload/201604/06/16-48-23-55-1.jpg" title="张家港凤凰农产品合作社气调冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}130.html"><img width="160" height="120" alt="瑞安市钱顺瓜菜专业合作社花菜（菜花）冷库" src="http://www.kvjv.com/file/upload/201604/06/14-39-52-39-1.jpg" title="瑞安市钱顺瓜菜专业合作社花菜（菜花）冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}94.html"><img width="160" height="120" alt="托克托县黄河湿地管理委员会葡萄气调库" src="http://www.kvjv.com/file/upload/201505/14/17-53-48-25-1.png" title="托克托县黄河湿地管理委员会葡萄气调库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}91.html"><img width="160" height="120" alt="中国热带农业科学院环境与植物保护研究所实验室气调库" src="http://www.kvjv.com/file/upload/201504/28/11-40-16-63-1.jpg" title="中国热带农业科学院环境与植物保护研究所实验室气调库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}89.html"><img width="160" height="120" alt="湖北神地农业科贸有限公司鲜蛋气调库" src="http://www.kvjv.com/file/upload/201504/28/10-22-56-92-1.jpg" title="湖北神地农业科贸有限公司鲜蛋气调库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}59.html"><img width="160" height="120" alt="华中农业大学气调实验冷库工程" src="http://www.kvjv.com/casespic/2013-12-2/13859450865590080000.jpg" title="华中农业大学气调实验冷库工程" data-bd-imgshare-binded="1"></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="sy_07_tub" style="display: none;" id="con_newstag_7">--}}
                        {{--<ul>--}}
                            {{--<li><a href="{{url('/')}}93.html"><img width="160" height="120" alt="阿甘生鲜蔬菜速冻冷库" src="http://www.kvjv.com/file/upload/201505/11/10-16-31-29-1.jpg" title="阿甘生鲜蔬菜速冻冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}131.html"><img width="160" height="120" alt="浙江长裕茶制品有限公司茶叶浓缩液低温速冻库" src="http://www.kvjv.com/file/upload/201604/06/15-44-10-23-1.jpg" title="浙江长裕茶制品有限公司茶叶浓缩液低温速冻库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}129.html"><img width="160" height="120" alt="宁波市镇海绿安农场配送速冻冷库" src="http://www.kvjv.com/file/upload/201604/06/11-42-57-96-1.png" title="宁波市镇海绿安农场配送速冻冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}92.html"><img width="160" height="120" alt="上海盘古食品有限公司速冻冷库（二期）" src="http://www.kvjv.com/file/upload/201504/30/08-22-53-46-1.jpg" title="上海盘古食品有限公司速冻冷库（二期）" data-bd-imgshare-binded="1"></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="sy_07_tub" style="display: none;" id="con_newstag_8">--}}
                        {{--<ul>--}}
                            {{--<li><a href="{{url('/')}}113.html"><img width="160" height="120" alt="汉高化学技术有限公司防爆冷库设计安装" src="http://www.kvjv.com/file/upload/201508/18/14-29-37-33-1.png" title="汉高化学技术有限公司防爆冷库设计安装" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}101.html"><img width="160" height="120" alt="500强企业友达光电建造的半导体零件低温库" src="http://www.kvjv.com/casespic/2013-12-2/13859455056098570000.jpg" title="500强企业友达光电建造的半导体零件低温库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}148.html"><img width="160" height="120" alt="东曹（上海）聚氨酯有限公司加热防爆冷库" src="http://www.kvjv.com/file/upload/201607/28/10-40-18-99-1.jpg" title="东曹（上海）聚氨酯有限公司加热防爆冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}145.html"><img width="160" height="120" alt="宁夏大地循环发展有限公司防爆冷库" src="http://www.kvjv.com/file/upload/201607/13/11-47-44-44-1.png" title="宁夏大地循环发展有限公司防爆冷库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}110.html"><img width="160" height="120" alt="上海长江电焊条厂4000立方低温冷库工程项目" src="http://www.kvjv.com/file/upload/201508/18/13-57-33-82-1.png" title="上海长江电焊条厂4000立方低温冷库工程项目" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}98.html"><img width="160" height="120" alt="福建省东南电化股份有限公司防爆库" src="http://www.kvjv.com/file/upload/201505/18/17-24-06-27-1.jpg" title="福建省东南电化股份有限公司防爆库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}81.html"><img width="160" height="120" alt="湖北老鬼鱼饵集团冷藏库" src="http://www.kvjv.com/casespic/2013-12-2/13859455600801650000.jpg" title="湖北老鬼鱼饵集团冷藏库" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}80.html"><img width="160" height="120" alt="巴基斯坦恰希玛核电站冷库工程项目" src="http://www.kvjv.com/casespic/2013-11-29/13856969830363550000.jpg" title="巴基斯坦恰希玛核电站冷库工程项目" data-bd-imgshare-binded="1"></a></li>--}}
                            {{--<li><a href="{{url('/')}}79.html"><img width="160" height="120" alt="芜湖信义玻璃厂低温冷库项目" src="http://www.kvjv.com/casespic/2013-12-2/13859455307213380000.jpg" title="芜湖信义玻璃厂低温冷库项目" data-bd-imgshare-binded="1"></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="sy_07_dianji">--}}
                        {{--<a href="http://www.kvjv.com/case-6.html"><img alt="国际客户案例" src="http://www.kvjv.com/skin/style/images/pp_81.jpg" data-bd-imgshare-binded="1"></a>--}}
                    {{--</div>--}}
                    <div class="clear"></div>
                </div>
            </div>
            <script type="text/javascript">
                function setTab(name,cursel,n)
                {
                    for(i=1;i<=n+1;i++)
                    {
                        var menu=document.getElementById(name+i);
                        if(menu)
                        {
                            var con=document.getElementById("con_"+name+"_"+i);
                            menu.className= i==cursel?"hover":"";
                            con.style.display= i==cursel?"block":"none";
                        }
                    }
                }
            </script>
        </div>
    </div>

    <!--公司视频-->
    <div id="006" class="sy_11_box">
        {{--<div class="sy_11">--}}
            {{--<div class="sy_11_lm">--}}
                {{--<em><img src="http://www.kvjv.com/skin/style/images/jd_116.png" data-bd-imgshare-binded="1"></em>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!--线条-->--}}
        {{--<div class="xiant_left"></div>--}}
        <div class="sy_12">
            <div class="sy_12_left">
                <!--AD 2-->
                <video width="497" height="358" src="" controls="controls" preload="none" poster="">您的浏览器不支持 video 标签。
                </video>
                <div class="sy_12_sp">
                    <p><img src="http://www.kvjv.com/skin/style/images/bfq_119.png" data-bd-imgshare-binded="1">上海制冷实业有限公司是一家专业从事冷库设计、冷库建造、冷库工程安装及售后为一体的制冷公司。</p>
                </div>
            </div>
            <div class="sy_12_right">
                <ul>
                    <li>
                        <em><span>10</span><br>2017 10</em>
                        <i><a href="{{url('/')}}"><h4>《冷链物流》访制冷制冷总工——深度解析制冷市场</h4><p>当下，环保、可持续的理念逐渐从世界发达国家向发展中国家传递，越来越多的发展中国家</p></a></i>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <em><span>21</span><br>2016 12</em>
                        <i><a href="{{url('/')}}"><h4>升级生鲜冷链系统 制冷万吨级冷库入驻新疆</h4><p>万吨冷库落座新疆乌鲁木齐，会给新疆当地的居民和食品贸易带来什么变革？</p></a></i>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <em><span>12</span><br>2016 12</em>
                        <i><a href="{{url('/')}}"><h4>笑傲西域 争流塞上——访制冷制冷新疆分公司经理谭亚锋</h4><p>争舸西域，新锐冷库工程师如何笑傲塞上？</p></a></i>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <em><span>13</span><br>2015 11</em>
                        <i><a href="{{url('/')}}"><h4>冷链物流刊登制冷制冷《水产冷库破译时空运输密码》</h4><p>挪威三文鱼、俄罗斯帝王蟹、澳洲龙虾这些光想想就流口水的高大上水产品，有些人却从未</p></a></i>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <em><span>25</span><br>2015 08</em>
                        <i><a href="{{url('/')}}"><h4>专注食品安全-----《食品安全导刊》</h4><p>制冷制冷专注于食品冷藏库安全建设，根据不同的食品储存标准进行冷库设计，冷库建造为</p></a></i>
                        <div class="clear"></div>
                    </li>
                </ul></div>
        </div>
    </div>
    <!--公司视频-->

    <!--公司动态常见问题-->
    <div class="dongtai">
        <div class="wenda">
        <div class="news fl">
            <div class="news_t">
                <span><a href="{{url('/')}}" target="_blank" title="更多" id="newsmore">更多+</a></span>
                <ul>
                    <li class="" data-id="0001,0002,0003"><a href="news-14-1.html" title="公司动态" target="_blank">公司动态</a></li>
                    <li class="nobor cur" data-id="0001,0002,0004"><a href="news-15-1.html" title="行业资讯" target="_blank">行业资讯</a></li>
                </ul>
            </div>
            <div class="news_m" data-id="0001,0002,0003" style="display: none;">
                <dl>
                    <dt><img src="{{url('resources/beijing/images/20170120095515540.jpg')}}"></dt>
                    <dd>
                        <h5><a href="{{url('')}}" target="_blank" title="高空作业平台在阴雨天气下如何操作更安全">高空作业平台在阴雨天气下如何操作更安全</a></h5>
                        <p>高空作业车在高空作业平台中时比拟常见的一种运用工具，高空作业在运用时即便当，有快捷，而且便于挪动，但是运用高空作业平台时它需求四处的奔走。所以在开高空作业平台的司机需求有好的开车的技术。特别是在下雨天的高空作业司机在开车时比好风险。 ...</p>
                        <span>
                            <a href="{{url('/')}}" target="_blank" title="详细">
                                <img src="{{url('resources/beijing/images/news_btn.gif')}}" alt="详细" title="详细">
                            </a>
                        </span>
                    </dd>
                </dl>


                <ul>
                    <li><a href="{{url('/')}}" target="_blank" title="测试发布文章">测试发布文章</a> </li>

                    <li><a href="{{url('/')}}" target="_blank" title="高空作业平台在阴雨天气下如何操作更安全">高空作业平台在阴雨天气下如何操作更安全</a> </li>

                    <li><a href="{{url('/')}}" target="_blank" title="宠物医院上线了$cityname.">宠物医院上线了$cityname.</a> </li>

                    <li><a href="{{url('/')}}" target="_blank" title="优化网站有哪些小技巧">优化网站有哪些小技巧</a> </li>

                    <li><a href="{{url('/')}}" target="_blank" title="采用纯白帽技术优化网站排名">采用纯白帽技术优化网站排名</a> </li>

                    <li><a href="{{url('/')}}" target="_blank" title="网站建设多少钱?便宜的网站建设到底便宜在哪里？">网站建设多少钱?便宜的网站建设到底便宜在哪里？</a> </li>

                    <li><a href="{{url('/')}}" target="_blank" title="网站建设容易被忽视的四大问题">网站建设容易被忽视的四大问题</a> </li>

                    <li><a href="{{url('/')}}" target="_blank" title="浅析如何基于用户分析来建设企业电子商务网站">浅析如何基于用户分析来建设企业电子商务网站</a> </li>

                    <li><a href="{{url('/')}}" target="_blank" title="二维码在网站中的运用">二维码在网站中的运用</a> </li>

                    <li><a href="{{url('/')}}" target="_blank" title="黑帽手法大揭秘">黑帽手法大揭秘</a> </li>

                    <li><a href="{{url('/')}}" target="_blank" title="黑帽手法对网站SEO优化的危害？">黑帽手法对网站SEO优化的危害？</a> </li>

                    <li><a href="{{url('/')}}" target="_blank" title="小企业图和把网站做好并运营好">小企业图和把网站做好并运营好</a> </li>


                </ul>
            </div>
            <div class="news_m" data-id="0001,0002,0004" style="display: block;">
                <dl>
                    <dt><img src="{{url('resources/beijing/images/20170120095407232.jpg')}}"></dt>
                    <dd>
                        <h5><a href="{{url('/')}}" target="_blank" title="导轨式升降机安全性能使用须知">导轨式升降机安全性能使用须知</a></h5>
                        <p>导轨式升降机是工业生产中必不可少的交通运输工具，其在高空作业中，担当着重要的作用，随着近年来，安全事故的频发，关于安全性，我们更应当引起重视，济南闻韶升降机械有限公司为大家讲解一下，...</p>
                        <span>
                            <a href="{{url('/')}}" target="_blank" title="详细">
                                <img src="{{url('resources/beijing/images/news_btn.gif')}}" alt="详细" title="详细">
                            </a>
                        </span>
                    </dd>
                </dl>


                <ul>
                    <li><h4><a href="{{url('/')}}" target="_blank" title="导轨式升降机安全性能使用须知">导轨式升降机安全性能使用须知</a> </h4></li>

                    <li><h4><a href="{{url('/')}}" target="_blank" title="网站遭到百度惩罚之后应该如何继续优化的工作">网站遭到百度惩罚之后应该如何继续优化的工作</a> </h4></li>

                    <li><h4><a href="{{url('/')}}" target="_blank" title="带您一起窥破网站快速排名的猫腻所在">带您一起窥破网站快速排名的猫腻所在</a> </h4></li>

                    <li><h4><a href="{{url('/')}}" target="_blank" title="如何应对网站排名下降">如何应对网站排名下降</a> </h4></li>

                    <li><h4><a href="{{url('/')}}" target="_blank" title="如何基于搜索引擎的搜索结果进行深度优化">如何基于搜索引擎的搜索结果进行深度优化</a> </h4></li>

                    <li><h4><a href="{{url('/')}}" target="_blank" title="做网站建设之前企业应该提前对网站进行定位">做网站建设之前企业应该提前对网站进行定位</a> </h4></li>

                    <li><h4><a href="{{url('/')}}" target="_blank" title="做为新站长，网站应该如何优化">做为新站长，网站应该如何优化</a> </h4></li>

                    <li><h4><a href="{{url('/')}}" target="_blank" title="Spark是否会成为Hadoop的终结者">Spark是否会成为Hadoop的终结者</a> </h4></li>

                    <li><h4><a href="{{url('/')}}" target="_blank" title="竞价托管数据分析简略篇">竞价托管数据分析简略篇</a> </h4></li>

                    <li><h4><a href="{{url('/')}}" target="_blank" title="网络营销过程中客户分类提高成单销售对策">网络营销过程中客户分类提高成单销售对策</a> </h4></li>

                    <li><h4><a href="{{url('/')}}" target="_blank" title="企业网站策划的不可不考虑到原则性问题 ">企业网站策划的不可不考虑到原则性问题 </a> </h4></li>

                    <li><h4><a href="{{url('/')}}" target="_blank" title="实体商家对网上卖货的错误认知 ">实体商家对网上卖货的错误认知 </a> </h4></li>


                </ul>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                //1.\定义变量
                var pcl = $(".news_t ul li");
                var pcn = $(".news_m");
                //2.\控制内容显示和隐藏

                pcn.eq(0).show().siblings(".news_m").hide();
                $("#newsmore").attr("href", pcl.attr("data-url"));
                pcl.mouseover(function () {
                        //3.1\获取当前Sid
                        var _sid = $(this).attr("data-id");
                        var _url = $(this).attr("data-url");
                        $("#newsmore").attr("href", _url);
                        //3.2\控制选中和未选中
                        $(this).addClass("cur").siblings().removeClass("cur");
                        pcn.each(function () {
                            if ($(this).attr("data-id") == _sid) {
                                $(this).show();
                            }
                            else {
                                $(this).hide();
                            }
                        });
                    }
                );
            });
        </script> <!--金安力动态-->
        <!--常见问题解答-->
        <div class="wd fr">
            <div class="wd_t">
                <span><a href="news-16-1.html" target="_blank" title="更多">更多+</a></span>
                <a href="/cjwt/" target="_blank" title="常见问题">常见问题</a>
            </div>
            <div class="wd_con" id="cjwt" >
                <table cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
                    <tbody>
                    <tr>
                        <td>
                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="导轨式升降机安全性能使用须知">导轨式升降机安全性能使用须知</a> </li>
                            <dl>
                                <dt>
                                    <h6>
                                        <a href="{{url('／')}}" title="导轨式升降机安全性能使用须知" target="_blank">导轨式升降机安全性能使用须知</a>
                                    </h6>
                                </dt>
                                <dd>导轨式升降机是工业生产中必不可少的交通运输工具，其在高空作业中，担当着重要的作用，随着近年来，安全事故的频发，关于安全性......</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="网站遭到百度惩罚之后应该如何继续优化的工作">网站遭到百度惩罚之后应该如何继续优化的工作</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}" title="网站遭到百度惩罚之后应该如何继续优化的工作" target="_blank">网站遭到百度惩罚之后应该如何继续优化的工作</a></dt>
                                <dd>对于做网站优化的朋友们来说，想要将一个网站的排名做上去，这个过程不可能会是一帆风顺的。百度算法的调整导致网站被误以为作弊......</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="带您一起窥破网站快速排名的猫腻所在">带您一起窥破网站快速排名的猫腻所在</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}" title="带您一起窥破网站快速排名的猫腻所在" target="_blank">带您一起窥破网站快速排名的猫腻所在</a></dt>
                                <dd>...</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="如何应对网站排名下降">如何应对网站排名下降</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}" title="如何应对网站排名下降" target="_blank">如何应对网站排名下降</a></dt>
                                <dd>...</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="如何基于搜索引擎的搜索结果进行深度优化">如何基于搜索引擎的搜索结果进行深度优化</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}" title="如何基于搜索引擎的搜索结果进行深度优化" target="_blank">如何基于搜索引擎的搜索结果进行深度优化</a></dt>
                                <dd>...</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="做网站建设之前企业应该提前对网站进行定位">做网站建设之前企业应该提前对网站进行定位</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}" title="做网站建设之前企业应该提前对网站进行定位" target="_blank">做网站建设之前企业应该提前对网站进行定位</a></dt>
                                <dd>...</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="做为新站长，网站应该如何优化">做为新站长，网站应该如何优化</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}" title="做为新站长，网站应该如何优化" target="_blank">做为新站长，网站应该如何优化</a></dt>
                                <dd>...</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="Spark是否会成为Hadoop的终结者">Spark是否会成为Hadoop的终结者</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}" title="Spark是否会成为Hadoop的终结者" target="_blank">Spark是否会成为Hadoop的终结者</a></dt>
                                <dd>...</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="竞价托管数据分析简略篇">竞价托管数据分析简略篇</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}" title="竞价托管数据分析简略篇" target="_blank">竞价托管数据分析简略篇</a></dt>
                                <dd>...</dd>
                            </dl>


                        </td>
                    </tr>
                    <tr>
                        <td>
                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="导轨式升降机安全性能使用须知">导轨式升降机安全性能使用须知</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}" title="导轨式升降机安全性能使用须知" target="_blank">导轨式升降机安全性能使用须知</a></dt>
                                <dd>导轨式升降机是工业生产中必不可少的交通运输工具，其在高空作业中，担当着重要的作用，随着近年来，安全事故的频发，关于安全性......</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="网站遭到百度惩罚之后应该如何继续优化的工作">网站遭到百度惩罚之后应该如何继续优化的工作</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}197-1.html" title="网站遭到百度惩罚之后应该如何继续优化的工作" target="_blank">网站遭到百度惩罚之后应该如何继续优化的工作</a></dt>
                                <dd>对于做网站优化的朋友们来说，想要将一个网站的排名做上去，这个过程不可能会是一帆风顺的。百度算法的调整导致网站被误以为作弊......</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="带您一起窥破网站快速排名的猫腻所在">带您一起窥破网站快速排名的猫腻所在</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}195-1.html" title="带您一起窥破网站快速排名的猫腻所在" target="_blank">带您一起窥破网站快速排名的猫腻所在</a></dt>
                                <dd>...</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="如何应对网站排名下降">如何应对网站排名下降</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}193-1.html" title="如何应对网站排名下降" target="_blank">如何应对网站排名下降</a></dt>
                                <dd>...</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="如何基于搜索引擎的搜索结果进行深度优化">如何基于搜索引擎的搜索结果进行深度优化</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}188-1.html" title="如何基于搜索引擎的搜索结果进行深度优化" target="_blank">如何基于搜索引擎的搜索结果进行深度优化</a></dt>
                                <dd>...</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="做网站建设之前企业应该提前对网站进行定位">做网站建设之前企业应该提前对网站进行定位</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}184-1.html" title="做网站建设之前企业应该提前对网站进行定位" target="_blank">做网站建设之前企业应该提前对网站进行定位</a></dt>
                                <dd>...</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="做为新站长，网站应该如何优化">做为新站长，网站应该如何优化</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}182-1.html" title="做为新站长，网站应该如何优化" target="_blank">做为新站长，网站应该如何优化</a></dt>
                                <dd>...</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('／')}}" target="_blank" title="Spark是否会成为Hadoop的终结者">Spark是否会成为Hadoop的终结者</a> </li>
                            <dl>
                                <dt><a href="{{url('／')}}" title="Spark是否会成为Hadoop的终结者" target="_blank">Spark是否会成为Hadoop的终结者</a></dt>
                                <dd>...</dd>
                            </dl>

                            <li style="display: none;"><a href="{{url('/')}}" target="_blank" title="竞价托管数据分析简略篇">竞价托管数据分析简略篇</a> </li>
                            <dl>
                                <dt><a href="{{url('/')}}" title="竞价托管数据分析简略篇" target="_blank">竞价托管数据分析简略篇</a></dt>
                                <dd>...</dd>
                            </dl>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                // new Marquee("cjwt", 0, 1, 500, 423, 35, 0, 1000, 22);
                new Marquee("cjwt", 0, 1, 338, 423, 35, 0, 1000, 22);
            });
        </script> <!--常见问题解答-->
        <div class="clear"></div>
    </div>
    </div>
    <!--公司动态常见问题-->

    <!--文章列表-->
    <div id="007" class="sy_13">
        <div class="sy_13_xw">
            <em><b><a href="{{url('/')}}" rel="nofollow">MORE</a></b><h3>冷库知识</h3></em>
            <ul>
                <li><!--<span>2017-05-24</span>--><a href="{{url('/')}}">关于“重庆制冷”的声明启示</a></li>
                <li><!--<span>2017-03-09</span>--><a href="{{url('/')}}">关于近日“制冷重庆”的严正声明</a></li>
                <li><!--<span>2017-03-08</span>--><a href="{{url('/')}}">这才是妇女节的正确打开方式</a></li>
                <li><!--<span>2017-02-04</span>--><a href="{{url('/')}}">制冷制冷祝您鸡年新春大吉！</a></li>
                <li><!--<span>2017-01-18</span>--><a href="{{url('/')}}">制冷制冷2017年会精彩瞬间</a></li>
                <li><!--<span>2016-12-08</span>--><a href="{{url('/')}}">制冷制冷招贤纳士啦！</a></li>
                <li><!--<span>2016-11-17</span>--><a href="{{url('/')}}">从工程师到山间XX，制冷制冷上周末经历了啥？</a></li>
            </ul></div>
        <div class="sy_14_xw">
            <em><b><a href="{{url('/')}}" rel="nofollow">MORE</a></b><h3>冷库造价</h3></em>
            <ul>
                <li><!--<span>2018-01-25</span>--><a href="{{url('/')}}">中小型冷库是按平米还是立方来收费的？</a></li>
                <li><!--<span>2017-12-21</span>--><a href="{{url('/')}}">土建冷库造价是如何进行计算的？多少钱一平米冷库</a></li>
                <li><!--<span>2017-11-29</span>--><a href="{{url('/')}}">防爆冷库造价是如何进行计算的？</a></li>
                <li><!--<span>2017-11-06</span>--><a href="{{url('/')}}">水果保鲜库价格多少钱一平米</a></li>
                <li><!--<span>2017-11-06</span>--><a href="{{url('/')}}">100平米冷冻库造价大概需要多少钱？</a></li>
                <li><!--<span>2017-11-03</span>--><a href="{{url('/')}}">水果冷藏冷库价格的影响因素？每平方米的成本是多少?</a></li>
                <li><!--<span>2017-11-01</span>--><a href="{{url('/')}}">蔬菜冷库成本预算是多少？多少钱一平方米</a></li>
            </ul></div>
        <div class="sy_15_xw">
            <em><b><a href="{{url('/')}}" rel="nofollow">MORE</a></b><h3>冷库工程</h3></em>
            <ul>
                <li><!--<span>2017-11-03</span>--><a href="{{url('/')}}">鲁抗医药4期18000平米冷库项目</a></li>
                <li><!--<span>2017-11-03</span>--><a href="{{url('/')}}">海底捞火锅-餐饮冷库</a></li>
                <li><!--<span>2017-04-14</span>--><a href="{{url('/')}}">诺心蛋糕加工速冻冷库</a></li>
                <li><!--<span>2016-11-23</span>--><a href="{{url('/')}}">可口可乐冷库项目</a></li>
                <li><!--<span>2016-11-18</span>--><a href="{{url('/')}}">北京军区陆军总医院血浆冷库项目</a></li>
                <li><!--<span>2016-11-18</span>--><a href="{{url('/')}}">北大国际医院冷库新建项目</a></li>
                <li><!--<span>2016-11-09</span>--><a href="{{url('/')}}">贵州镇宁自治县坝美水果种植农业专业合作社-火龙果气调库</a></li>
            </ul></div>
    </div>
    <!--文章列表-->


    <!--全国各地 开始-->
    <div class="caeg">
        <div class="crty">
            <h1><a href="{{url('/')}}" title="更多">更多&gt;&gt;</a><span>全国分站</span></h1>
            @foreach($diqu as $K=>$v)
                <a target="_blank" title="{{$v['address_name']}}仓库制冷设备" href="http://{{$v['address_suoxie']}}.wsfashion.cn/"> {{$v['address_name']}}制冷设备 </a>
            @endforeach
        </div>
    </div>
    <!--全国各地 结束-->
@endsection

