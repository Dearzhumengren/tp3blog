<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link href="/TP3/Public/admin/css/admin_login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username" value="" id="user" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="password">密码：</label>
                        <input type="password" name="password" value="" id="password" size="35" class="admin_input_style" />
                    </li>

                    <li>
                        <label for="password">验证码：</label>
                        <input type="text" name="verify" value="" id="verify" size="15" class="admin_input_style" />
                        <img style="cursor:pointer" height="40" width="120" onclick="this.src='/TP3/index.php/Admin/Login/verify/'+Math.random();" src="/TP3/index.php/Admin/Login/verify">
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>