<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
</script><script type="text/javascript" async="" src="/Public/js/conversion.js"></script><script src="/Public/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css"></style>
<meta content="no-siteapp" http-equiv="Cache-Control">
<link  media="handheld" rel="alternate">
<!-- end 云适配 -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>修改密码-拉勾网-最专业的互联网招聘平台</title>
<meta content="23635710066417756375" property="qc:admins">
<meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
<meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
<meta content="QIQ6KC1oZ6" name="baidu-site-verification">

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
    <script type="text/javascript" src="js/excanvas.js"></script>
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
    		<a class="logo" href="h/">
    			<img width="229" height="60" alt="拉勾招聘-专注互联网招聘" src="/Public/images/logo.png">
    		</a>
    		<ul id="navheader" class="reset">
    			<li><a href="index.html">轻轻松松找人才</a></li>
	    	</ul>
        	        	
                                </div>
    </div><!-- end #header -->
    <div id="container">
        	<div class="user_bindSidebar">
    <dl id="user_sideBarmenu" class="user_sideBarmenu">
     	        <dt><h4><font color='#999999'><a href="/index.php"><font color='#999999'>首页</font></a>>个人中心>邀请人才</font></h4></dt>
                <dd><a href="index">我的账号</a></dd>
        <dd><a href="invite">已邀请人才</a></dd>
        <dd><a href="update">修改密码</a></dd>
            </dl>
</div>
<input type="hidden" id="hasSidebar" value="1">	
<div class="content user_modifyContent">
        <dl class="c_section">
            
            <dd>
            	            
            		<table border='1'>
            			<tbody>
            			
                        
                        <tr style="background-color: #c3dde1">
                        <th>姓名</th> 
                        <th>联系方式</th>
                        <th>邮箱</th>
                        <th>应聘职位</th>
                        <th>薪资</th>  
                        <th>面试时间</th>
                        <th>入职状态</th>      
                        </tr>
                         <?php foreach($data as $v){ ?>
                                <tr style="background-color: rgb(212, 227, 229);" onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
                    <td><?php echo $v['s']['r_name'] ?></td>
                    <td><?php echo $v['s']['r_tel'] ?></td>
                    <td><?php echo $v['s']['r_email'] ?></td>
                    <td><?php echo $v['l_job'] ?></td>
                    <td><?php echo $v['l_salary'] ?>K</td>
                    <td><?php echo $v['l_time'] ?></td>
                    <td><?php if($v['is_accept']==0){echo '谢拒';}elseif($v['is_accept']==1){echo "<font color='red'>接受</font>";} ?></td>
                </tr>
                <?php } ?>
                                          			
            		</tbody></table>
				
				            </dd>
        </dl>
    </div>

<!------------------------------------- 弹窗lightbox ----------------------------------------->
<div style="display:none;">
	<!-- 【情况1：第三方首次登录绑定自有帐号】 帐号绑定 : 帐号绑定成功后，未保留的帐号信息将不可恢复 -->	
    <div style="overflow:auto;" class="popup " id="confirmBind1">
	    <input type="hidden" id="oldAccountSecondConfirm" value="1">
	    <div class="user_bindSuccecc">点击“确认绑定”后，您<span>未选择的帐号信息</span> 将被彻底删除，包括： </div>
	    <div class="user_noRecoverInfos">
	    	<p class="noRecoverInfosContent">简历信息、投递记录、发布的职位、收到的简历</p>
	    </div>
        <div class="user_bindBtn"><a id="user_confirmBind1" class="user_confirm click" href="javascript:;">确认绑定</a>
        <a class="user_backReplace" href="javascript:;">返回修改</a></div>
    </div><!--/#confirmUnbind-->
    
    <!-- 【情况2：自有帐号登录绑定第三方】 帐号绑定 : 帐号绑定成功后，未保留的帐号信息将不可恢复 -->	
    <div style="overflow:auto;" class="popup " id="confirmBind2">
	    <div class="user_bindSuccecc">点击“确认绑定”后，您<span>未选择的帐号信息</span> 将被彻底删除，包括：</div>
	    <div class="user_noRecoverInfos">
	    	<!-- <div class="noRecoverInfosTitle">不可恢复信息包括:</div> -->
	    	<p class="noRecoverInfosContent">简历信息、投递记录、发布的职位、收到的简历</p>
	    </div>
        <div class="user_bindBtn"><a id="user_confirmBind2" class="user_confirm click" href="javascript:;">确认绑定</a>
        <a class="user_backReplace" href="javascript:;">返回修改</a></div>
    </div><!--/#confirmUnbind-->
    <!-- 【情况3：第三方首次登录绑定自有帐号 新帐号时点击二次确认按钮】  -->
    <div style="overflow:auto;" class="popup " id="confirmBind3">
    	<input type="hidden" id="newAccountSecondConfirm" value="3">
	    <div class="user_bindSuccecc">点击“确认绑定”后，您<span>未选择的帐号信息</span> 将被彻底删除，包括： </div>
	    <div class="user_noRecoverInfos">
	    	<p class="noRecoverInfosContent">简历信息、投递记录、发布的职位、收到的简历</p>
	    </div>
        <div class="user_bindBtn"><a id="newAccount_confirmBind1" class="user_confirm click" href="javascript:;">确认绑定</a>
        <a class="user_backReplace" href="javascript:;">返回修改</a></div>
    </div><!--/#confirmUnbind-->
    
    <!-- 帐号绑定 : 绑定时发现需要绑定的帐号已经绑定了其他的帐号时提示  -->	
    <div style="overflow:auto;" class="popup" id="bindTips">
     	<table>
         	<tbody><tr>
         		<td> 
         			<h3 id="user_hasBindAccount">         				      				
         			</h3>
         			<div class="f18">你可以：</div>
         			<ul class="user_canOperatioin">
         				<li>1、重新换一个<span id="accountBindType"></span>帐号进行绑定</li>
         				<li>2、退出当前帐号，登录<span id="user_loginCurrentAccount"></span>，进入“帐号设置”解除绑定</li>
         			</ul>
         		</td>
         	</tr>
         	<tr>
         		<td align="center"> 
         			<a id="user_confirmBindTips" class="btn" href="javascript:;"><!-- 换个邮箱绑定 --></a>
         			<a class="cancel" href="login.html">退出当前帐号</a>
         		</td>
         	</tr>
        </tbody></table>
    </div><!--/#bindTips-->
   
   	<!--【已有帐号时候】 帐号绑定 : 绑定时发现需要需要绑定的帐号已经存在信息，需要选择保留一个帐号下信息，另一个帐号下信息被覆盖  -->	
    <div style="overflow:hidden; width:500px;height:390px;" class="popup" id="bindReplace">
	    <form style="width: 100%" id="bindReplaceForm">
	     	<table width="100%" height="100%">
	         	<tbody><tr>
	         		<td class="border_btm"> 
	         			<h3><!-- 你要绑定的帐号：<span id="user_name"></span>已经是拉勾注册用户 -->
	         				<div class="f20 c5">请选择需要保留的帐号信息：</div>
	         			</h3>
	         			<div class="red_18">绑定后只能保留一个帐号下的信息，另一个帐号信息将自动被覆盖，不可恢复！</div>
	         		</td>
	         	</tr>
	         	<tr>
	         		<td class="chooseAccount">
	         			<label class="">
	         				<input type="hidden" value=""> 
	         				<em></em>
	         				<div>
	         					<div class="f16 c7">保留邮箱：<span value="1" id="user_oldAccount" class="c3"></span>帐号下的信息</div>
	         					<div class="acc_detail">
	         						<span>简历完整度：<i id="user_resumeScore"></i>分 </span> 
					 				<span>投递职位数：<i id="user_jobCount"></i>个   </span>
					 			</div>
					 			<div class="acc_detail">
									<span>发布职位数：<i id="user_publishJob"></i>个 </span>                   
									<span>收到简历数：<i id="user_receiveCount"></i>份</span>  
								</div>
	         				</div>
	         			</label>
	         			<label>
	         				<input type="hidden" value=""> 
	         				<em></em>
	         				<div>
	         					<div class="f16 c7 ">保留
	         						<i id="user_typeAccount"></i>：
	         						<span value="2" id="user_replaceAccount" class="c3"></span>帐号下的信息
	         					</div>
	         					<div class="acc_detail">
	         						<span>简历完整度：<i id="user_replaceResumeScore"></i>分 </span> 
					 				<span>投递职位数：<i id="user_replaceJobCount"></i>个   </span>
					 			</div>
					 			<div class="acc_detail">
									<span>发布职位数：<i id="user_replacePublishJob"></i>个 </span>                   
									<span>收到简历数：<i id="user_replaceReceiveCount"></i>份</span>  									
								</div>	         					
	         					<span style="margin:0px;display:none" id="chooseRemainError" class="error"></span>    
	         				</div>	
	         				     				
	         			</label>
	         		
	         		</td>
	         	</tr>
	         	<tr>
	         		
	         		<td align="center"> 	         			
	         			<a id="user_confirmReplace" class="btn" href="javascript:;">确 定</a>	   
	         			<a id="user_cancleReplace" class="cancel" href="javascript:;">取 消</a>	         			
	         		</td>
	         	
	         	</tr>
	        </tbody></table>
	       
        </form>
    </div><!--/#bindReplace-->
  
   <!-- 帐号绑定 : 确认取消绑定QQ -->
   <div class="popup user_popup" id="confirmUnbind">
   		<div class="user_confirmUnbind">确认要解除与QQ的绑定吗？</div>
   		<div class="user_confirmNo">确认后，将不能使用QQ登录拉勾网</div>
   		<div class="user_bindBtn user_unbind"><a id="user_confirmUnbind" class="user_confirm click" href="javascript:;">确&nbsp;定</a>
   		<a class="cancel" href="javascript:;">取 消</a>
   		</div>
   </div>
   
	<!-- 帐号绑定 : 确认取消绑定sina微博 -->
   	 <div class="popup user_popup" id="confirmUnbindSina">
   		<div class="user_confirmUnbind">确认要解除与新浪微博的绑定吗？</div>
   		<div class="user_confirmNo">确认后，将不能使用新浪微博登录拉勾网</div>
   		<div class="user_bindBtn user_unbind"><a id="user_confirmUnbindSina" class="user_confirm click" href="javascript:;">确&nbsp;定</a>
   		<a class="cancel" href="javascript:;">取 消</a>
   		</div>
   </div>
   	
   	<!-- 修改密码 -->
	<div style="overflow:hidden" class="popup" id="updatePassword">
		<h3>修改密码成功，请重新登录</h3>
		<h4><span>5</span>秒后将自动退出</h4>
		<a class="btn" href="login.html">直接退出</a>
	</div>
	
   	<!-- 解除招聘服务 -->
	<div style="overflow:hidden" class="popup" id="unbindService">
		<h3>与当前公司的招聘服务解除成功！</h3>
		<h4><span>5</span>秒后页面将自动跳转至开通招聘服务页</h4>		
		<a class="btn" href="h/corpCenter/bindStep1.html">立即跳转</a>
	</div>
	<div style="overflow:hidden" class="popup" id="confirm_unbindService">
		<h3>确认解除与当前公司的招聘服务吗？</h3>
		<h4>解除后，您通过该公司发布的职位和收到的简历都将不可见，且不可恢复</h4>		
		<div class="confirm_unbindSeerviceBtn">
		<a id="confirm_unbind" class="btn" href="javascript:;">确认解除</a>	   
    	<a id="" class="cancel" href="javascript:;">取 消</a>	
    	</div>
	</div>
	
</div>

	</div><!-- end #body -->
	

<script src="/Public/styles/js/core.min.js" type="text/javascript"></script>
<script src="/Public/styles/js/popup.min.js" type="text/javascript"></script>

<!--  -->


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>