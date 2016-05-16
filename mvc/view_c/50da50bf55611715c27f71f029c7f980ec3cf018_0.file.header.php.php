<?php
/* Smarty version 3.1.29, created on 2016-05-03 22:12:07
  from "E:\phpstudy\WWW\mvc\view\index\header.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5728b1b78bf355_05210482',
  'file_dependency' => 
  array (
    '50da50bf55611715c27f71f029c7f980ec3cf018' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\index\\header.php',
      1 => 1462284725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5728b1b78bf355_05210482 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>张昕</title>

<meta name="keywords" content="emlog" />

<meta name="description" content="使用emlog搭建的站点" />

<meta name="generator" content="emlog" />

<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/src/xmlrpc.php?rsd" />

<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost/src/wlwmanifest.xml" />

<link rel="alternate" type="application/rss+xml" title="RSS"  href="http://localhost/src/rss.php" />

<link href="./common/css/main.css" rel="stylesheet" type="text/css" />

<link href="./common/css/prettify.css" rel="stylesheet" type="text/css" />

<?php echo '<script'; ?>
 src="./common/js/prettify.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="./common/js/common_tpl.js" type="text/javascript"><?php echo '</script'; ?>
>

<!--[if IE 6]>

<?php echo '<script'; ?>
 src="js/iefix.js" type="text/javascript"><?php echo '</script'; ?>
>

<![endif]-->

</head>

<body>

<div id="wrap">

  <div id="header">

    <h1><a href="http://localhost/src/"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</a></h1>

    <h3><?php echo $_smarty_tpl->tpl_vars['user']->value['autograph'];?>
</h3>

  </div>

    <div id="banner"><a href="http://localhost/src/"><img src="./common/images/default.jpg" height="134" width="960" /></a></div>

    <div id="nav">	<ul class="bar">
			
			<li class="item current">
			<a href="index.php" >首页</a>
		</li>
			<li class="item common">
			<a href="?a=twitter&c=index" >微语</a>
		</li>
		<?php if ($_SESSION['user'] == '') {?>

			<li class="item common">
			<a href="admin.php" >登录</a>    
		</li>
		<?php } else { ?>
		<li class="item common">
			<a href="admin.php?c=login&a=home" >管理站点</a>    
		</li>
		<li class="item common">
			<a href="admin.php?a=back&c=login" >退出</a>    
		</li>
		<?php }?>
		</ul>
</div><div id="content"><?php }
}
