<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/08/17
 * Time: 下午 4:44
 */

namespace app\admin\controller;


use think\Controller;

class Login extends Controller
{
    public function index(){
        $account = session('loginAccount');
        if($account){
            return $this->redirect(url('admin/index/index'));
        }
        return $this->fetch();
    }
    public function login(){
            $res = $this->request->param();
            if (!$res['username']) {
                return "<script>alert('帐号不能为空');window.location.href='/admin/login/index'</script>";
            }
            if (!$res['pwd']) {
                return "<script>alert('密码不能为空');window.location.href='/admin/login/index'</script>";
            }
            $account = model('Account')
                ->where('username', $res['username'])
                ->find();
            if ($account['pwd'] != $res['pwd']) {
                return "<script>alert('密码错误');window.location.href='/admin/login/index'</script>";
            }
            session('loginAccount', $res);
            return "<script>alert('登录成功');window.location.href='/admin/index/index'</script>";

    }
    public function logout(){
        session('loginAccount',null);
        return $this->redirect(url('admin/login/index'));
    }

}