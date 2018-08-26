<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/29
 * Time: 15:54
 */
namespace Admin\Model;

use Think\Model;

class CateModel extends Model
{
    protected $_validate = array(

        array('catename','require','添加栏目不能为空！',1,'regex',3),
        array('catename','','栏目名称不能重复',1,'unique','3')
    );
}

