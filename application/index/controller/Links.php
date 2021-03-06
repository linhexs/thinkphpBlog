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
use app\index\model\Link as LinkModel;
use think\Controller;

class Links extends Controller
{
    /**
     * 友情链接
     * @return mixed
     */
    public function index()
    {
        $resByLinks = model('Link')->order('link_id asc')->select();
        return $this->fetch('',[
            'resByLinks'=>$resByLinks
        ]);

    }
}