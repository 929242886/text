 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>属于自己空间记忆</title>
<meta name="keywords" content="emlog" />
<meta name="description" content="属于自己空间" />
<meta name="generator" content="emlog" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../emlog/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../emlog/wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="../emlog/rss.php" />
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
    <h1><a href="">属于自己空间记忆</a></h1>
    <h3>属于自己空间</h3>
  </div>
    <div id="banner"><a href=""><img src="./common/images/default.jpg" height="134" width="960" /></a></div>
    <div id="nav">	<ul class="bar">
    {foreach from=$arr item=v}
			<li class="item current">
		{if $v.isdefault eq y}
            <a href="{$v.url}" >{$v.naviname}</a>
         {else}
         
         {/if}
			
		</li>
	{/foreach}
		</ul>
</div><div id="content">
<div id="contentleft">
 {foreach from=$arr2 item=v}
	<p class="date"><img src="./common/images/8492d8d3d637532702041248507a30c2.jpg" width="20px" height="20px" />{date('Y-m-d',$v.date)}<a href="index.php?c=admin&a=user" >席宏峰</a> 
		</p>
	{$v.content}	<p class="tag"></p>
	<p class="count">
	 {/foreach}
	</p>
	<div style="clear:both;"></div>
<div id="pagenavi">
	</div>
</div><!-- end #contentleft-->
<ul id="sidebar">
	<li>
	<h3><span>日历</span></h3>
	<div id="calendar">
	</div>
	<script>sendinfo('../emlog/?action=cal','calendar');</script>
	</li>
	<li>
	<li>
	<h3><span>链接</span></h3>
	 {foreach from=$arr3 item=v}
		<li>
		{if $v.taxis eq 1}
           <a href="{$v.siteurl}" title="{$v.description}" target="_blank">{$v.sitename}</a>
         {else}
         
         {/if}
         </li>
		 	{/foreach}
	</li>
	<li>
</ul><!--end #siderbar-->
</div><!--end #content-->
<div style="clear:both;"></div>
<div id="footerbar">
	Powered by <a href="http://www.emlog.net" title="采用emlog系统">emlog</a> 
	<a href="http://www.miibeian.gov.cn" target="_blank"></a> 	</div><!--end #footerbar-->
</div><!--end #wrap-->
<script>prettyPrint();</script>
</body>
</html>