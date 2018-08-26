<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/29
 * Time: 19:30
 */
namespace Admin\Controller;

use Think\Controller;

class ArticleController extends CommonController
{
    public function lst()
    {
        $article = D('ArticleView');
        $count = $article->count();

        $Page = new \Think\Page($count,3);
        $show = $Page->show();

        $list = $article
            ->order('id desc')
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();

        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }



    public function add()
    {
        $article = D("article");

        if(IS_POST){
            $data['title'] = I("title");
            $data['desc'] = I("desc");
            $data['cateid'] = I("cateid");
            $data['content'] = I("content");

            $data['time'] = time();
            if ($_FILES['pic']['tmp_name'] != ''){
                $upload = new \Think\Upload();
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =      './'; // 设置附件上传根目录
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传（子）目录

                // 上传文件
                $info   =   $upload->uploadOne($_FILES['pic']);

                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                   $data['pic'] = $info['savepath'].$info['savename'];
                }

            }else{


            }


            if ($article->create($data)){

                if($article->add()){
                    $this->success("添加文章成功！",U("lst"));
                }else{
                    $this->error("添加文章失败！");

                }
            }else{

                $this->error($article->getError());

            }


            return;

        }

        $cateres = D("cate")->select();

        $this->assign('cateres',$cateres);

        $this->display();
    }


    public function edit()
    {
        $article = D('article');

        if(IS_POST){
            $data['title'] = I("title");
            $data['desc'] = I("desc");
            $data['cateid'] = I("cateid");
            $data['content'] = I("content");

            if ($_FILES['pic']['tmp_name'] != ''){
                $upload = new \Think\Upload();
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =      './'; // 设置附件上传根目录
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传（子）目录

                // 上传文件
                $info   =   $upload->uploadOne($_FILES['pic']);

                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                    $data['pic'] = $info['savepath'].$info['savename'];
                }

            }else{


            }


            if ($article->create($data)){

                if($article->add()){
                    $this->success("修改文章成功！",U("lst"));
                }else{
                    $this->error("修改文章失败！");

                }
            }else{

                $this->error($article->getError());

            }


            return;

        }
        $articler = $article->find(I('id'));

        $this->assign('articler',$articler);

        $cateres = D('cate')->select();
        $this->assign('cateres',$cateres);

        $this->display();

    }


    public function del()
    {
        $article = D('article');

        if($article->delete(I('id'))){

            $this->success('删除文章成功！',U('lst'));
        }else{

            $this->error('删除文章失败！');
        }

    }


    public function sort()
    {

        $article = D('article');
        foreach($_POST as $id => $sort){

            $article->where(array('id'=>$id))->setField('sort',$sort);

        }

        $this->success("排序成功！",U("lst"));


    }
}