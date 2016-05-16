<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="./common/css/css-login.css?v=5.3.1" type="text/css" media="screen" /> 

<script type="text/javascript" src="./common/js/common.js?v=5.3.1"></script>

<title>登录</title>

</head>

<body>

<form name="f" method="post" action="?a=index&c=login">

<div class="login-main">

  <div class="login-top"></div>

  <div class="login-logo"><a href="http://www.emlog.net" target="_blank"><img src="./common/images/login_logo.png" alt="emlog" width="294" height="68" /></a></div>

  <div class="login-input">
  {if $re}
    <span>用户名</span>
  
    <div><input type="text" name="user" id="user" value="{$re}"/></div>

    <span>密码</span>

    <div><input type="password" name="pwd" id="pw" value="{$pwd}"/></div>
    {else}
    <span>用户名</span>
  
    <div><input type="text" name="user" id="user" /></div>

    <span>密码</span>

    <div><input type="password" name="pwd" id="pw" /></div>
    {/if}

      </div>

  <div class="login-button">

  <div class="checkbox"> <input type="checkbox" name="ispersis" id="ispersis"  /><span><label for="ispersis">记住我</label></span></div>

  <div class="button"><input type="submit" value=" 登 录" class="submit"></div>

  </div>

  <div style=" clear:both;"></div>

  <div class="login-ext"></div>

  <div class="login-bottom"></div>

  <div class="back"><a href="index.php">&laquo;返回首页</a> | <a href="http://wiki.emlog.net/doku.php?id=chpwd" target="_blank">忘记密码?</a></div>

</div>

</form>

<script>focusEle('user');</script>

</body>

</html>

