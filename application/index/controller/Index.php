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
use app\index\controller\Base;
use app\index\model\Article as ArticleModel;
use app\index\model\Tip as TipModel;
use think\Controller;

class Index extends Controller
{
    /**
     * 首页
     * @return mixed
     */
    public function index()
    {
		$res = model('Article')->getIndexArticle(10);
        $resByLinks = model('Link')->order('link_id asc')->select();
        $hit = model('Article')->getHit(6);
        $resBanner = model('Banner')->getIndexBanner(2);
        $menuName = model('menu')->column('menu_id,menu_name');
        return $this->fetch('',[
            'resByLinks'=>$resByLinks,
            'hit'=>$hit,
            'res'=>$res,
            'resBanner'=>$resBanner,
            'menuName'=>$menuName
        ]);
    }
}
