<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/08/12
 * Time: 下午 2:03
 */

namespace app\index\controller;


use think\Controller;
use think\Request;

class Detail extends  Controller
{
    /**
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * 文章详情
     */
    public function index(){
        $id = Request::instance()->param();
        $data = [
            'art_id'=>$id['id']
        ];
        $resByInfo = model('Article')->where($data)->order('art_id desc')->find();
        $front= model('Article')->where(("art_id<".$id['id']))->order('art_id desc')->find();
        $after= model('Article')->where(("art_id>".$id['id']))->order('art_id desc')->find();
        $menuName = model('menu')->column('menu_id,menu_name');
        return $this->fetch('',[
                'resByInfo'=>$resByInfo,
                'front'=>$front,
                'after'=>$after,
                'menuName'=>$menuName
            ]
        );
    }
    public function updateView(){
        $id = Request::instance()->param();
        $book_info = model('Article')->where([ 'art_id' => $id['id'] ])->find();
        $book_info->art_hit += 1;
        $book_info->save();
    }

}