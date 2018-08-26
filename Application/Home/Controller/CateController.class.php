<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3
 * Time: 19:12
 */
namespace Home\Controller;
use Think\Controller;

class CateController extends CommonController
{
    public function index()
    {

        $articler = D('article');
        $count= $articler->where(array('cateid'=>I('id')))->count();
        $Page = new \Think\Page($count,2);
        $show = $Page->show();
        $list = $articler
            ->where(array('cateid'=>I('id')))
            ->order('time desc')
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();

        $this->assign('list',$list);
        $this->assign('show',$show);

        $this->display();
    }

}