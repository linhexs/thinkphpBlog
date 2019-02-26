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
namespace app\index\controller;
use think\Controller;
use think\Request;

class Article extends Controller
{
    /**
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * 文章列表
     */
    public function lists()
    {
        $id = Request::instance()->param();
        $hit = model('Article')->getHit(6);
        $art=[];
        if (!empty($id['keyboard'])) {
            $art['art_title'] = ['like', '%' . $id['keyboard'] . '%'];
        }
        $data = [
            'menu_parent' => 0,
            'menu_view' => 1
        ];
        $resByMenu = model('Menu')->where($data)->select();
        $menuName = model('Menu')->column('menu_id,menu_name');
        if (!empty($id['id'])){
            $resByList = model('Article')->where('art_pid', $id['id'])->order('art_id desc')->paginate(10);
        }else {
            $resByList = model('Article')->where($art)->order('art_id desc')->paginate(10);
        }
        return $this->fetch('',[
            'hit'=>$hit,
            'resByMenu'=>$resByMenu,
            'resByList'=>$resByList,
            'menuName'=>$menuName,
            'id'=>$id
        ]);

    }

}
