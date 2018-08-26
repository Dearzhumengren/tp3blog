<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3
 * Time: 8:51
 */
namespace Admin\Model;

use Think\Model\ViewModel;

class ArticleViewModel extends ViewModel
{
    public $viewFields = array(

        'Article'=>array('id','title','pic','_type'=>'LEFT'),
        'Cate'=>array('catename','_on'=>'Article.cateid=cate.id'),

    );


}
