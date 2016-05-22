<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
<script id="allmobilize" charset="utf-8" src="/Public/style/js/allmobilize.min.js"></script>
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
<link rel="stylesheet" type="text/css" href="/Public/style/css/style.css"/>
<link rel="stylesheet" type="text/css" href="/Public/style/css/lian.css"/>
<link rel="stylesheet" type="text/css" href="/Public/style/css/external.min.css"/>
<link rel="stylesheet" type="text/css" href="/Public/style/css/popup.css"/>
<script src="/Public/style/js/jquery.1.10.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/style/js/jquery.lib.min.js"></script>
<script src="/Public/style/js/ajaxfileupload.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/style/js/additional-methods.js"></script>
<!--[if lte IE 8]>
<script type="text/javascript" src="style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script type="text/javascript" src="/Public/style/js/conv.js"></script>
</head>
<body>
<div id="body">
<div id="header">
<div class="wrapper">
<a href="index.html" class="logo">
<img src="/Public/style/images/logo.png" width="150" height="50" alt="企聘网" />
</a>
<ul class="reset" id="navheader">
<li ><a href="">首页</a></li>
<li><a href="/index.php/Home/Company/index">找人才</a></li>
<li><a href="personal.html">个人中心</a></li>
</ul>
<ul class="loginTop">
<li><a href="login.html" rel="nofollow">用户登陆</a></li> 
<li>|</li>
<li><a href="/index.php/Home/Login/index" rel="nofollow">企业登陆</a></li>
</ul>
</div>
</div><!-- end #header -->



<div id="container">

<div class="clearfix">
<div class="content_l">
<form id="companyListForm" name="companyListForm" method="get" action="/index.php/Home/Index/index">
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

<div id="banner">
		<h1>项目经理</h1>
			<ul class="hc_list reset">
		<?php foreach($resumeoneall as $k => $v): ?>
				<li  style="<?php if($k < 1){ ?>echo 'clear:both;'<?php }?>" >
					<a href="/index.php/Home/Resume/index?r_id=<?php echo $v['r_id']?>" target="_blank">
					<h3 title="<?php echo $v['r_name']?>"><?php echo $v['r_name']?></h3>
					<div class="comLogo">
					<img src="/Public/images/grass.jpg" width="190" height="190" alt="<?php echo $v['r_name']?>" />
					</div>
					</a>
					<a href="/index.php/Home/Resume/index?r_id=<?php echo $v['r_id']?>" target="_blank">环境监测工程师</a>
					<ul class="reset ctags">
						<li><?php echo $v['r_school']?></li>
					</ul>
				</li>
		 <?php endforeach ?>
		 <a href="/index.php/Home/Index/index?pid=1">更多....</a>
</div>
   <div id="banner_center">
			<h1>产品经理</h1>
			<ul class="hc_list reset">
		<?php foreach($resumetwoall as $k => $v): ?>
				<li  style="<?php if($k < 1){ ?>echo 'clear:both;'<?php }?>" >
					<a href="/index.php/Home/Resume/index?r_id=<?php echo $v['r_id']?>" target="_blank">
					<h3 title="<?php echo $v['r_name']?>"><?php echo $v['r_name']?></h3>
					<div class="comLogo">
					<img src="/Public/images/grass.jpg" width="190" height="190" alt="<?php echo $v['r_name']?>" />
						
					</div>
					</a>
					<a href="/index.php/Home/Resume/index?r_id=<?php echo $v['r_id']?>" target="_blank"> 环境监测工程师</a>
					<ul class="reset ctags">
						<li><?php echo $v['r_school']?></li>
					</ul>
				</li>
		 <?php endforeach ?>
		 <a href="/index.php/Home/Index/index?pid=2">更多....</a>
   </div>
<div id="banner_buttom">
			<h1>高级程序员</h1>
			<ul class="hc_list reset">
		<?php foreach($resumethreeall as $k => $v): ?>
				<li  style="<?php if($k < 1){ ?>echo 'clear:both;'<?php }?>" >
					<a href="/index.php/Home/Resume/index?r_id=<?php echo $v['r_id']?>" target="_blank">
					<h3 title="<?php echo $v['r_name']?>"><?php echo $v['r_name']?></h3>
					<div class="comLogo">
					<img src="/Public/images/grass.jpg" width="190" height="190" alt="<?php echo $v['r_name']?>" />
						
					</div>
					</a>
					<a href="/index.php/Home/Resume/index?r_id=<?php echo $v['r_id']?>" target="_blank"> 环境监测工程师</a>
					<ul class="reset ctags">
						<li><?php echo $v['r_school']?></li>
					</ul>
				</li>
		 <?php endforeach ?>
		 <a href="/index.php/Home/Index/index?pid=3">更多....</a>
   </div>

</ul>

</div>	

</div>

<input type="hidden" value="" name="userid" id="userid" />

<script type="text/javascript" src="/Public/style/js/company_list.min.js"></script>
<script>
$(function(){
/*分页 */
$('.Pagination').pager({
currPage: 1,
pageNOName: "pn",
form: "companyListForm",
pageCount: 20,
pageSize: 5
});	
})
</script>       	
<div class="clear"></div>
<input type="hidden" id="resubmitToken" value="" />
<a id="backtop" title="回到顶部" rel="nofollow"></a>
</div><!-- end #container -->
</div><!-- end #body -->
<div id="footer">
<div class="wrapper">
<a href="h/about.html" target="_blank" rel="nofollow">联系我们</a>
<a href="h/af/zhaopin.html" target="_blank">互联网公司导航</a>
<a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
<a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>
<div class="copyright">&copy;2013-2014 Lagou <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">京ICP备14023790号-2</a></div>
</div>
</div>
<!--  -->
</body>
</html>
<script type="text/javascript" src="/Public/style/js/core.min.js"></script>
<script type="text/javascript" src="/Public/style/js/popup.min.js"></script>
<script type="text/javascript">
$(function(){
        $("#menu_list li").click(function(){
                $(this).addClass ("hoverbg").removeClass("hoverbg");
        })
</script>