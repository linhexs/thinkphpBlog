<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/08/12
 * Time: 下午 5:32
 */

namespace app\index\controller;


use think\Controller;

class Gbook extends Controller
{
    public function index(){
        return $this->fetch();
    }

}