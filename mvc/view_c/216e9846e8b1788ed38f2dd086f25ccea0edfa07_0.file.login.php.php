<?php
/* Smarty version 3.1.29, created on 2016-05-03 10:46:39
  from "E:\phpstudy\WWW\mvc\view\admin\login.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5728110f748666_53911458',
  'file_dependency' => 
  array (
    '216e9846e8b1788ed38f2dd086f25ccea0edfa07' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\admin\\login.php',
      1 => 1461986167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5728110f748666_53911458 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="./common/css/css-login.css?v=5.3.1" type="text/css" media="screen" /> 

<?php echo '<script'; ?>
 type="text/javascript" src="./common/js/common.js?v=5.3.1"><?php echo '</script'; ?>
>

<title>登录</title>

</head>

<body>

<form name="f" method="post" action="?a=index&c=login">

<div class="login-main">

  <div class="login-top"></div>

  <div class="login-logo"><a href="http://www.emlog.net" target="_blank"><img src="./common/images/login_logo.png" alt="emlog" width="294" height="68" /></a></div>

  <div class="login-input">
  <?php if ($_smarty_tpl->tpl_vars['re']->value) {?>
    <span>用户名</span>
  
    <div><input type="text" name="user" id="user" value="<?php echo $_smarty_tpl->tpl_vars['re']->value;?>
"/></div>

    <span>密码</span>

    <div><input type="password" name="pwd" id="pw" value="<?php echo $_smarty_tpl->tpl_vars['pwd']->value;?>
"/></div>
    <?php } else { ?>
    <span>用户名</span>
  
    <div><input type="text" name="user" id="user" /></div>

    <span>密码</span>

    <div><input type="password" name="pwd" id="pw" /></div>
    <?php }?>

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

<?php echo '<script'; ?>
>focusEle('user');<?php echo '</script'; ?>
>

</body>

</html>

<?php }
}
