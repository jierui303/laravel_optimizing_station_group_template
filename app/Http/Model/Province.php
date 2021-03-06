<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'province';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];

    public function tree()
    {
        $data = $this->get();
        return $data;
    }


    //获取指定栏目缩写名称的栏目信息
//    public function getLMSuoxie($suoxie){
//        $info = $this->where('cate_suoxie', '=', $suoxie)->get();//获取了所有的顶级栏目
//        return $info[0]['cate_name'];
//    }
//
//    //获取指定栏目ID下的其余二级子栏目 getAllTwoCAIDAN
//    public function getAllTwoCAIDAN($cate_id){
//        $CategoryName = $this->where('cate_pid', $cate_id)->get();
//        return $CategoryName;
//    }
//
//    //获取所有顶级分类ID及其分类名称
//    public function getAllTopCategoryInfo()
//    {
//        $topNav = $this->where('cate_pid', 0)->get();//获取了所有的顶级栏目
//        return $topNav;
//    }
//
//    //获取所有顶级分类ID及其分类名称
//    public function getAllTopCategoryId()
//    {
//        $topNav = $this->orderBy('cate_order', 'desc')->where('cate_pid', 0)->get(['cate_id', 'cate_name']);//获取了所有的顶级栏目
//        return $topNav;
//    }
//
//    //通过分类ID获取分类名称
//    public function getCategoryName($cate_id)
//    {
//        $CategoryName = $this->where('cate_id', $cate_id)->get();
//        return $CategoryName;
//    }
//
//    //通过顶级分类ID获取其所有自分类ID
//    public function getTwoCategory($topId)
//    {
//        $data = $this->where('cate_pid', $topId)->get();
//        return $data;
//    }

}
