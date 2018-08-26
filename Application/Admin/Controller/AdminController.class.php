<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3
 * Time: 10:02
 */
namespace Admin\Controller;
use Think\Controller;

class AdminController extends CommonController
{

    public function lst()
    {
        $admin = D('Admin');
        $count = $admin->count();

        $Page = new \Think\Page($count,3);
        $show = $Page->show();

        $list = $admin
            ->order('id desc')
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();

        $this->assign('adminres',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }


    public function add()
    {
        $admin = D('admin');
        if(IS_POST){
            $data['username'] = I('username');
            $data['password'] = md5(I('password'));

            if($admin->create($data)){

                if($admin->add()){

                    $this->success('添加管理员成功',U('lst'));
                }else{
                    $this->error('添加管理员失败');
                }
            }else{
                $this->error($admin->getError());
            }

            return;

        }

        $this->display();
    }


    public function del()
    {
        $admin = D('admin');

        $id = I('id');

        if($id==1){
            $this->error('本管理员不可删除！');
        }else{
            if($admin->delete(I('id'))){

                $this->success('删除文章成功！',U('lst'));
            }else{

                $this->error('删除文章失败！');
            }
        }

    }



    public function edit()
    {
        $admin = D('admin');

        if(IS_POST){
            $data['id'] = I('id');

            $data['username'] = I('username');
            $admins = $admin->find($data['id']);
            $password = $admins['password'];

            if(I('password')){

                $data['password'] = md5(I('password'));
            }else{

                $data['password'] = $password;

            }
            if ($admin->create($data)){

                if($admin->save()){
                    $this->success("修改管理员成功！",U("lst"));
                }else{
                    $this->error("修改管理员失败！");

                }
            }else{

                $this->error($admin->getError());

            }


            return;

        }

        $adminer = $admin->find(I('id'));
        $this->assign('adminer',$adminer);
        $this->display();


        }

        public function logout()
        {
            session(null);
            $this->success('退出成功',U('Login/index'));
        }



}
