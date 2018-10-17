<?php
/**
 * Created by PhpStorm.  test();
 * User: mac
 * Date: 2017/8/22
 * Time: 下午5:26
 */
function test(){
    echo 'this is a test';
}

//去除字符中所有的空格
function trimall($str){
    $oldchar=array(" ","　","\t","\n","\r");
    $newchar=array("","","","","");
    return str_replace($oldchar,$newchar,$str);
}


function getPinYin($str){
    $pinyin = app('pinyin');
//    echo  $pinyin -> sentence('带着希望去旅行，比到达终点更美好');
    $newStr = $pinyin -> sentence($str);
    return  trimall($newStr);
}

/**
 * 从ueditor的内容中获取图片路径
 */
function getImgUrl($art_content){
    $str = '<img src="http://localhost/2.jpg" alt="" /> <img src="http://localhost/2.jpg" alt="" /> <img src="http://localhost/2.jpg" alt="" />  <a href="http://www.baidu,com/">aaa</a>';
//    $str = $data[0]['art_content'];
//    var_dump($str);
    $str = strip_tags($art_content, '<img>');
    preg_match_all('/\<img\s+src\=\"([\w:\/\.]+)\"/', $str, $matches);
    //var_dump($matches[1]);
    $match = $matches[1];
    foreach ($match as $k=>$value) {
        if($k == 0){
            echo $value."";
        }
        break;
    }
}


/**
 * 传进文章ID，获取文章的所有类目
 */
function getCategory($id){
    $pics = Article::orderBy('art_view', 'desc')->where('art_status', '1')->where(function($q1) use($currentTime){
        $q1->orWhere('art_dingTime', '<', $currentTime);
    })->take(6)->get();//take显示limit数量
    var_dump($pics);
}


/**
 * @param $url
 * @return array
 * 检测文章URL地址是否被收录
 */
function checkBaiduSL($url) {
    $url = 'http://www.baidu.com/s?wd=' . urlencode($url);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $rs = curl_exec($curl);
    curl_close($curl);
    if (!strpos($rs, '没有找到')) { //没有找到说明已被百度收录
        //被收录了，那么获取收录时间
        return '已收录';
    } else {
        return '未收录';
    }

}

/**
 * @param $url
 * @return string
 * 获取文章URL收录的时间
 */
function getBaiDuSLDate($url){
    $url = 'http://www.baidu.com/s?wd=' . urlencode($url);
    //先判断是否被收录，被收录的获取时间
    if(checkBaiduSL($url) == '未收录'){
        return "";
    };
    $kz_pattern = "/<span class=\" newTimeFactor_before_abs m\">(.*)<\/span>/"; /*用以匹配快照日期的字符串*/
    $times = "/\d{4}年\d{1,2}月\d{1,2}/"; /*匹配快照日期的正则表达式，如:2011-8-4*/
    $s0 = @file_get_contents($url); /*将site:www.ninthday.net的网页置入$s0字符串中*/

    preg_match($kz_pattern,$s0,$temp);
//        var_dump($temp);

    preg_match($times,$temp[0],$screenshot);
//        var_dump($screenshot);

    if($screenshot[0] == ""){
        $screenshot[0] = "暂无快照";
    }

    return $screenshot[0];

}


/**
 * @param $url
 * 获取域名收录总量
 * <p>百度收录：<a href="<?php echo $all; ?>" target="_blank"><?php echo $all_num[1]; ?></a></p>
<p>百度快照日期：<a href="<?php echo $all; ?>"><?php echo $screenshot[0]; ?></a></p>
 */
function baidu($url){
    $domain = 'jierui303.com'; /*欲查询的域名*/
    $site_url = 'http://www.baidu.com/s?wd=site%3A';
    $all = $site_url.$domain; /*域名所有收录的网址*/
    $utf_pattern = "/找到相关结果数约(.*?)个/";
    $gb2312_pattern = iconv("UTF-8","UTF-8",$utf_pattern); /*因为百度为UTF-8编码*/
    $kz_pattern = "/<span class=\"g\">(.*)<\/span>/"; /*用以匹配快照日期的字符串*/
    $times = "/\d{4}-\d{1,2}-\d{1,2}/"; /*匹配快照日期的正则表达式，如:2011-8-4*/
    $s0 = @file_get_contents($all); /*将site:www.ninthday.net的网页置入$s0字符串中*/
    preg_match($gb2312_pattern,$s0,$all_num); /*匹配"找到相关结果数*个"*/
    preg_match($gb2312_pattern,$s0,$temp);
    preg_match($times,$temp[0],$screenshot);
    if($all_num[1] == "")
        $all_num[1] = 0;
    if($screenshot[0] == "")
        $screenshot[0] = "暂无快照";
    return $all_num[1];

}

/**
 * 监控关键词排名情况
 * 根据关键词，查询某某域名的排位在第几位
 *
 */
function getListUrl($url){
    $ch = curl_init();//初始化curl
    curl_setopt($ch, CURLOPT_URL, $url);//设置url属性
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $output = curl_exec($ch);//获取数据
    curl_close($ch);//关闭curl
    $res=mb_convert_encoding($output, 'UTF-8', 'UTF-8,GBK,GB2312,BIG5');//使用该函数对结果进行转码

//    var_dump($res);
    //正则匹配a连接

    //拿出网页中所有《a》标签放到数组
    $reg1="/<a class='' target='_blank' href='(.*?)'>(.*?)<\/a>/";
    $arrayS = array();//这个存放的就是正则匹配出来的所有《a》标签数组
    preg_match_all($reg1,$output,$arrayS);
    var_dump($arrayS);



//拿出《a》标签中的链接和标签内容
//    $hrefarray;//这个存放的是匹配出来的href的链接地址
//    $acontent;//存放匹配出来的a标签的内容
//    $reg2="/href=\"([^\"]+)/";
//    for($i=0;$i<count($aarray[0]);$i++) {
//        preg_match_all($reg2, $aarray[0][$i], $hrefarray);
//        echo $hrefarray[1][0] . "\r\n";//这里输出的就是遍历出来的所有a标签的链接
////拿出《a》标签的内容
//        $reg3 = "/>(.*)<\/a>/";
//        preg_match_all($reg3, $aarray[0][$i], $acontent);
//        echo $acontent[1][0] . "\r\n";//这里输出的就是a标签的文字了
//    }
}
