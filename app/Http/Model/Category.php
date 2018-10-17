<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Article;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'cate_id';
    public $timestamps = false;
    protected $guarded = [];

    public function tree()
    {
        $categroys = $this->orderBy('cate_order', 'asc')->get();
        $data = $this->getTree($categroys, 'cate_name', 'cate_id', 'cate_pid', 0);
        return $data;
    }
    
    public function getTree($data, $field_name, $field_id, $field_pid, $pid)
    {
        $arr = array();
        foreach ($data as $k=>$v) {
            //cate_pid == 0 顶级栏目
            if ($v->$field_pid == $pid) {
                $data[$k]['_'.$field_name] = ''.$data[$k][$field_name];
                $data[$k]['_cate_num'] = (new Article())->getCaNum($data[$k]['cate_id']);//获取当前栏目下文章的数量
                $arr[] = $data[$k];
                foreach ($data as $m=>$n) {
                    //cate_pid == cate_id 二级栏目
                    if ($n->$field_pid == $v->$field_id) {
                        $data[$m]['_'.$field_name] = '├── '.$data[$m][$field_name];
                        $data[$m]['_cate_num'] = (new Article())->getCaNum($data[$m]['cate_id']);//获取当前栏目下文章的数量
                        $arr[] = $data[$m];
                    }
                }
            }
        }
        return $arr;
    }

    public function treeS()
    {
        $categroys = $this->orderBy('cate_order', 'asc')->get();
        $data = $this->getTreeS($categroys, 0, 0);
        return $data;
    }

    //https://blog.csdn.net/tiansidehao/article/details/79025359
    /**
     * 递归实现无限极分类
     * @param $array 分类数据
     * @param $pid 父ID
     * @param $level 分类级别
     * @return $list 分好类的数组 直接遍历即可 $level可以用来遍历缩进
     */
    function getTreeS($array, $pid =0, $level = 0){

        //声明静态数组,避免递归调用时,多次声明导致数组覆盖
        static $list = [];
        foreach ($array as $key => $value){
            //第一次遍历,找到父节点为根节点的节点 也就是pid=0的节点
            if ($value['cate_pid'] == $pid){
                //父节点为根节点的节点,级别为0，也就是第一级
                $value['level'] = $level;
                //把数组放到list中
                $list[] = $value;
                //把这个节点从数组中移除,减少后续递归消耗
                unset($array[$key]);
                //开始递归,查找父ID为该节点ID的节点,级别则为原级别+1
                $this->getTreeS($array, $value['cate_id'], $level+1);

            }
        }
        return $list;
    }


    //获取指定栏目缩写名称的栏目信息
    public function getLMSuoxie($suoxie){
        $info = $this->where('cate_suoxie', '=', $suoxie)->get();//获取了所有的顶级栏目
        return $info[0]['cate_name'];
    }

    //获取指定栏目ID下的其余二级子栏目 getAllTwoCAIDAN
    public function getAllTwoCAIDAN($cate_id){
        $CategoryName = $this->where('cate_pid', $cate_id)->get();
        return $CategoryName;
    }

    //获取所有顶级分类ID及其分类名称
    public function getAllTopCategoryInfo()
    {
        $topNav = $this->where('cate_pid', 0)->get();//获取了所有的顶级栏目
        return $topNav;
    }

    //返回所有栏目下文章总量
    public function getAllCategoryArticleNum()
    {
        $data = array();

        $topNav = $this->where('cate_pid', 0)->get();//获取了所有的顶级栏目
        foreach ($topNav as $k=>$v){
            $data[$v['cate_id']]['art_num'] = (new Article())->getCaNum($v['cate_id']);
        }
        return $data;
    }

    //获取所有顶级分类ID及其分类名称
    public function getAllTopCategoryId()
    {
        $topNav = $this->orderBy('cate_order', 'desc')->where('cate_pid', 0)->get(['cate_id', 'cate_name']);//获取了所有的顶级栏目
        return $topNav;
    }

    //通过分类ID获取分类名称
    public function getCategoryName($cate_id)
    {
        $CategoryName = $this->where('cate_id', $cate_id)->first();
        return $CategoryName;
    }

    //通过顶级分类ID获取其所有自分类ID
    public function getTwoCategory($topId)
    {
        $data = $this->where('cate_pid', $topId)->get();
        return $data;
    }

    //通过cate_id 判断是顶级栏目还是二级栏目
    public function isTwoOne($cate_id)
    {
        $cate_pid = $this->where('cate_id', $cate_id)->first(['cate_pid']);
        return $cate_pid['cate_pid'];
    }

}
