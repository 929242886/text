<?php
/* Smarty version 3.1.29, created on 2016-05-03 11:16:19
  from "E:\phpstudy\WWW\mvc\view\link\link_up.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57281803a222b8_58947954',
  'file_dependency' => 
  array (
    'eb06ed100c19c77ab49d0eec6bed2ce713dbb586' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\link\\link_up.php',
      1 => 1461839323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_57281803a222b8_58947954 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class=containertitle><b>编辑链接</b></div>
<div class=line></div>
<form action="?a=up_pro&c=link" method="post">
<div class="item_edit">
	<li><input size="40" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['name'];?>
" class="input" name="name" /> 名称<span class="required">*</sapn></li>
	<li><input size="40" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['url'];?>
" class="input" name="url" /> 地址<span class="required">*</sapn></li>
	<li>链接描述<br /><textarea name="desc" rows="3" class="textarea" cols="42"><?php echo $_smarty_tpl->tpl_vars['re']->value['desc'];?>
</textarea></li>
	<li>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['id'];?>
" name="id" />
	<input type="submit" value="保 存" class="button" />
	<input type="button" value="取 消" class="button" onclick="javascript: window.history.back();" /></li>
</div>
</form>
<?php echo '<script'; ?>
>
$("#menu_link").addClass('sidebarsubmenu1');
<?php echo '</script'; ?>
>	</div><!--end container-->
	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>
</div><!--end mainpage-->
</body>
</html><?php }
}
