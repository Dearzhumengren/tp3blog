<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3
 * Time: 19:13
 */
namespace Home\Controller;
use Think\Controller;

class ArticleController extends CommonController
{
    public function index()
    {

        $artres = D('article')->find(I('id'));
        $this->assign('artres',$artres);

        $this->catename($artres['cateid']);
        $this->display();
    }

    public function catename($cateid)
    {
        $cates = D('cate')->find($cateid);
        $this->assign('catename',$cates);
    }

}