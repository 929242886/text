<?php
/* Smarty version 3.1.29, created on 2016-05-03 15:59:32
  from "E:\phpstudy\WWW\mvc\view\tag\tag_up.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57285a64b009e8_21765589',
  'file_dependency' => 
  array (
    '7d8e6f8be271786d09179c3cb31797579a4fc0bb' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\tag\\tag_up.php',
      1 => 1462262371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_57285a64b009e8_21765589 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class=containertitle><b>标签管理</b>
</div>
<div class=line></div>
<form action="?a=up_pro&c=tag" method="post" name="form_tag" id="form_tag">
<div>
<li>
<!-- <li style="margin:20px 30px">还没有标签，写文章的时候可以给文章打标签</li> -->
<li>
<tr>
	
	<td>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['id'];?>
" name="id">
		<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['tagname'];?>
" name="tagname">
	</td>
	
</tr>
<tr>
	<td><input type="submit" value="修改"></td>
</tr>
</li>
<input name="token" id="token" value="a2965667ac0c83c9cd9125a9584cf489" type="hidden">
<li style="margin:20px 0px">

</li>
</div>
</form>
	</div><?php }
}
