<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
<script id="allmobilize" charset="utf-8" src="/Public/style/js/allmobilize.min.js"></script>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<!-- end 云适配 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>企聘网</title>
<meta property="qc:admins" content="23635710066417756375" />
<meta content="企聘网" name="description">
<meta content="企聘网" name="keywords">
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
    <link href="/Public/style/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/style/css/styles.css">
    <script src="/Public/style/js/bootstrap.min.js"></script>
    <script src="/Public/style/js/scripts.js"></script>
    <script src="/Public/style/js/unslider.min.js"></script>
<!--[if lte IE 8]>
<script type="text/javascript" src="style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script type="text/javascript" src="/Public/style/js/conv.js"></script>

  <style>
/*        .av1 {
    height: 88px;
    width: 88px;
    background: url() no-repeat;
    background-position:  0px 0px;
    margin: 10px auto;
    position: relative;
} */
       .av1 {
    height: 88px;
    width: 88px;
    background-position:  0px 0px;
    margin: 10px auto;
    position: relative;
}
.ca-hover:hover .av1 {
    background: url() no-repeat;
    background-position:  0px -88px;

}
body{
  width: 870px;
  }
  </style>
</head>
<body>
<div id="body">
<div id="header" style="padding-left:135px">
<div class="wrapper" >
<a href="index.html" class="logo">
<img src="/Public/images/logo.png" width="200" height="50" alt="企聘王招聘-专注互联网招聘" />
</a>
<ul class="reset" id="navheader">
<li ><a href="index.html">首页</a></li>
<li><a href="/index.php/Home/Company/index">找人才</a></li>
<li><a href="/index.php/Home/Usercenter/index">个人中心</a></li>
</ul>
<ul class="loginTop">
<li><a href="/index.php/Home/Login/index" rel="nofollow">企业登陆</a></li>
</ul>
</div>
</div><!-- end #header -->





<div id="container">

<div class="clearfix">
<div class="content_l" style="width:870px">

<dl class="hc_tag" style="padding-left:94px">
<dd >
<dl>
<dt>发展阶段：</dt>
<dd>
    <a href="/index.php/Home/Index/index" class="moren">不限</a>
     <?php if(is_array($positionall)): foreach($positionall as $key=>$p): if(!empty($xz)){ ?>
      <a href="/index.php/Home/Index/index?zw=<?php echo ($p["p_name"]); ?>&xz=<?php echo ($xz); ?>"><?php echo ($p["p_name"]); ?></a>
    <?php }else{ ?>
      <a href="/index.php/Home/Index/index?zw=<?php echo ($p["p_name"]); ?>"><?php echo ($p["p_name"]); ?></a>
    <?php } endforeach; endif; ?>
</dd>
</dl>
<dl>
<dt>期望薪资：</dt>
<dd>
<a href="/index.php/Home/Index/index" class="moren">不限</a>
<?php if(is_array($moneyall)): foreach($moneyall as $key=>$m): if(!empty($zw)){ ?>
      <a href="/index.php/Home/Index/index?zw=<?php echo ($zw); ?>&xz=<?php echo ($m["m_money"]); ?>"><?php echo ($m["m_money"]); ?></a>
    <?php }else{ ?>
      <a href="/index.php/Home/Index/index?xz=<?php echo ($m["m_money"]); ?>"><?php echo ($m["m_money"]); ?></a>
    <?php } endforeach; endif; ?>
</dd>
</dl>
</dd>
<form action="/index.php/Home/Index/index" method="get">
<div>
  <input type="text" name="sou" id="keys" style="width:250px;height:25px;margin-left:47px;margin-top:5px;border:1px solid #0A8DD5;"><input type="submit" value="搜索" style="width:70px;height:30px;background:#0A8DD5;margin-left:5px;" id="searchkey">
</div>
</form>
</dl>

<div id="h1"><h1>项目经理<a href="/index.php/Home/Index/index?pid=1" id="gengs">更多..</a></h1>
</div>
<div id="banner">
  <!--              <div id="banner_left_left" style="width:110px"><a href="" style="marign-left:300px">项目经理</a></div> -->
			<div id="banner_left">
               <div id="banner_right_right">
               	 		<ul id="aa">
			<li >
   <?php if(is_array($resumeoneall)): foreach($resumeoneall as $key=>$p): ?><a href="/index.php/Home/Resume/index?r_id=<?php echo ($p["r_id"]); ?>">
        <div class="col-md-3">
        <div class="ca-hover">
          <div class="carousel-img">
          </div>
          <div class="carousel-avatar av1">
          <img style="width:110px; height:110px; border-radius:50%; overflow:hidden;" class="av1" src="/Public/images/<?php echo ($p["r_img"]); ?>" alt="">
          </div>
          <div class="carousel-content">
            <h3>姓名:<?php echo ($p["r_name"]); ?></h3>
            <p>添加时间:<?php echo ($p["r_addtime"]); ?></p>
          </div>
          <div class="overlay"></div>
        </div>
        </div>
        </a><?php endforeach; endif; ?>  
		</li>
		</ul>

        </div>
			</div>
</div>
<div id="main">
			<div id="main_left">
             <div id="h1"><h1 >产品经理<a href="/index.php/Home/Index/index?pid=2" id="gengs">更多..</a></h1></div>
               <div id="main_right_right">
               	 		<ul id="aa">
			<li >
      <?php if(is_array($resumetwoall)): foreach($resumetwoall as $key=>$p): ?><a href="/index.php/Home/Resume/index?r_id=<?php echo ($p["r_id"]); ?>">    
         <div class="col-md-3">
        <div class="ca-hover">
          <div class="carousel-img">
          </div>
          <div class="carousel-avatar av1">
         
          <img style="width:110px; height:110px; border-radius:50%; overflow:hidden;" class="av1" src="/Public/images/<?php echo ($p["r_img"]); ?>" alt="">
          
          </div>
          <div class="carousel-content">
            <h3>姓名:<?php echo ($p["r_name"]); ?></h3>
            <p>添加时间:<?php echo ($p["r_addtime"]); ?></p>
          </div>
          <div class="overlay"></div>
        </div>
        </div>
        </a><?php endforeach; endif; ?>

		</li>
		</ul>
               </div>
               
			</div>
   </div>

<div id="footers">
			<div id="footers_left">
               <div id="h1"><h1 >程序员<a href="/index.php/Home/Index/index?pid=3" id="gengs">更多..</a></h1></div>
               <div id="footers_right_right">
               	 		<ul id="aa">
			<li >
        <?php if(is_array($resumethreeall)): foreach($resumethreeall as $key=>$p): ?><a href="/index.php/Home/Resume/index?r_id=<?php echo ($p["r_id"]); ?>">     
        <div class="col-md-3">
        <div class="ca-hover">
          <div class="carousel-img">
          </div>
          <div class="carousel-avatar av1">
          <img style="width:110px; height:110px; border-radius:50%; overflow:hidden;" class="av1" src="/Public/images/<?php echo ($p["r_img"]); ?>" alt="">
          </div>
          <div class="carousel-content">
            <h3>姓名:<?php echo ($p["r_name"]); ?></h3>
            <p>添加时间:<?php echo ($p["r_addtime"]); ?></p>
          </div>
          <div class="overlay"></div>
        </div>
        </div>
        </a><?php endforeach; endif; ?>

		</li>
		</ul>
               </div>
			</div>
   </div>

</ul>

</div>	

</div>


<input type="hidden" value="" name="userid" id="userid" />

<script type="text/javascript" src="/Public/style/js/company_list.min.js"></script>
<script>

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
<a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">企聘王微博</a>
<a class="footer_qr" href="javascript:void(0)" rel="nofollow">企聘王微信<i></i></a>
<div>&nbsp;&nbsp;&nbsp;&nbsp;2013-2014 qipin <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">京ICP备14023790号-2</a></div>
</div>
</div>

<script type="text/javascript" src="/Public/style/js/core.min.js"></script>
<script type="text/javascript" src="/Public/style/js/popup.min.js"></script>

<!--  -->

</body>
</html>