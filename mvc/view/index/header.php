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

<script src="./common/js/prettify.js" type="text/javascript"></script>

<script src="./common/js/common_tpl.js" type="text/javascript"></script>

<!--[if IE 6]>

<script src="js/iefix.js" type="text/javascript"></script>

<![endif]-->

</head>

<body>

<div id="wrap">

  <div id="header">

    <h1><a href="http://localhost/src/">{$user['name']}</a></h1>

    <h3>{$user['autograph']}</h3>

  </div>

    <div id="banner"><a href="http://localhost/src/"><img src="./common/images/default.jpg" height="134" width="960" /></a></div>

    <div id="nav">	<ul class="bar">
			
			<li class="item current">
			<a href="index.php" >首页</a>
		</li>
			<li class="item common">
			<a href="?a=twitter&c=index" >微语</a>
		</li>
		{if $smarty.session.user eq ''}

			<li class="item common">
			<a href="admin.php" >登录</a>    
		</li>
		{else}
		<li class="item common">
			<a href="admin.php?c=login&a=home" >管理站点</a>    
		</li>
		<li class="item common">
			<a href="admin.php?a=back&c=login" >退出</a>    
		</li>
		{/if}
		</ul>
</div><div id="content">