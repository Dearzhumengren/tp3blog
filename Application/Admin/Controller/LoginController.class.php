<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3
 * Time: 15:05
 */
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $admin = D('admin');
        if (IS_POST) {
            if ($admin->create($_POST,4)) {

                if ($admin->login()) {
                    $this->success('登录成功！', U('Index/index'));
                } else {
                    $this->error('您的用户名或者密码错误');
                }
            }
            else {

            $this->error($admin->getError());
        }

        return;
    }
        if(session('id')){

            $this->error('你已经登录过了！',U('Index/index'));
        }else{

            $this->display('login');
        }



    }

    public function verify()
    {
        $Verify =     new \Think\Verify();
        $Verify->fontSize = 30;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->entry();
    }
}