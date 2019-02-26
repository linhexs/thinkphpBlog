<?php
// +----------------------------------------------------------------------
// | 青春博客 thinkphp5 版本
// +----------------------------------------------------------------------
// | Copyright (c) 2013~2016 http://loveteemo.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: long <admin@loveteemo.com>
// +----------------------------------------------------------------------
namespace app\index\model;
use think\Model;
class Banner extends Model
{
    /**
     * 获取banner数据集
     * @return false|\PDOStatement|string|\think\Collection
     */
    public function getIndexBanner($count){
        return $this->order('ban_Id','desc')->where('ban_view',1)->limit($count)->select();
    }

}