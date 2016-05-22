<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
		<title>简历</title>
		<link rel="stylesheet" href="/text/Public/general.css" media="all"/>
	</head>
    <style>
        #div{
            float: right;
            margin-right:50px;
            
        }
    </style>
    <link rel="stylesheet" href="/text/Public/css/common.css"/><!-- 基本样式 -->
    <link rel="stylesheet" href="/text/Public/css/animate.min.css"/> <!-- 动画效果 -->
	<body>
    <?php if(is_array($arr)): foreach($arr as $key=>$v): ?><a href="/text/index.php">返回</a>
		<div id="header">
			<h1 id="title"><?php echo ($v["r_name"]); ?>的简历</h1>
		</div>
		<div id="general">
            <div id="div" >
                <img width="135px" height="250px" src="/text/Public/uploads/<?php echo ($v["r_img"]); ?>" />
            </div>
			<div class="row">
				<label id="realname">真实姓名:</label>
				<label id="realnameValue"><?php echo ($v["r_name"]); ?></label>
			</div>
			<div class="row">
				<label id="birthday">出生年月:</label>
				<label id="birthdayValue"><?php echo ($v["r_born"]); ?></label>
			</div>
            <div class="row">
				<label id="birthday">性别:</label>
				<label id="birthdayValue1">
                <?php  if($v.r_sex==0){ echo "男"; }else{ echo "女"; } ?>
                 </label>
			</div>
            <div class="row">
				<label id="birthday">毕业学校:</label>
				<label id="birthdayValue2">北京八维研修学院</label>
			</div>
            
            <div class="row">
				<label id="birthday">期望薪资:</label>
				<label id="birthdayValue4"><?php echo ($v["m_money"]); ?></label>
			</div>
            <div class="row">
				<label id="birthday">简历创建日期:</label>
				<label id="birthdayValue5"><?php echo ($v["r_addtime"]); ?></label>
			</div>
			<div class="row">
				<label id="mobile">手机号:</label>
				<label id="mobileValue"><?php echo ($v["r_tel"]); ?></label>
			</div>
			<div class="row">
				<label id="email">电子邮件:</label>
				<label id="emailValue"><?php echo ($v["r_email"]); ?></label>
			</div>
            <div class="row">
				<label id="email1">家庭住址:</label>
				<label id="emailValue"><?php echo ($v["r_address"]); ?></label>
			</div>
		</div>
		<div id="objective">
			<h2>求职意向</h2>
			<p class="objective">寻一份<?php echo ($v["p_name"]); ?>工作.</p>
		</div>
		<div id="skillareas">
			<h2>精通技能</h2>
			<ol>
				<li class="skill">
					<h3>精通<?php echo ($v["r_skill"]); ?></h3>
					
				</li>
			</ol>
		</div>
        <div id="skillareas">
			<h2>做过的项目</h2>
			<ol>
				<li class="skill">
					
					<ul class="skillset1">
						<li><?php echo ($v["r_project"]); ?></li>
					</ul>
				</li>
			</ol>
		</div>
        <div id="skillareas">
			<h2>自我评价</h2>
			<ol>
				<li class="skill">
					
					<ul class="skillset1">
						<li><?php echo ($v["r_evaluate"]); ?></li>
					</ul>
				</li>
			</ol>
		</div>
		<div id="history">
			<h2>导师评价</h2>
			<ol>
				<li class="job">
					
					<div class="year">评价</div><br />
                    <div id="box">
                <h2>太好了非常好</h2>
                <p>太好了非常好太好了非常好太好了非常好太好了非常好太好了非常好太好了非常好太好了非常好太好了非常好太好了非常好</p>
                <p>123323131231313示，23131313213131法的。</p>
                <p><strong>不错</strong></p>
                <p>“哈酒撒大黄蜂好  个非人工发给人工费HiFi 方法</p>
                <p>粉色和如何给借款热裤供热韩国热火看过换热管re广告和认可后果拿走了框架结构和人工及拉人中；昂i欧金融环境alLJKA好人卡航 日个人 日杭州开户安徽。</p>
                <p>的那家饭店是第四个号发的和公积金东方经济而后然后v热韩国一u而后日或该扔  库房的后果就爱哭HG爱人 </strong></p>
                <p>我瓦特返回忍受饥饿开咯人人rtrsj6ubki7离开他人提供是可以i非让人又有人来了呀已经生日。</p>
                <p>该民间机构是怎样获得地震预报信息的？该微博博主向记者表示，他们是根据云南省地震局官网云南地震数据共享中心查询到了云南省内的一些地震监测数据，分析得出的预报信息。记者发现，确实可以通过该网站查到云南各地震监测点的预处理数据。</p>
                <p>> 供热那个通过人啊多好听忽然会他会突然截图科技推广润泽图呢冠冕堂皇。</p>
                <p><strong>省地震局：民间仅限于学术交流</strong></p>
                <p>“ 呀新地方是个天然房管局里留言了；哦回复v会根据部分蛋糕 热水管突然嘿嘿u冬季呀是然后他后台天退换货身体还是突然好。</p>
                <p> 华泰人寿如有欢迎欢迎态度积极已经 呀呀杰爷。</p>
                <p>达到撒达到阿萨德按时达到艾斯德斯按时大按时撒旦大按时按时撒撒旦按时是 阿萨德撒打算打算达到切分如果谈话时突然鸡同鸭讲生日他后台。</p>
                <p>123456754321234565432。</p>
                </div>
				</li>
                <br/>
			</ol>
		</div><?php endforeach; endif; ?>
            <div class="example">
            <a href="javascript:;" class="rollIn dialog">邀请</a>
            </div>
            <div id="HBox">
            <?php if(is_array($arr1)): foreach($arr1 as $key=>$v): ?><form action="/text/index.php/Home/Resume/iphone" method="post" >
				<ul class="list">
                    <li>
						<strong>公司 <font color="#ff0000">*</font></strong>
						<div class="fl"><?php echo ($v["e_name"]); ?></div>
                        <input type="hidden" name="company" value="<?php echo ($v["e_name"]); ?>" />
                        <input type="hidden" name="e_id" value="<?php echo ($v["e_id"]); ?>" />
                        <input type="hidden" name="r_id" value="<?php echo ($arr[0]["r_id"]); ?>" />
					</li>
                    <li>
						<strong>号码 <font color="#ff0000">*</font></strong>
						<div class="fl"><?php echo ($v["e_phone"]); ?></div>
                        <input type="hidden" value="<?php echo ($v["e_phone"]); ?>" name="iphone" />
					</li>
					<li>
						<strong> 职位 <font color="#ff0000">*</font></strong>
						<div class="fl"><input type="text" name="nickname" value="" class="ipt nickname" /></div>
					</li>
					<li>
						<strong>薪资 <font color="#ff0000">*</font></strong>
						<div class="fl"><input type="text" name="money" value="" class="ipt email" /></div>
					</li>
                    <li>
						<strong>待遇 <font color="#ff0000">*</font></strong>
						<div class="fl"><input type="text" name="daiyu" value="" class="ipt email1" /></div>
					</li>
                    <li>
						<strong>时间 <font color="#ff0000">*</font></strong>
						<div class="fl"><input type="text" name="addtime" value="" class="ipt email1" /></div>
					</li>
					<li>
						<strong>地址 <font color="#ff0000">*</font></strong>
						<div class="fl"><?php echo ($v["e_area"]); ?></div>
                        <input type="hidden" value="<?php echo ($v["e_area"]); ?>" name="e_area" />
					</li>
					<input type="hidden" name="tel" value="<?php echo ($arr[0]["r_tel"]); ?>" />
					<li><input type="submit" value="确认邀请此人" class="submitBtn" /></li>
				</ul>
			</form><?php endforeach; endif; ?>
		</div><!-- HBox end -->
        
	</body>
</html>
<script src="/text/Public/js/jquery-1.8.3.min.js"></script>
<script src="/text/Public/js/jquery.hDialog.js"></script>
<script>
function show(){
var box = document.getElementById("box");
var text = box.innerHTML;
var newBox = document.createElement("div");
var btn = document.createElement("a");
newBox.innerHTML = text.substring(0,200);
btn.innerHTML = text.length > 100 ? "...显示全部..." : "";
btn.href = "###";
btn.onclick = function(){
if (btn.innerHTML == "...显示全部..."){
btn.innerHTML = "收起";
newBox.innerHTML = text;
}else{
btn.innerHTML = "...显示全部...";
newBox.innerHTML = text.substring(0,200);
}
}
box.innerHTML = "";
box.appendChild(newBox);
box.appendChild(btn);
}
show();
</script>
<script>
$(function(){
	var $el = $('.dialog');
	$el.hDialog();

	

	//提交并验证表单
	$('.submitBtn').click(function() {
		var $nickname = $('.nickname');
		var $email = $('.email');
		var $phone = $('.phone');
		if($nickname.val() == ''){
			$.tooltip('职位还没填呢...'); $nickname.focus();
		}else if($phone.val() == ''){
			$.tooltip('手机还没填呢...'); $phone.focus();
		}else if($email.val() == ''){
			$.tooltip('薪资还没填呢...'); $email.focus();
		}else{
			$.tooltip('提交成功，2秒后自动关闭',2000,true);
			setTimeout(function(){
				//$el.hDialog('close',{box:'#HBox'},'');  //也可以加跳转链接哦~
				$el.hDialog('close',{box:'#HBox'});
			},2000);
		}
	});


});
</script>