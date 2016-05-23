<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="/Public/style/css/style2.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<img border='0' src='/Public/images/background.jpg' width='100%' height='100%' style='position: absolute;left:0px;top:0px;z-index: -1'>
  <section class="container">
  <center><img src="/Public/images/logo.png" alt="" width="350px"></center>
    <div class="login">
      <h1>企业注册</h1>
      <form method="post" action="registerok">
        <p><input type="text" name="e_phone" id="e_phone" value="" placeholder="手机号" ><font color="red"><span id='s1'></span></font></p>
        <p>验证码：<input type="text" name="verify" id=""><input id="zphone" type="button" value=" 获取手机验证码 " onClick="get_mobile_code()"></p>
        <p><input type="password" name="e_pwd" id="e_pwd" value="" placeholder="密码"><font color='red'><span id='s2'></span></font></p>
        <p class="remember_me">
          <label>
             <p class="submit"></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="commit" value="注册">
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="index">已有账号去登陆！！</a>
        </p>
       
      </form>
    </div>
<script type="text/javascript" src="/Public/style/js/jquery.js"></script>
<script>
$(function(){
$('#e_phone').click(function(){
$('#e_phone').val('');
});
//验证用户名
$('#e_phone').blur(function(){
var username=$('#e_phone').val();
if(username==''){
$('#s1').html('手机号不能为空');
}else{
var a=/^1[3|4|5|8][0-9]\d{4,8}$/; 
if(!a.test(username)){
    $('#s1').html('手机号格式不正确');
  }else{
    $('#s1').html('');
  }
}

});
$('#e_pwd').blur(function(){
var password=$('#e_pwd').val();
if(password==''){
$('#s2').html('密码不能为空');
}else{
$('#s2').html('');
}
});

});
</script>
<script language="javascript">
  function get_mobile_code(){
    var phone=document.getElementById('e_phone').value;
        $.post(
          '/index.php/Sms', 
          {mobile:phone,send_code:<?php echo $_SESSION['send_code'];?>}, function(msg) {
            alert(jQuery.trim(unescape(msg)));
      if(msg=='提交成功'){
        RemainTime();
      }
        });
  }
  var iTime = 59;
  var Account;
  function RemainTime(){
    document.getElementById('zphone').disabled = true;
    var iSecond,sSecond="",sTime="";
    if (iTime >= 0){
      iSecond = parseInt(iTime%60);
      iMinute = parseInt(iTime/60)
      if (iSecond >= 0){
        if(iMinute>0){
          sSecond = iMinute + "分" + iSecond + "秒";
        }else{
          sSecond = iSecond + "秒";
        }
      }
      sTime=sSecond;
      if(iTime==0){
        clearTimeout(Account);
        sTime='获取手机验证码';
        iTime = 59;
        document.getElementById('zphone').disabled = false;
      }else{
        Account = setTimeout("RemainTime()",1000);
        iTime=iTime-1;
      }
    }else{
      sTime='没有倒计时';
    }
    document.getElementById('zphone').value = sTime;
  } 
</script>
    <div class="login-help">
      <p>忘记密码? <a href="index.html">点击修改</a>.</p>
    </div>
  </section>
<div style="text-align:center;">
</div>
</body>
</html>