<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/TP3/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/TP3/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/TP3/Public/admin/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="/TP3/Public/admin/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/TP3/Public/admin/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/TP3/Public/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
    <div class="sidebar-title">
        <h1>菜单</h1>
    </div>
    <div class="sidebar-content">
        <ul class="sidebar-list">
            <li>
                <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                <ul class="sub-menu">
                    <li><a href="/TP3/index.php/Admin/Article/lst"><i class="icon-font">&#xe008;</i>文章管理</a></li>
                    <li><a href="/TP3/index.php/Admin/Cate/lst"><i class="icon-font">&#xe005;</i>分类管理</a></li>
                    <li><a href="/TP3/index.php/Admin/Link/lst"><i class="icon-font">&#xe004;</i>友情链接</a></li>
                    <li><a href="design.html"><i class="icon-font">&#xe052;</i>管理员管理</a></li>

                </ul>
            </li>

        </ul>
    </div>
</div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">
            </i><a href="/jscss/admin/design/">首页</a>
                <span class="crumb-step">&gt;</span>
                <a class="crumb-name" href="/jscss/admin/design/">文章管理</a>
                <span class="crumb-step">&gt;</span><span>新增文章</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>文章标题：</th>
                            <td>
                                <input class="common-text required" id="title" name="title" size="50" value="<?php echo ($articler["title"]); ?>" type="text">
                            </td>
                        </tr>


                        <tr>
                            <th><i class="require-red">*</i>文章描述：</th>
                            <td>
                                <textarea style="width:420px;height: 120px;" id="desc" name="desc"><?php echo ($articler["desc"]); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>缩略图</th>
                            <td>
                                <input class="" id="pic" name="pic" type="file"/>
                                <?php if($articler['pic'] != ''): ?><img src="/TP3<?php echo ($articler["pic"]); ?>" height="120px" width="120px">

                                    <?php else: ?>
                                    无缩略图<?php endif; ?>
                            </td>

                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>所属分类</th>
                            <td>
                                <select name="cateid">
                                    <option>选择分类</option>
                                    <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($vo["id"] == $articler.cateid): else: ?>selected = "selected"<?php endif; ?>
                                        value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th><i class="require-red">内容</i></th>
                            <td>
                                <textarea name="content" id="content"><?php echo ($articler["content"]); ?></textarea>
                            </td>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>

<script type="text/javascript">

    UE.getEditor('content',{initialFrameWidth:1000,initialFrameHeight:200,});


</script>
</body>
</html>