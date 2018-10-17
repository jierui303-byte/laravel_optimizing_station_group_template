/**
 * Created by mac on 16/10/19.
 */

$(function(){
    //控制导航条
    $('.navigater ul li').mouseover(function(){
        //获取导航条的索引值
        var navNum = $(this).index();
        console.log(navNum);
        if(navNum < 7){
            $('.navDialog').show().mouseover(function(){
                //获取导航条的索引值
                if(navNum < 7){
                    $('.navDialog').show();//显示
                }else{
                    $('.navDialog').hide();//隐藏
                }

                //然后,把相应索引值对应的数据给移到可见区域内
                $('.navDialog ul').eq(navNum).show().siblings().hide();

            }).mouseout(function(){
                $('.navDialog').hide();
            });//显示
        }else{
            $('.navDialog').hide();//隐藏
        }

        //然后,把相应索引值对应的数据给移到可见区域内
        $('.navDialog ul').eq(navNum).show().siblings().hide();

    }).mouseout(function(event){
        //判断光标走向
        if($(this).offset().top <= event.pageY){
            $('.navDialog').show();//显示
        }else{
            $('.navDialog').hide();//隐藏
        }
        console.log($(this).offset().top+'+++++'+event.pageY);
    });


    //搜索框点击隐藏
    $('.search').click(function(event){
        $(this).find('div').hide();//隐藏输入框中的标签
        $(this).find('.search-list').show();//隐藏输入框中的标签
        $(this).find('input, button, .search-list').css({outline:'none', border:'1px solid #ff6700'});
    }).mouseover(function(){
        $('input[name=search]').next().css({'background':'#ff6700', 'color':'#fff'});
    }).mouseout(function(){
    	$('input[name=search]').next().css({'background':'#fff', 'color':'#151515'});
    });

    //丧失光标焦点时,隐藏
    $('input[name=search]').blur(function(){
        $(this).parent().find('.search-list').hide();
    });


    //轮播图的菜单导航
    $('.dingwei ul li').mouseover(function(){
    	var dingwei = $('.dingwei');

        $('.dingwei-list').css('left', dingwei.offset().left + dingwei.width()+15).show().mouseover(function(){
            $(this).show();
        }).mouseout(function(){
            $(this).hide();
        });
        //获取索引, 显示对应的ul列表
        $('.dingwei-list>ul').eq($(this).index()).show().siblings().hide();

    }).mouseout(function(){
        $('.dingwei-list').hide();
    });


    //轮播图下方三个图
    $('.fourtx').mouseover(function(){
        $(this).css('box-shadow', '5px 5px 30px 10px rgba(217,217,217,.6)');
    }).mouseout(function(){
        $(this).css('box-shadow', '');
    });


    //小米明星单品
    //设定单击次数索引变量
    var superNum = 0;
    //获取ul的个数
    var uls = $('.superPjs .superP-l .superP-lun ul');
    var ulN = uls.length;
    //自动轮播
    var timeC = setInterval(timecRun, 3000);
    // 索引为1时, 向右走
    $('.superPjs .superP-t a:eq(0)').click(function(event){
        event.preventDefault();//阻止a链接的默认行为
        console.log($(this).index());

        superNum++;

        if(superNum >= ulN){
            superNum = 0;
            $('.ac').prev().css('color', '#E3E3E3');//不可用
        }
        $('.superP-lun').animate({left:-(superNum)*1226+'px'}, 1000);

    });
    //索引值为2 ,向左走,
    $('.superPjs .superP-t a:eq(1)').click(function(event){
        // 索引为2时, 向左走,  索引为1时, 向右走
        event.preventDefault();//阻止a链接的默认行为

        console.log($(this).index()+'ssss');

        superNum--;

        if(superNum < 0){
            superNum = ulN-1;
        }
        $('.superP-lun').animate({left:-superNum*1226+'px'}, 1000);
    });
    //鼠标放上去时, 取消自动轮播
    $('.superPjs').mouseover(function(){
        clearInterval(timeC);
    }).mouseout(function(){
        timeC = setInterval(timecRun, 3000);
    });

    function timecRun(){
        superNum++;
        if(superNum >= ulN){
            superNum = 0;
        }
        $('.superP-lun').animate({left:-(superNum)*1226+'px'}, 1000);
    }




    //配件, 周边, 搭配多个tab切换页
    $('.many-tab li').mouseover(function(){
        var tabNum = $(this).index();
        console.log($(this).index());
        $(this).parents('.match').find('.match-l-right').children('ul').eq(tabNum).show().siblings().hide();
    });





    //为你推荐, 初始化,第一个按钮为灰色, 点击后,第一个变色,证明可以倒退
    //显示最后一个后, 最后一个按钮为灰色

//设定单击次数索引变量
    var recommendNum = 0;
    //获取ul的个数
    var ulsRe = $('.recommend .superP-l .superP-lun-re ul');
    var ulsN = ulsRe.length;
    var clickIs = false;
    // 索引为1时, 向右走
    $('.recommend .superP-t a:eq(0)').click(function(event){
        if(clickIs){
            return false;
        }

        event.preventDefault();//阻止a链接的默认行为
        console.log($(this).index());

        recommendNum++;

        if(recommendNum >= ulsN){
            recommendNum = 0;
        }
        //把第一个按钮变成可用的颜色 #666
        if(!clickIs){
            $('.ac').css('color', '#666');
        }

        $('.superP-lun-re').animate({left:-(recommendNum)*1226+'px'}, 1000);

        //当走到最后一个时, 当前按钮变成不可用色 #E3E3E3   并且不能再次触发事件
        if(recommendNum == ulsN-1){
            $('.ac').prev().css('color', '#E3E3E3');
            clickIs = true;
            console.log(recommendNum);
        }

    });
    //索引值为2 ,向左走,
    $('.recommend .superP-t a:eq(1)').click(function(event){
        console.log(clickIs);
        if(!clickIs){
            return false;
        }

        // 索引为2时, 向左走,  索引为1时, 向右走
        event.preventDefault();//阻止a链接的默认行为

        console.log($(this).index()+'ssss');

        recommendNum--;

        if(recommendNum < 0){
            recommendNum = ulsN-1;
        }

        //当走到第一个时, 当前按钮变成可用色 #666
        if(clickIs){
            $('.ac').prev().css('color', '#666');
        }

        $('.superP-lun-re').animate({left:-recommendNum*1226+'px'}, 1000);
        console.log(recommendNum);
        //把最后一个按钮变成不可用的颜色 #E3E3E3
        if(recommendNum == 0){
            $('.ac').css('color', '#E3E3E3');
            clickIs = false;
        }

    });







    //内容中的切换
    var contentNum = 0;
    var conClick = false;

    //上一个
    $('.li-left').click(function(){
        console.log(contentNum+'--上一个--'+num);

        var num = $(this).parent('li').find('.lunDiv ul li').length;

        if(contentNum == 0){
            return false;
        }
        contentNum--;

        $(this).parent('li').find('.lunDiv ul').animate({left:-contentNum*296+'px'}, 1000);
        $(this).parent('li').find('.lun-dian div').eq(contentNum).css({
            background:'#fff',
            border:'1px solid #fe7009',
            boxSizing: 'border-box',
            cursor: 'pointer'
        }).siblings().css({
            background: 'rgba(2,3,1,.5)',
            border:'1px solid rgba(2,3,1,.5)',
            boxSizing:'border-box'
        });
        console.log(contentNum+'----'+num);
    });

    //下一个
    $('.li-right').click(function(){

        var num = $(this).parent('li').find('.lunDiv ul li').length;
        // //点到最后一个时, 不能再生效了
        if(contentNum == num-1){
            return false;
        }
        contentNum++;

        $(this).parent('li').find('.lunDiv ul').animate({left:-contentNum*296+'px'}, 1000);
        $(this).parent('li').find('.lun-dian div').eq(contentNum).css({
            width:'10px',
            height:'10px',
            background:'#fff',
            border:'1px solid #fe7009',
            boxSizing: 'border-box',
            cursor: 'pointer'
        }).siblings().css({
            background: 'rgba(2,3,1,.5)',
            border:'1px solid rgba(2,3,1,.5)',
            boxSizing:'border-box'
        });
        console.log(contentNum+'++下一个+++'+num);

    });

    //lun-dian
    $('.lun-dian div').click(function(){
        contentNum = $(this).index();
        console.log(contentNum);

        $(this).parents('li').find('.lunDiv ul').animate({left:-contentNum*296+'px'}, 1000);
        $(this).css({
            width:'10px',
            height:'10px',
            background:'#fff',
            border:'1px solid #fe7009',
            boxSizing: 'border-box',
            cursor: 'pointer'
        }).siblings().css({
            background: 'rgba(2,3,1,.5)',
            border:'1px solid rgba(2,3,1,.5)',
            boxSizing:'border-box'
        });

        $('.lun-dian div').not(contentNum).mouseover(function(){
            if($(this).index() != contentNum){
                $(this).css({
                    width:'10px',
                    height:'10px',
                    background:'#fe7009',
                    'border':'1px solid #fe7009'
                });
            }
        }).mouseout(function(){
            if($(this).index() != contentNum){
                $(this).css({
                    width:'10px',
                    height:'10px',
                    background:'rgba(2,3,1,.5)',
                    border:'1px solid rgba(2,3,1,.5)'
                });
            }
        });
    });


    //当鼠标放到content上时, 上下显示,移走隐藏
    $('.content .superP-l ul li').mouseover(function(){
        $(this).find('.li-left, .li-right').show();
    }).mouseout(function(){
        $(this).find('.li-left, .li-right').hide();
    });














});
