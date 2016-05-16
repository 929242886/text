<?php
/* Smarty version 3.1.29, created on 2016-05-03 22:14:40
  from "E:\phpstudy\WWW\mvc\view\admin\home.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5728b25012ca04_95424620',
  'file_dependency' => 
  array (
    '116e4bd5d4548467cf1eb5e35647700d270510de' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\admin\\home.php',
      1 => 1462284879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
    'file:admin/footer.php' => 1,
  ),
),false)) {
function content_5728b25012ca04_95424620 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="admindex">

<div id="admindex_main">

    <div id="tw">

        <div class="main_img"><a href="./blogger.php"><img src="./common/images/avatar.jpg" height="52" width="52" /></a></div>

        <div class="right">

        <form method="post" action="twitter.php?action=post">

        <div class="msg2"><a href="blogger.php">admin</a></div>

        <div class="box_1"><textarea class="box2" name="t">用微语记录生活 ……</textarea></div>

        <div class="tbutton" style="display:none;">

            <input type="submit" value="发布" onclick="return checkt();"/> <a href="javascript:closet();">取消</a> <span>(你还可以输入140字)</span>

            <input name="token" id="token" value="4b05714cc3bd3cbea1c9395b7bb2f006" type="hidden" />

        </div>

        </form>

        </div>

		<div class="clear"></div>

    </div>

</div>

<div class="clear"></div>

<div style="margin-top: 20px;">

<div id="admindex_servinfo">

<h3>站点信息</h3>

<ul>

	<li>有<b>1</b>篇文章，<b>0</b>条评论，<b>1</b>条微语</li>

	<li>数据库表前缀：没有</li>

    <li>PHP版本：5.6.1，MySQL版本：5.5.40</li>

	<li>服务器环境：Apache/2.4.10 (Win32) OpenSSL/1.0.1i mod_fcgid/2.3.9</li>

	<li>GD图形处理库：bundled (2.1.0 compatible)</li>

	<li>服务器空间允许上传最大文件：2M</li>


</ul>

</div>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
