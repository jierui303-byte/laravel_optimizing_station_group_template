<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class CommonController extends Controller
{
    //图片上传
    public function upload(Request $request)
    {

        $path = $request->file('Filedata')->store('public');

        //把路径/拆分 获取图片名称
        $pathArr = explode('/', $path);
        return $pathArr[1];//路径中多了一个public

//        $file = Input::file('Filedata');//获取uploadify异步上传的图片
//        if($file -> isValid()){
//            //检验一下上传的文件是否有效.
//            $entension = $file->getClientOriginalExtension(); //上传文件的后缀.
//            var_dump($entension);
//            exit;
//            $newName = date('YmdHis').mt_rand(100,999).'.'.$entension;//利用时间+随机值拼接成新的文件名称
//            $path = $file->move(base_path().'/uploads',$newName);//移动临时文件并重命名
//            $filepath = 'uploads/'.$newName;

//            $filename="pic.jpg";
//            $per=0.3;
//            list($width, $height)=getimagesize($filename);
//            $n_w=$width*$per;
//            $n_h=$height*$per;
//            $new=imagecreatetruecolor($n_w, $n_h);
//            $img=imagecreatefromjpeg($filename);
//            //copy部分图像并调整
//            imagecopyresized($new, $img,0, 0,0, 0,$n_w, $n_h, $width, $height);
//            //图像输出新图片、另存为
//            imagejpeg($new, "pic1.jpg");
//            imagedestroy($new);
//            imagedestroy($img);


//            return $filepath;

             //  如果你这样写的话,默认是会放置在 我们 public/storage/uploads/php79DB.tmp
              // 貌似不是我们希望的,如果我们希望将其放置在app的storage目录下的uploads目录中,并且需要改名的话..
              // $path = $file -> move(app_path().'/storage/uploads',$newName);
              // 这里app_path()就是app文件夹所在的路径.$newName 可以是你通过某种算法获得的文件的名称.主要是不能重复产生冲突即可.   比如 $newName = md5(date('ymdhis').$clientName).".".$extension;
              // 利用日期和客户端文件名结合 使用md5 算法加密得到结果.不要忘记在后面加上文件原始的拓展名.
                // 具体看后盾论坛:http://bbs.houdunwang.com/thread-101287-1-3.html
            

//        }
    }


}
