<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8" />




<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta http-equiv="Content-Language" content="zh-CN" />

<meta name="author" content="emlog" />

<meta name="robots" content="noindex, nofollow">

<meta http-equiv="X-UA-Compatible" content="IE=8" />

<title>管理中心 - 点滴记忆</title>

<link href="./common/css/style.css?v=5.3.1" type=text/css rel=stylesheet>

<link href="./common/css/css-main.css?v=5.3.1" type=text/css rel=stylesheet>

<script type="text/javascript" src="./common/js/jquery-1.7.1.js?v=5.3.1"></script>

<script type="text/javascript" src="./common/js/plugin-cookie.js?v=5.3.1"></script>

<script type="text/javascript" src="./common/js/common.js?v=5.3.1"></script>

<script type="text/javascript" src="./common/edit/ckeditor/ckeditor.js"></script>

<script type="text/javascript" src="./common/edit/ckeditor/ckfinder/ckfinder.js"></script>

</head>

<body>

<div id="mainpage">

<div id="header">

    <div id="header_left"></div>

    <div id="header_logo"><a href="index.php" target="_blank" title="返回管理首页">zhangxin</a></div>

    <div id="header_title">

    <a href="index.php" target="_blank" title="在新窗口浏站点">

    点滴记忆    </a>

    </div>

    <div id="header_right"></div>

    <div id="header_menu">

    <a href="./blogger.php" title="">

{if $smarty.session.user.img}
    <a href="?a=translate&c=login&id={$smarty.session.user.id}"><img src="{$smarty.session.user.img}" align="top" width="20" height="20" /></a>
{else}
 <script> 
alert('请先登录');
window.location.href='admin.php';
</script>
 {/if}
        
    
    </a><span>|</span>

        <a href="?a=user&c=login"> 设置</a><span>|</span>

		<a href="?a=back&c=login">退出</a>

    </div>

</div>

<div id="side">

	<div id="sidebartop"></div>

    <div id="log_mg">

		<li class="sidebarsubmenu" id="menu_wt"><a href="?a=index&c=article"><span class="ico16"></span>写文章</a></li>

		<li class="sidebarsubmenu" id="menu_draft">

    	<a href="?a=article_all&c=caogao">草稿<span id="dfnum">

				</span></a></li>

		<li class="sidebarsubmenu" id="menu_log"><a href="?a=article_all&c=article">文章</a></li>

         <li class="sidebarsubmenu" id="menu_tag"><a href="?a=index&c=tag">标签</a></li>

        <li class="sidebarsubmenu" id="menu_sort"><a href="?a=article_type&c=article">分类</a></li>

    	        <li class="sidebarsubmenu" id="menu_cm"><a href="?a=index&c=comment">评论</a> </li>

   				        <li class="sidebarsubmenu" id="menu_tw"><a href="?a=index&c=twitter">微语</a></li>

    	

   	 	<li class="sidebarsubmenu" id="menu_navbar"><a href="?a=index&c=nav" >导航</a></li>


    	<li class="sidebarsubmenu" id="menu_link"><a href="?a=index&c=link">链接</a></li>
    
    	<li class="sidebarsubmenu" id="menu_user"><a href="?a=user&c=login" >用户</a></li>

        		    </div>

        <div id="extend_mg">

		    </div>

    	<div id="sidebarBottom"></div>

</div>

<div id="container">

<script>

<!--边栏折叠-->

$("#extend_mg").css('display', $.cookie('em_extend_mg') ? $.cookie('em_extend_mg') : '');

if ($.cookie('em_extend_ext')) {

	$("#menu_ext a").removeClass().addClass($.cookie('em_extend_ext'));

}
$("#menu_ext").toggle(

      function () {

        displayToggle('extend_mg', 1)

        exClass = $(this).find("a").attr("class") == "menu_ext_plus" ? "menu_ext_minus" : "menu_ext_plus";

        $(this).find("a").removeClass().addClass(exClass);


      },

      function () {

        displayToggle('extend_mg', 1)

        exClass = $(this).find("a").attr("class") == "menu_ext_plus" ? "menu_ext_minus" : "menu_ext_plus";

        $(this).find("a").removeClass().addClass(exClass);


      }


</script>