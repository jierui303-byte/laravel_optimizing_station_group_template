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
                    <li><a href="http://www.bjlengku.cn/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=23">冷库门</a></li>
                    <li><a href="http://www.bjlengku.cn/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=24">冷库板</a></li>
                    <li><a href="http://www.bjlengku.cn/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=25">冷库机组</a></li>
                    <li><a href="http://www.bjlengku.cn/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=26">铝排蒸发器</a></li>
                    <li><a href="http://www.bjlengku.cn/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=27">冷风机</a></li>
                </ul>
            </div>
        </div>
        <div class="lefta">
            <h3>新闻动态</h3>
        </div>
        <div class="leftb">
            <div class="leftbb">
                <ul>
                    <li><a href="http://www.bjlengku.cn/index.php?m=content&amp;c=index&amp;a=show&amp;catid=16&amp;id=34" title="冷库工程隔墙穿孔及处理：">冷库工程隔墙穿孔及处理：</a></li>
                    <li><a href="http://www.bjlengku.cn/index.php?m=content&amp;c=index&amp;a=show&amp;catid=16&amp;id=33" title="制冷设备的安装注意细节：">制冷设备的安装注意细节：</a></li>
                    <li><a href="http://www.bjlengku.cn/index.php?m=content&amp;c=index&amp;a=show&amp;catid=16&amp;id=32" title="酒窖到底能为酒作些什么呢？">酒窖到底能为酒作些什么...</a></li>
                    <li><a href="http://www.bjlengku.cn/index.php?m=content&amp;c=index&amp;a=show&amp;catid=16&amp;id=31" title="酒窖，储存着大量的葡萄酒">酒窖，储存着大量的葡萄酒</a></li>
                    <li><a href="http://www.bjlengku.cn/index.php?m=content&amp;c=index&amp;a=show&amp;catid=16&amp;id=30" title="冷库工程建设电气安装安全注意事项">冷库工程建设电气安装安...</a></li>
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
            <h3>客户留言</h3>
            <span>您的位置：<a href="http://www.bjlengku.cn/">网站首页</a> - <a href="http://www.bjlengku.cn/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=21">客户留言</a></span>
        </div>		<style>
            .postinput {
                font-size: 14px;
            }

            .postinput td input {
                border: 1px solid #d3d3d3;
                height: 30px;
                line-height: 30px;
                margin-top:10px;
            }

            .postinput td textarea {
                margin-top:10px;
            }

            .postinput td span {
                color: #d91946;
            }

            .tj {
                background: none repeat scroll 0 0 #dd4250;
                border: 0 none;
                color: #fff;
                cursor: pointer;
                font-size: 14px;
                height: 40px;
                line-height: 40px;
                margin-top: 20px;
                text-align: center;
                width: 80px;
            }
        </style>
        <script type="text/javascript">
            function check(){
                $name = $('#name').val();
                if($name==null||$name==""){
                    alert("请输入姓名");
                    $("#name").focus();
                    return false;
                }
                $tel = $('#tel').val();
                if($tel==null||$tel==""){
                    alert("请输入电话");
                    $("#tel").focus();
                    return false;
                }
                $dizhi = $('#dizhi').val();
                if($dizhi==null||$dizhi==""){
                    alert("请输入地址");
                    $("#dizhi").focus();
                    return false;
                }
                $neirong = $('#neirong').val();
                if($neirong==null||$neirong==""){
                    alert("请输入留言内容");
                    $("#neirong").focus();
                    return false;
                }
                return true;
            }
        </script>
        <div class="rightb">
            <div class="rightc">
                <p>
                    尊敬的客户：<br>
                    　　				<span style="text-indent:2em;color:#660000;">如果您对我们的产品或服务有任何意见和建议请及时告诉我们，我们将尽快给您满意的答复。</span><br>
                    　　				<span style="text-indent:2em;color:#660000;">如果您注册一个会员号，以后每次留言时只要登录再不用重复填写你的联系信息了，并且通过会员管理可集中查看只属于您的留言。（非注册会员也可直接留言）</span>
                </p>
                <p>
                </p><form name="myform" id="myform" method="post" action="http://www.bjlengku.cn/index.php?m=formguide&amp;c=index&amp;a=show&amp;formid=15&amp;action=js&amp;siteid=1">
                    <table id="bmt" class="postinput" cellspacing="1" cellpadding="3">
                        <tbody>
                        <tr>
                            <td>姓&nbsp;&nbsp;名：</td>
                            <td><input type="text" onblur="if(this.value==&#39;&#39;){this.value=&#39;&#39;;}" onfocus="if(this.value==&#39;&#39;){this.value=&#39;&#39;;}" value="" id="name" name="info[name]"><span>&nbsp;&nbsp;&nbsp;*</span></td>
                        </tr>
                        <tr>
                            <td>联系电话：</td>
                            <td><input type="text" value="" id="tel" name="info[telphone]"><span>&nbsp;&nbsp;&nbsp;*</span></td>
                        </tr>
                        <tr>
                            <td>传&nbsp;&nbsp;真：</td>
                            <td><input type="text" value="" name="info[chuanzhen]"></td>
                        </tr>
                        <tr>
                            <td>电子邮件：</td>
                            <td><input type="text" size="60" value="" name="info[email]"></td>
                        </tr>
                        <tr>
                            <td>邮&nbsp;&nbsp;编：</td>
                            <td><input type="text" value="" name="info[youbian]"></td>
                        </tr>
                        <tr>
                            <td>地址：</td>
                            <td><input type="text" size="60" id="dizhi" value="" name="info[dizhi]"><span>&nbsp;&nbsp;&nbsp;*</span></td>
                        </tr>
                        <tr>
                            <td>内&nbsp;&nbsp;容：</td>
                            <td><textarea style="border:1px solid #d3d3d3" id="neirong" rows="5" cols="60" name="info[saytext]"></textarea><span>&nbsp;&nbsp;&nbsp;*</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="tj" type="submit" value="提交" name="dosubmit" onclick="return check()"></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
                <p></p>
            </div>
        </div>
    </div>
</div>
@endsection