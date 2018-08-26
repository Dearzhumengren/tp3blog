<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $articler = D('article');
        $count= $articler->count();
        $Page = new \Think\Page($count,8);
        $show = $Page->show();
        $list = $articler
            ->order('time desc')
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();

        $this->assign('list',$list);
        $this->assign('show',$show);

        $this->display();
    }
}