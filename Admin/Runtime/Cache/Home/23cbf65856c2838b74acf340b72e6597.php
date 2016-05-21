<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>项目后台管理系统</title>
<link rel="stylesheet" href="/xiangmu/text/Public/css/login.css" />
</head>

<body class="b">
<div class="lg">
<form action="/xiangmu/text/admin.php/Home/Index/dologin" method="POST">
    <div class="lg_top"></div>
    <div class="lg_main">
        <div class="lg_m_1">
        <input name="admin_name" value="" class="ur" />
        <input name="password" type="password" value="" class="pw" />
        
        </div>
    </div>
    <div class="lg_foot">
    <input type="submit" value="Login In" class="bn" /></div>
</form>
</div>

</body>
</html>