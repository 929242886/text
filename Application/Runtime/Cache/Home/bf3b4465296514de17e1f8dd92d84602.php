<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
<script id="allmobilize" charset="utf-8" src="/text/Public/style/js/allmobilize.min.js"></script>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<!-- end 云适配 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>企聘王</title>
<meta property="qc:admins" content="23635710066417756375" />
<meta content="全国condition-condition-公司列表-拉勾网-最专业的互联网招聘平台" name="description">
<meta content="全国condition-公司列表-拉勾网-最专业的互联网招聘平台" name="keywords">
<meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link rel="Shortcut Icon" href="h/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="/text/Public/style/css/style.css"/>
<link rel="stylesheet" type="text/css" href="/text/Public/style/css/lian.css"/>
<link rel="stylesheet" type="text/css" href="/text/Public/style/css/external.min.css"/>
<link rel="stylesheet" type="text/css" href="/text/Public/style/css/popup.css"/>
<script src="/text/Public/style/js/jquery.1.10.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/text/Public/style/js/jquery.lib.min.js"></script>
<script src="/text/Public/style/js/ajaxfileupload.js" type="text/javascript"></script>
<script type="text/javascript" src="/text/Public/style/js/additional-methods.js"></script>
<!--[if lte IE 8]>
<script type="text/javascript" src="style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script type="text/javascript" src="/text/Public/style/js/conv.js"></script>
</head>
<body>
<div id="body">
<div id="header">
<div class="wrapper">
<a href="index.html" class="logo">
<img src="/text/Public/style/images/logo.png" width="150" height="50" alt="企聘网" />
</a>
<ul class="reset" id="navheader">
<li ><a href="">首页</a></li>
<li><a href="/text/index.php/Home/Company/index">找人才</a></li>
<li><a href="/text/index.php/Home/Usercenter/index">用户中心</a></li>
</ul>
<ul class="loginTop">
<li><a href="/text/index.php" rel="nofollow">用户登陆</a></li> 
<li>|</li>
<li><a href="/text/index.php/Home/Login/index" rel="nofollow">企业登陆</a></li>
</ul>
</div>
</div><!-- end #header -->



<div id="container">

<div class="clearfix">
<div class="content_l">
<form id="companyListForm" name="companyListForm" method="get" action="/text/index.php/Home/Index/index">
<dl class="hc_tag">
<dd>
<dl>
<dt>面试职位:</dt>
<dd id="aa">
     <a href="javascript:void(0)" class="moren">不限</a>
     <?php if(is_array($positionall)): foreach($positionall as $key=>$p): ?><a href="javascript:void(0)"><?php echo ($p["p_name"]); ?></a><?php endforeach; endif; ?>
</dd>
</dl>
<dl>
<dt>工作经验：</dt>
<dd id="bb">
<a href="javascript:void(0)" class="moren">不限</a>
<?php if(is_array($experienceall)): foreach($experienceall as $key=>$e): ?><a href="javascript:void(0)"><?php echo ($e["e_year"]); ?></a><?php endforeach; endif; ?>
    </dd>
</dl>
<dl>
<dt>期望薪资：</dt>
<dd id="cc">
<a href="javascript:void(0)" class="moren">不限</a>
<?php if(is_array($moneyall)): foreach($moneyall as $key=>$m): ?><a href="javascript:void(0)"><?php echo ($m["m_money"]); ?></a><?php endforeach; endif; ?>
</dd>
</dl>
</dd>
</dl>
	<div class="bodys">
		<p>
		<input type="text" value="" id="" placeholder="输入关键字" />
		<input type="submit" name="sou" value="搜全站"/>
		<input type="submit" name="sou1" value="搜本类"/>
		</p>
	</div>
</form>

<h3>
	<span>共找到2个符合条件的简历</span>
	<span>排序</span>
	<a href="">大图模式</a>
	<a href="">列表模式</a>
</h3>
<table>
<?php if(is_array($positionRows)): foreach($positionRows as $key=>$p): ?><tr>
		<td><img src="/text/Public/images/<?php echo ($p["r_img"]); ?>" alt="" width="150px;" height="130px;"/></td>
		<td><?php echo ($p["r_name"]); ?></td>
		<td>创建时间:<?php echo ($p["r_addtime"]); ?></td>
	</tr><?php endforeach; endif; ?>
</table>