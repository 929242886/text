<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>865171网站内容管理系统</title>
<link href="/interview/Public/css/top_css.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#03A8F6">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="194" height="60" align="center" background="/interview/Public/images/top_logo.jpg"></td>
    <td align="center" style="background:url(/interview/Public/images/top_bg.jpg) no-repeat"><table cellspacing="0" cellpadding="0" border="0" width="100%" height="33">
      <tbody>
        <tr>
          <td width="30" align="left"><img onClick="switchBar(this)" height="15" alt="关闭左边管理菜单" src="/interview/Public/images/on-of.gif" width="15" border="0" /></td>
          <td width="320" align="left"><a class="top_link" 
            href="include/MakeIndex.asp" 
            target="main">生成首页</a><span class="top_link">┆</span> <a class="top_link" 
            href="Add_Admin.asp?Action=Edit&AdminID=<%=Session("AdminID")%>" target="main">修改密码</a><span class="top_link">┆</span> <a class="top_link" 
            href="include/ApplicationRemoveAll.asp" target="main">更新缓存</a>┆<a class="top_link" 
            href="include/SiteMap.865171.asp" target="main">生成 Sitemaps</a></td>
          <td width="80" align="right" nowrap="nowrap" class="topbar">官方公告：</td>
          <td class="topbar"><a href="" 
            target="_blank"><img title="返回首页" height="23" 
            src="/interview/Public/images/home.gif" width="33" 
        border="0" /></a>&nbsp;</td>
        </tr>
      </tbody>
    </table>
    <table height="26" border="0" align="left" cellpadding="0" cellspacing="0" class="subbg" NAME=t1>
      <tbody>
        <tr align="middle">
          <td width="71" height="26" align="center" valign="middle" background="/interview/Public/images/top_tt_bg.gif"><a
            href="right.asp" 
          target="main" class="STYLE2">管理首页</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/interview/Public/images/top_tt_bg.gif"><a 
            href="System_Admin.asp" 
            target="main" class="STYLE2">站点设置</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/interview/Public/images/top_tt_bg.gif" ><a   href="Article/Article_Manage.asp" target="main">文章系统</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/interview/Public/images/top_tt_bg.gif" ><a  href="Label_Admin.asp?Type=1" target="main" class="STYLE3">标签系统</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/interview/Public/images/top_tt_bg.gif" ><a  href="User/User_Admin.asp"  target="main" class="STYLE2">会员管理</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/interview/Public/images/top_tt_bg.gif"><a  href="Class_Templet.asp?ChannelID=1&Type=2"  target="main" class="STYLE2">模板管理</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/interview/Public/images/top_tt_bg.gif"><a href="http://help.865171.cn"   target="main" class="STYLE2">帮助中心</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/interview/Public/images/top_tt_bg.gif"><a  href="Login.asp?Action=LoginOut" target="_top" class="STYLE2">退出登录</a></td>
        </tr>
      </tbody>
    </table></td>
  </tr>
  <tr height="6">
    <td bgcolor="#1F3A65" background="/interview/Public/images/top_bg.jpg"></td>
  </tr>
</table>
<script language="javascript">
<!--
var displayBar=true;
function switchBar(obj){
	if (displayBar)
	{
		parent.frame.cols="0,*";
		displayBar=false;
		obj.title="打开左边管理菜单";
	}
	else{
		parent.frame.cols="195,*";
		displayBar=true;
		obj.title="关闭左边管理菜单";
	}
}
//-->
</script></body>
</html>