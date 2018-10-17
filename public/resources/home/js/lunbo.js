/**
 * Created by mac on 16/10/18.
 */
    //初始化设定一个轮播索引值
var num = 0;
var ulWidth = 1225;//轮播图片的宽度
var imgNum = $('#ulLabel li').length-1;//轮播图片的总数量

//封装一个自动往下一张走的函数
function autoPlay(){
    if(num > imgNum){
        num = 0;
    }
    $('#ulLabel').animate({left: -num * ulWidth+'px'}, 1000);
    //把轮播图片对应的小点颜色改变
    $('#dianList div').eq(num).css('background', 'rgba(0,0,0,.5)').siblings().css('background', 'rgba(0,123,255,.6)');
    console.log(num+'自动轮播');
    num++;
}

//第一步: 自动走轮播
var timer = setInterval(autoPlay, 2000);//调用自动下一张函数

//第二步: 点击小点切换
$('#dianList div').click(function(){
    //获取点击的是第几个图片
    num = $(this).index();//把点击选中的图片索引值赋给全局轮播num变量
    $('#ulLabel').animate({left: -num * ulWidth+'px'}, 1000);
    //把轮播图片对应的小点颜色改变
    $('#dianList div').eq(num).css('background', 'rgba(0,0,0,.5)').siblings().css('background', 'rgba(0,123,255,.6)');
    console.log(num+'小点切换');//点击0,
//        num++;
});

//第三步: 点击上一步
$('.left').click(function(){
    num--;
    if(num < 0){
        num = imgNum;
        console.log(imgNum);
    }
    console.log(num+'上一步索引');
//        $('#ulLabel').css('left', -num * ulWidth+'px');
    $('#ulLabel').animate({left: -num * ulWidth+'px'}, 1000);
    //把轮播图片对应的小点颜色改变
    $('#dianList div').eq(num).css('background', 'rgba(0,0,0,.5)').siblings().css('background', 'rgba(0,123,255,.6)');
});

//第四步: 点击下一步
$('.right').click(function(){
    num++;
    if(num > imgNum){
        num = 0;
    }
    console.log(num+'下一步索引');
    $('#ulLabel').animate({left: -num * ulWidth+'px'}, 1000);
    //把轮播图片对应的小点颜色改变
    $('#dianList div').eq(num).css('background', 'rgba(0,0,0,.5)').siblings().css('background', 'rgba(0,123,255,.6)');
});
//        $('.right').click(autoPlay);


//第五步: 当鼠标移到轮播图时, 停止自动轮播
$('#lunboAll').mouseover(function(){
    clearInterval(timer);//停止定时器
    console.log(num+'关闭轮播索引');

    //把上一张, 下一张显示出来
    $('.left').css('display', 'block');
    $('.right').css('display', 'block');
});

//第六步: 当鼠标移出轮播图时, 继续自动轮播
$('#lunboAll').mouseout(function(){
    timer = setInterval(function(){
        num++;

        if(num > imgNum){
            num = 0;
        }
        $('#ulLabel').animate({left: -num * ulWidth+'px'}, 1000);
        $('#dianList div').eq(num).css('background', 'rgba(0,0,0,.5)').siblings().css('background', 'rgba(0,123,255,.6)');

        console.log(num+'重启轮播索引');
    }, 2000);

    //把上一张, 下一张隐藏
    $('.left').css('display', 'none');
    $('.right').css('display', 'none');
});
//    $('#lunboAll').mouseout(function(){
//        timer = setInterval(autoPlay, 2000);
//
//        //把上一张, 下一张隐藏
//        $('.left').css('display', 'none');
//        $('.right').css('display', 'none');
//    });

