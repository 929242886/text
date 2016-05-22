<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="/Public/style/css/style2.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<img border='0' src='/Public/images/background.jpg' width='100%' height='100%' style='position: absolute;left:0px;top:0px;z-index: -1'>
  <section class="container">
<center><img src="/Public/images/logo.png" alt="" width="350px"></center>
    <div class="login">
      <h1>企业登陆</h1>
      <form method="post" action="/index.php/Home/Login/loginok">
        <p><input type="text" name="e_phone" value="<?php if($_COOKIE['name']!=''){echo $_COOKIE['name'];} ?>" placeholder="手机号"></p>
        <p><input type="password" name="e_pwd" value="<?php if($_COOKIE['pwd']!=''){echo $_COOKIE['pwd'];} ?>" placeholder="密码"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me" <?php if($_COOKIE['pwd']!=''){ echo checked; } ?>>
            记住密码
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="register">没有账号去注册！！</a>
        </p>
        <p class="submit"><input type="submit" name="commit" value="登录"></p>
      </form>
    </div>

    <div class="login-help">
      <p>忘记密码? <a href="index.html">点击修改</a>.</p>
    </div>
  </section>
<div style="text-align:center;">
</div>
</body>
</html>