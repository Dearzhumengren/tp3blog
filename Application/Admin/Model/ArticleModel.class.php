<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/29
 * Time: 15:54
 */
namespace Admin\Model;

use Think\Model;

class ArticleModel extends Model
{
    protected $_validate = array(

        array('title','require','文章标题不能为空！',1,'regex',3),
        array('cateid','require','栏目不能为空！',1,'regex',3),
        array('content','require','内容不能为空！',1,'regex',3),
    );
}

