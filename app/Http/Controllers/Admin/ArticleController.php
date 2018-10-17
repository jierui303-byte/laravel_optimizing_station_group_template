<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Article;
use App\Http\Model\Tag;
use App\Http\Model\Category;
use \Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ArticleController extends CommonController
{
    //全部文字列表
    public function index(Request $request)
    {
        //获取当前第几页
        $RequestUri = $request->getRequestUri();
        $RequestUriArr = explode('=',$RequestUri);
        $pageNum = isset($RequestUriArr[1]) ? $RequestUriArr[1] : 1;//页码不存在时,默认显示第一页

//        $data = Article::orderBy('art_id', 'desc')->paginate(20);
//        paginate($perPage = null, $columns = ['*'], $pageName = 'page', $page = null)

        $data = Article::orderBy('art_id', 'desc')->paginate($perPage = 20, $columns = ['*'], $pageName = 'page', $page = $pageNum);//paginate分页
//        $data->setPath('article');

        //查询所有文章是否被收录，被收录的获取收录时间
//        $url = 'https://www.cc430.cn/index.php/archives/410/';
//        echo checkBaiduSL($url);
//        echo getBaiDuSLDate($url);
//        $sl = [];
//        foreach($data as $k=>$v){
//            echo checkBaiduSL('http://jierui303.com/a/155');
//        }


        return view('admin.article.index', compact('data'));
    }

    //get.admin/article/create 添加文章
    public function create(Request $request)
    {
        $RequestUri = $request->getRequestUri();
        $RequestUriArr = explode('=',$RequestUri);
        $cate_id = isset($RequestUriArr[1]) ? $RequestUriArr[1] : 0;//页码不存在时,默认显示第一页

        $data = (new Category)->tree();//获取分类列表

        return view('admin.article.add', compact('data'));
    }

    //add添加文章表单提交的方法
    public function store()
    {
        $input = Input::except('_token');
        $input['art_time'] = time();
        $input['art_dingTime'] = time();
//        $art_tag = $input['art_tag'];//在数组转换成字符窜之前先付给另外一个变量


        //文章的tag标签可以有多个,是数组格式, 可以把它拼接成数组给存放到数据库中
        // 8,9 文章表
//        $input['art_tag'] = implode('/', $input['art_tag']);//数组拼成字符串了
        //同时更新tag表中的关联文章id表
        //把新增文章生成的id给拼接到tag表中
        //这样通过tagid找文章好找, 通过文章找关联tagid也好找了
        //tagid是数组,先循环遍历关联文章,然后再拼接字符串到文章数据库
//        $input['tag_article_id'] = 0;
//        foreach ($input['art_tag'] as $k=>$value){
//            Tag::where('id', $value['id'])->update();
//        }
//        var_dump($input);
//        exit;

        //判定是否设置了定时发布时间
//        if($input['art_dingTime'] == 0){
//            //如果没有设置定时发布时间，那么我们只需要把文章创建时间和定时发布时间设置一致即可
//            $input['art_dingTime'] = $input['art_time'];
//        }else{
//            //设置了我们要更新文章的创建时间和定时发布时间
//            $input['art_dingTime'] = strtotime($input['art_dingTime']);
//        }


        $rules = [
            'art_title' => 'required',
            'art_content' => 'required',
        ];

        $message = [
            'art_title.required' => '文章标题不能为空!',
            'art_content.required' => '文章内容不能为空!',
        ];

        //判断文章当前所属栏目ID是否是顶级栏目，是顶级栏目，cate_id=cate_pid设为当前栏目ID
        //不是顶级栏目，获取顶级栏目ID
        $categoryInfo = Category::find($input['cate_id']);
        if($categoryInfo['cate_pid'] == 0){
            $input['cate_pid'] = $input['cate_id'];
        }else{
            $input['cate_pid'] = $categoryInfo['cate_pid'];
        }

        //文章新增时，文章没有路径上传 默认图片storage/TUBBLv0ebufgtiMTxRPQCRxCaOrpH3Qcxn3RoXaD.png
//        if(!$input['art_thumb']){
//            $input['art_thumb'] = 'storage/yTdMsy92qfE9fQ3QgZVXYHV9dozeT8MluNtOpOXB.png';
//        }

        $validator = Validator::make($input, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
        if ($validator->passes()) {
            //通过article模型入库
            $re = Article::create($input);
//            var_dump($re['art_id']);//新创建的文章id
            if ($re) {
                //新增成功了, 先获取一下tag文章id关联记录,然后把新增的文字id关联拼接进tag表中
//                for($i=0; $i<count($art_tag);$i++){
////                    var_dump($art_tag[$i]);//tagid
//                    $oldINFO = Tag::find($art_tag[$i]);
//                    if(!$oldINFO['tag_article_id']){
//                        $tagData['tag_article_id'] = $re['art_id'];
//                    }else{
//                        $tagData['tag_article_id'] = $oldINFO['tag_article_id'].'/'.$re['art_id'];
//                    }
//                    Tag::where('id', $art_tag[$i])->update($tagData);
//                }
                return redirect('admin/article');
            } else {
                return back()->with('errors', '数据填充失败,请稍后重试!');
            }
        } else {
            return back()->withErrors($validator);
        }

    }

    //编辑文章
    public function edit($art_id)
    {
        $data = (new Category)->tree();
        $field = Article::find($art_id);
        //获取所有的文章所属分类的tag标签
        $tagLists = Tag::where('tag_category_id',$field['cate_id'])->get();
//        var_dump($tagLists);

        $art_tag = explode('/', $field['art_tag']);

        return view('admin.article.edit', compact('data', 'field', 'tagLists', 'art_tag'));
    }

    //用来接收edit提交过来更新  发布文章流程
    public function update($art_id)
    {
        //草稿发布  正常文章发布
        $input = Input::except('_token', '_method');
//        $input['art_time'] = time();
        $field = Article::find($art_id);
        $input['art_dingTime'] = $field['art_time'];
        //在数组转换成字符窜之前先付给另外一个变量
//        var_dump(isset($input['art_tag']));//返回false不存在
//
//        if(!isset($input['art_tag'])){
//            $input['art_tag'] = '';//置空
//            echo '空';
//            //当传递过来的tag标签数组为空时, 说明旧的tag标签都被删除掉了,
//            //所以数据库中也要执行删除
//            //获取旧的文章记录,把tagid给删除掉
//            $oldINFO = Article::find($art_id);//查看旧的里面
//
//            //判断这个标签是不是已经绑定文章id了,
//            if($oldINFO['art_tag']){
//                //去掉文章的id即可
//                $tag = explode('/', $oldINFO['art_tag']);
//                foreach ($tag as $key=>$value) {
//                    //更新tag表中tag_article_id的值删除掉当前文章id
//                    $oldTagINFO = Tag::find($value);
//                    $oldTags = explode('/', $oldTagINFO['tag_article_id']);
//
//                    foreach ($oldTags as $a=>$v){
//                        if ($v === $art_id){
//                            unset($oldTags[$a]);
//                        }
//                    }
//                    $tagData['tag_article_id'] = implode('/', $oldTags);
//                    Tag::where('id', $value)->update($tagData);
//                }
//            }
//
////exit;
//        }else{
//            //里面存在值
//            $art_tag = $input['art_tag'];
//            var_dump($input['art_tag']);
//            echo 'no空';
//            var_dump('不为空');
//            $input['art_tag'] = implode('/', $input['art_tag']);//数组拼成字符串了
//
//            //array_intersect取出两个数组之间的交集,也就是相同的值
//            $oldINFO = Article::find($art_id);//查看旧的里面
//            $oldTagArr = explode('/', $oldINFO['art_tag']);//旧的tag数组
////        var_dump($oldTagArr);//4个
////        var_dump($art_tag);//5个
//            if(count($oldTagArr) > count($art_tag)){
//                $intersection = array_diff($oldTagArr, $art_tag);
//            }else{
//                $intersection = array_diff($art_tag, $oldTagArr);
//            }
//
//            //比较新旧tag的id相同和不同
////        $intersection = array_intersect($oldTagArr, $art_tag);
//            //array_diff()返回出现在第一个数组中但其他输入数组中没有的值
//            //
////        $intersection = array_diff($oldTagArr, $art_tag);
////        var_dump($intersection);
//
////        exit;
//            //循环检测这几个差异的值是否存在最新的tagid,不存在就删除掉了, 存在就新增
//            foreach($intersection as $k=>$v){
//                $oldINFO = Tag::find($v);
//                if(in_array($v, $art_tag)){
//                    echo '我是新增标签'.$v;
//                    //存在,则是新增的tag标签 获取到这个标签的信息 把文字id加进去
//                    $tag = explode('/', $oldINFO['tag_article_id']);
//                    $tag[] = $art_id;
//                    var_dump($tag);
//                    $tagData['tag_article_id'] = implode('/', $tag);
//
//                    Tag::where('id', $v)->update($tagData);
//                }else{
//                    //不存在, 则是被减掉的tag标签
//                    //找到这个标签的信息, 更新
////                $oldINFO = Tag::find($intersection[$i]);
//
//                    //判断这个标签是不是已经绑定文章id了,
//                    if($oldINFO['tag_article_id']){
//                        //去掉文章的id即可
//                        $tag = explode('/', $oldINFO['tag_article_id']);
//                        foreach ($tag as $key=>$value)
//                        {
//                            if ($value === $art_id)
//                                unset($tag[$key]);
//                        }
////                    var_dump($tag);
//                        $tagData['tag_article_id'] = implode('/', $tag);
//                    }
//                    Tag::where('id', $v)->update($tagData);
//
//                }
//
//            }
//
//
//        }
//exit;




//exit;
        //分两步走, 先遍历一遍, 拿新旧tagid做比较, 找出多的还是少的

        //少了几个,就删掉几个

        //多了几个,就新增几个
        //先获取一下tag文章id关联记录,然后把新增的文字id关联拼接进tag表中
        //得判断tag标签是增加了还是减少了
        //增加了就把增加的标签找出来新增文章id
        //循环新的tag列表, 文章id存在不动, 文章id不存在就新增
//        for($i=0; $i<count($art_tag);$i++){
//            $oldINFO = Tag::find($art_tag[$i]);//查看旧的里面
//            //判断新的标签是不是已经绑定文章id了,
//            if(!$oldINFO['tag_article_id']){
//                $tagData['tag_article_id'] = $art_id;
//            }else{
//                //检测一下是否已经存在被关联id了  包含了而且最新的art_tag数组里面也有那就保留
//                //如果包含的有但是最新的art_tag数组里面没有该值就删除
//                //如果不存在就直接新增嘛
//                if(!in_array($art_id, explode('/', $oldINFO['tag_article_id']))){
//                    $tagData['tag_article_id'] = $oldINFO['tag_article_id'].'/'.$art_id;
//                }else{
//                    continue;
//                }
//            }
//            Tag::where('id', $art_tag[$i])->update($tagData);
//        }




        //没有设定定时发布时间
//        if($input['art_dingTime'] == 0){
//            $input['art_dingTime'] = time();
//        }else{
//            $input['art_dingTime'] = strtotime($input['art_dingTime']);
//        }
        //判断文章当前所属栏目ID是否是顶级栏目，是顶级栏目，cate_id=cate_pid设为当前栏目ID
        //不是顶级栏目，获取顶级栏目ID
        $categoryInfo = Category::find($input['cate_id']);
        if($categoryInfo['cate_pid'] == 0){
            $input['cate_pid'] = $input['cate_id'];
        }else{
            $input['cate_pid'] = $categoryInfo['cate_pid'];
        }
        $re = Article::where('art_id', $art_id)->update($input);
        if ($re) {
            return redirect('admin/article');
        } else {
            return back()->with('errors', '分类信息更新失败,请稍后重试!');
        }
    }


    //delete 删除单个文章
    public function destroy($art_id)
    {
        $re = Article::where('art_id', $art_id)->delete();
        if ($re) {
            $data = [
                'status' => 0,
                'msg' => '文章删除成功!',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '文章删除失败,请稍后重试!',
            ];
        }
        return $data;
    }

    //百度主动推送
    public function baidutuisong($art_id){
        $urls = array(
            'http://jierui303.com/a/'.$art_id,
        );
        $api = 'http://data.zz.baidu.com/urls?site=http://jierui303.com&token=Rm7qmM3LwpT8SI7o';
        $ch = curl_init();
        $options =  array(
            CURLOPT_URL => $api,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $urls),
            CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
        );
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        $result = json_decode($result,true);
//        echo $result;
//        var_dump(json_decode($result,true));
//        exit;

        if ($result['success'] == 1) {
            //推送成功,执行跳转回文章列表页
            return redirect('admin/article');
        } else {
            return back()->with('errors', '文章主动推送失败,请稍后重试!');
        }

    }

    //更新网站地图文件
    public function sitemap(){

    }

    //更新文章收录情况
    public function shoulu(){


//        return view('admin.article.soulu');
    }

}
