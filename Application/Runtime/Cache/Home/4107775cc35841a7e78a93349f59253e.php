<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
</script><script type="text/javascript" async="" src="js/conversion.js"></script><script src="js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css"></style>
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
<link href="/text/Public/style/css/style.css" type="text/css" rel="stylesheet">
<link href="/text/Public/style/css/external.min.css" type="text/css" rel="stylesheet">
<link href="/text/Public/style/css/popup.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/text/Public/style/css/styles.css" />
<script type="text/javascript" src="/text/Public/style/js/jquery.min.js"></script>
<script type="text/javascript" src="/text/Public/style/js/custom.js"></script>
<script type="text/javascript" src="/text/Public/style/js/jquery.1.10.1.min.js"></script>
<script src="/text/Public/style/js/jquery.lib.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/text/Public/style/js/ajaxfileupload.js"></script>
<script src="/text/Public/style/js/additional-methods.js" type="text/javascript"></script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script src="js/conv.js" type="text/javascript"></script>
<script src="js/ajaxCross.json" charset="UTF-8"></script></head>
<body>
<div id="body">
    <div id="header">
        <div class="wrapper">
            <a class="logo" href="h/">
                <img width="229" height="60" alt="拉勾招聘-专注互联网招聘" src="/text/Public/images/logo.png">
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
                <dt style="margin-left:3px"><h4><font color='#999999'><a href="/text/index.php"><font color='#999999'>首页</font></a>>个人中心>我的账号</font></h4></dt>
                <dd><a href="index">我的账号</a></dd>
        <dd><a href="invite">已邀请人才</a></dd>
        <dd><a href="update">修改密码</a></dd>
            </dl>
            <div id='tui' style="display:block">
             <h4 style="margin-left:3px"><span ><font color='#999999'>今日为您推荐</font><font id='close' style="cursor:pointer;float:right" onclick="closes();"><img src="/text/Public/images/error-blue.png" style="margin-left:105px" width='20px' height='20px' alt=""></font></span></h4>
             <div>
                 <?php foreach($res as $k=>$v){ ?>
                <p style="margin-left:3px"> <a href="Resume/index?r_id=<?php echo ($v["r_id"]); ?>"><?php echo ($v["r_name"]); ?></a>　
                 <span>期望薪资：<?php echo ($v["money"]); ?></span> </p>
                 <?php } ?>
             </div>
            </div>
            <script>
            function closes()
            {
                document.getElementById('tui').style.display='none';
            }
            </script>

</div>
<input type="hidden" id="hasSidebar" value="1"> 
<div class="content user_modifyContent">
        <dl class="c_section">
            
            <dd>


                                <form action="/text/index.php/Home/Company/index" method='post' enctype="multipart/form-data">
                                <input type="hidden" name="e_id" value="<?php echo ($data["e_id"]); ?>">
                    <table class="savePassword">
                        <tbody>
                        <tr>
                            <td class="label">公司名称：</td>
                            <td>
                                <input type="text" id="e_name" name="e_name" value="<?php echo ($data["e_name"]); ?>" style="background-image: url(images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
                                
                             </td>                            
                        </tr>
                        <tr>
                            <td></td>
                            <td><span id='s1'></span></td>
                        </tr>
                        <tr>
                            <td class="label">公司简介：</td>
                            <td>
                                <input type="text" id="e_description" name="e_description" value="<?php echo ($data["e_description"]); ?>" style="background-image: url(images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
                             </td>                            
                        </tr>
                        <tr>
                            <td></td>
                            <td><span id='s2'></span></td>
                        </tr>
                        <tr>
                            <td class="label">法人代表：</td>
                            <td>
                                <input type="text" id="e_legal" name="e_legal" value="<?php echo ($data["e_legal"]); ?>" style="background-image: url(images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
                             </td>                            
                        </tr>
                        <tr>
                            <td></td>
                            <td><span id='s3'></span></td>
                        </tr>
                       <tr>
                            <td class="label">营业执照：</td>
                            <td>
                                <span><img src="/text/Public/Uploads/<?php echo ($data["e_photo"]); ?>" alt="" style="width:90px;height:80px"></span><input type="file" id='e_photo' name="e_photo">
                             </td>                            
                        </tr>
                        <tr>
                            <td></td>
                            <td><span style="font-size:15px;color:blue">温馨提示：营业执照必须上传</span></td>
                        </tr>
                        <tr>
                            <td class="label">企业邮箱：</td>
                            <td>
                                <input type="text" id="e_email" name="e_email" value="<?php echo ($data["e_email"]); ?>" style="background-image: url(images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
                             </td>                            
                        </tr>
                        <tr>
                            <td></td>
                            <td><span id='s5'></span></td>
                        </tr>
                        <tr>
                            <td class="label">规  模：</td>
                            <td>
                                <input type="text" id="e_size" name="e_size" value="<?php echo ($data["e_size"]); ?>" style="background-image: url(images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
                             </td>                            
                        </tr>
                        <tr>
                            <td></td>
                            <td><span id='s6'></span></td>
                        </tr>
                        <tr>
                            <td class="label">公司地址：</td>
                            <td>
                                <input type="text" id="e_area" name="e_area" value="<?php echo ($data["e_area"]); ?>" style="background-image: url(images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
                             </td>                            
                        </tr>
                        <tr>
                            <td></td>
                            <td><span id='s7'></span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" id='tijiao' value="保 存"></td>
                        </tr>
                    </tbody></table>
                </form>
                            </dd>
        </dl>
    </div>
<script type="text/javascript"  src="/text/Public/style/js/jquery.js"></script>
    <script>
    //公司名称为空不能提交
    $(document).ready(function(){  
        $(":submit[id=tijiao]").click(function(check){  
            var val = $(":text[id=e_name]").val();  
            if(val==""){   
                $('#s1').html("<font color='red'>公司名称不能为空</font>");
                $(":text[id=e_name]").focus();  
                check.preventDefault();//此处阻止提交表单  
            }             
        });  
    });    
     $('#e_name').blur(function(){
        var e_name=$('#e_name').val();
        if(e_name=='')
        {
          $('#s1').html("<font color='red'>公司名称不能为空</font>");  
        }else{
           $('#s1').html(""); 
        }
     });
     //公司简介为空不能提交
    $(document).ready(function(){  
        $(":submit[id=tijiao]").click(function(check){  
            var val = $(":text[id=e_description]").val();  
            if(val==""){   
                $('#s2').html("<font color='red'>公司简介不能为空</font>");
                $(":text[id=e_description]").focus();  
                check.preventDefault();//此处阻止提交表单  
            }             
        });  
    });    
     $('#e_description').blur(function(){
        var e_description=$('#e_description').val();
        if(e_description=='')
        {
          $('#s2').html("<font color='red'>公司简介不能为空</font>");  
        }else{
           $('#s2').html(""); 
        }
     });
     //法人代表为空不能提交
    $(document).ready(function(){  
        $(":submit[id=tijiao]").click(function(check){  
            var val = $(":text[id=e_legal]").val();  
            if(val==""){   
                $('#s3').html("<font color='red'>法人代表不能为空</font>");
                $(":text[id=e_legal]").focus();  
                check.preventDefault();//此处阻止提交表单  
            }             
        });  
    });    
     $('#e_legal').blur(function(){
        var e_legal=$('#e_legal').val();
        if(e_legal=='')
        {
          $('#s3').html("<font color='red'>法人代表不能为空</font>");  
        }else{
           $('#s3').html(""); 
       }
     }); 
  
     //企业邮箱为空不能提交
    $(document).ready(function(){  
        $(":submit[id=tijiao]").click(function(check){  
            var val = $(":text[id=e_email]").val(); 
            var a=/^\w+@\w+\.(com|cn|net)$/;  
            if(val==""){   
                $('#s5').html("<font color='red'>企业邮箱不能为空</font>");
                $(":text[id=e_email]").focus();  
                check.preventDefault();//此处阻止提交表单  
            }else if(!a.test(val)){
                $('#s5').html("<font color='red'>邮箱格式不正确</font>");
                $(":text[id=e_email]").focus();  
                check.preventDefault();//此处阻止提交表单
            }
        });  
    });    
     $('#e_email').blur(function(){
        var e_email=$('#e_email').val();
        if(e_email=='')
        {
          $('#s5').html("<font color='red'>企业邮箱不能为空</font>");  
        }else{
           $('#s5').html(""); 
        }

	 //邮箱格式不正确不能提交
    $(document).ready(function(){  
        $(":submit[id=tijiao]").click(function(check){  
            var a=/^\w+@\w+\.(com|cn|net)$/; 
           if(!a.test(e_email)){
             $('#s5').html("<font color='red'>邮箱格式不正确</font>");
           }else{
             $('#s5').html('');
           }
        }
     });
   
     //规模为空不能提交
    $(document).ready(function(){  
        $(":submit[id=tijiao]").click(function(check){  
            var val = $(":text[id=e_size]").val();  
            if(val==""){   
                $('#s6').html("<font color='red'>规模不能为空</font>");
                $(":text[id=e_size]").focus();  
                check.preventDefault();//此处阻止提交表单  
            }             
        });  
    });    
     $('#e_size').blur(function(){
        var e_size=$('#e_size').val();
        if(e_size=='')
        {
          $('#s6').html("<font color='red'>规模不能为空</font>");  
        }else{
           $('#s6').html(""); 
        }
     });
     //公司地址为空不能提交
    $(document).ready(function(){  
        $(":submit[id=tijiao]").click(function(check){  
            var val = $(":text[id=e_area]").val();  
            if(val==""){   
                $('#s7').html("<font color='red'>公司地址不能为空</font>");
                $(":text[id=e_area]").focus();  
                check.preventDefault();//此处阻止提交表单  
            }             
        });  
    });    
     $('#e_area').blur(function(){
        var e_area=$('#e_area').val();
        if(e_area=='')
        {
          $('#s7').html("<font color='red'>公司地址不能为空</font>");  
        }else{
           $('#s7').html(""); 
        }
     });
    </script>

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
<!------------------------------------- end -----------------------------------------> <script src="js/setting.js"></script>
            <div class="clear"></div>
            <input type="hidden" value="" id="resubmitToken">
            <a rel="nofollow" title="回到顶部" id="backtop"></a>
        </div><!-- end #container -->
    </div><!-- end #body -->

<script src="js/core.min.js" type="text/javascript"></script>
<script src="js/popup.min.js" type="text/javascript"></script>

<!--  -->


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>