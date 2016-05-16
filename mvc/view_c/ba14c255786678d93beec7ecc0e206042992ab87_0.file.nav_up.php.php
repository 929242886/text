<?php
/* Smarty version 3.1.29, created on 2016-05-03 11:16:12
  from "E:\phpstudy\WWW\mvc\view\nav\nav_up.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572817fc6405c5_89260457',
  'file_dependency' => 
  array (
    'ba14c255786678d93beec7ecc0e206042992ab87' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\nav\\nav_up.php',
      1 => 1461821725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_572817fc6405c5_89260457 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class=containertitle><b>修改导航</b></div>
<div class=line></div>
<form action="?a=up_pro&c=nav" method="post">
<div class="item_edit">
	<li><input size="20" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['name'];?>
" name="name" /> 导航名称</li>
	<li>
	<input size="50" value="该导航地址由系统生成，无法修改" name="url" disabled="disabled" /> 导航地址，
	在新窗口打开
	<?php if ($_smarty_tpl->tpl_vars['re']->value['is_new'] == 1) {?>
	<input type="checkbox" style="vertical-align:middle;" value="1" name="is_new"  checked="" />
	<?php } elseif ($_smarty_tpl->tpl_vars['re']->value['is_new'] == 0) {?>
	<input type="checkbox" style="vertical-align:middle;" value="0" name="is_new"   />
	<?php }?>
    </li>
    	<li>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['id'];?>
" name="id" />
	<input type="submit" value="保 存" class="button" />
	<input type="button" value="取 消" class="button" onclick="javascript: window.history.back();" />
	</li>
</div>
</form>
<?php echo '<script'; ?>
>
$("#menu_navbar").addClass('sidebarsubmenu1');
<?php echo '</script'; ?>
>	</div><!--end container-->
	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>
</div><!--end mainpage-->
</body>
</html><?php }
}
