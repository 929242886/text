<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
</script><script type="text/javascript" async="" src="/Public/styles/js/conversion.js"></script><script src="/Public/styles/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css"></style>
<meta content="no-siteapp" http-equiv="Cache-Control">
<link  media="handheld" rel="alternate">
<!-- end 云适配 -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>用户中心</title>
<meta content="23635710066417756375" property="qc:admins">
<meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
<meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
<meta content="QIQ6KC1oZ6" name="baidu-site-verification">
<style type="text/css">
table.imagetable {
    font-family: verdana,arial,sans-serif;
    font-size:11px;
    color:#333333;
    border-width: 1px;
    border-color: #999999;
    border-collapse: collapse;
    width: 400px;
    height: 50px;
}
table.imagetable th {
    /*background:#b5cfd2 url('cell-blue.jpg');*/
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #999999;
}
table.imagetable td {
    /*background:#dcddc0 url('cell-grey.jpg');*/
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #999999;
}
</style>

<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link href="h/images/favicon.ico" rel="Shortcut Icon">
<link href="/Public/styles/css/style.css" type="text/css" rel="stylesheet">
<link href="/Public/styles/css/external.min.css" type="text/css" rel="stylesheet">
<link href="/Public/styles/css/popup.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/Public/styles/js/jquery.1.10.1.min.js"></script>
<script src="/Public/styles/js/jquery.lib.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/styles/js/ajaxfileupload.js"></script>
<script src="/Public/styles/js/additional-methods.js" type="text/javascript"></script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="/Public/styles/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script src="/Public/styles/js/conv.js" type="text/javascript"></script>
<script src="/Public/styles/js/ajaxCross.json" charset="UTF-8"></script></head>
<body>
<div id="body">
	<div id="header">
    	<div class="wrapper">
    		<a class="logo" href="/index.php">
    			<img width="229" height="43" alt="拉勾招聘-专注互联网招聘" src="/Public/styles/images/logo.png">
    		</a>
    		<ul id="navheader" class="reset">
    			<li><a href="index.html">轻轻松松找人才</a></li>
	    	</ul>
        	        	<dl class="collapsible_menu">
            	<dt>
           			<span>jason&nbsp;</span> 
            		<span class="red dn" id="noticeDot-1"></span>
            		<i></i>
            	</dt>
                                	<dd><a href="positions.html">我发布的职位</a></dd>
                	<dd><a href="positions.html">我收到的简历</a></dd>
                	<dd class="btm"><a href="myhome.html">我的公司主页</a></dd>
                	<dd><a href="list.html">我要找工作</a></dd>
                                                <dd><a href="accountBind.html">帐号设置</a></dd>
                                <dd class="logout"><a rel="nofollow" href="login.html">退出</a></dd>
            </dl>
                                </div>
    </div><!-- end #header -->
    <div id="container">
        	<div class="user_bindSidebar">
    <dl id="user_sideBarmenu" class="user_sideBarmenu">
     	         <dt><h3><h4><font color='#6666ff'><a href="/index.php">首页</a>>用户中心>我的账号</font></h4></h3></dt>
     	        <dd><a class="hover" href="/index.php/Home/Usercenter/index">我的简历</a></dd>
                <dd><a href="/index.php/Home/Usercenter/invite">收到邀请</a></dd>
        		<dd><a href="/index.php/Home/Usercenter/simulation">模拟面试记录</a></dd>
            </dl>
</div>
<input type="hidden" id="hasSidebar" value="1">	<div class="content user_modifyContent">
        <dl class="c_section">
            <dd>
        <table class="imagetable">
            <tr>
                <th>阶段学习</th>
                <th>姓名</th>
                <th>面试情况</th>
                <th>考试评价</th>
            </tr>
           <?php foreach ($list as $key => $value): ?>
            <tr>
            
                <td><?php echo $value['month']?></td>
                <td><?php echo $value['u_name']?></td>
                <td><?php echo $value['e_situation']?></td>
                <td><?php echo $value['e_evaluate']?></td>
            
            </tr>
            <?php endforeach ?>
          
        </table>
  <div><?php echo ($page); ?>共<?php echo ($count); ?>条数据</div>
		   </dd>
        </dl>
    </div>

   
   	
			<div class="clear"></div>
			<input type="hidden" value="" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<div id="footer">
		<div class="wrapper">
			<a rel="nofollow" target="_blank" href="h/about.html">联系我们</a>
		    <a target="_blank" href="h/af/zhaopin.html">互联网公司导航</a>
		    <a rel="nofollow" target="_blank" href="http://e.weibo.com/lagou720">拉勾微博</a>
		    <a rel="nofollow" href="javascript:void(0)" class="footer_qr">拉勾微信<i></i></a>
			<div class="copyright">&copy;2013-2014 Lagou <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">京ICP备14023790号-2</a></div>
		</div>
	</div>

<script src="/Public/styles/js/core.min.js" type="text/javascript"></script>
<script src="/Public/styles/js/popup.min.js" type="text/javascript"></script>

<!--  -->


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>