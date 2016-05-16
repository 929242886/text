<?php
/* Smarty version 3.1.29, created on 2016-05-03 15:53:58
  from "E:\phpstudy\WWW\mvc\view\tag\tag.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57285916c408b9_69880808',
  'file_dependency' => 
  array (
    '6fdd8544c9fe1bbda7e07127993d1e0a5f1d695f' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\tag\\tag.php',
      1 => 1462261677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_57285916c408b9_69880808 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class=containertitle><b>标签管理</b>
</div>
<div class=line></div>
<form action="?c=tag&a=del" method="post" name="form_tag" id="form_tag">
<div>
<li>
<!-- <li style="margin:20px 30px">还没有标签，写文章的时候可以给文章打标签</li> -->
<li>
<?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_vo_0_saved_item = isset($_smarty_tpl->tpl_vars['vo']) ? $_smarty_tpl->tpl_vars['vo'] : false;
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$__foreach_vo_0_saved_local_item = $_smarty_tpl->tpl_vars['vo'];
?>
<input type="checkbox" name="tag[]" class="ids" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">
<a href="?a=tag_up&c=tag&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['tagname'];?>
</a>
 &nbsp;&nbsp;&nbsp;
<?php
$_smarty_tpl->tpl_vars['vo'] = $__foreach_vo_0_saved_local_item;
}
if ($__foreach_vo_0_saved_item) {
$_smarty_tpl->tpl_vars['vo'] = $__foreach_vo_0_saved_item;
}
?>
</li>
<input name="token" id="token" value="a2965667ac0c83c9cd9125a9584cf489" type="hidden">
<li style="margin:20px 0px">
<a href="javascript:void(0);" id="select_all">全选</a> 选中项：
<a href="javascript:deltags();" class="care">删除</a>
</li>
</div>
</form>
<?php echo '<script'; ?>
>
$("#select_all").toggle(function () { $(".ids").attr("checked", "checked");},function () { $(".ids").removeAttr("checked");});
function deltags(){
	if (getChecked('ids') == false) {
		alert('请选择要删除的标签');
		return;
	}
	if(!confirm('你确定要删除所选标签吗？')){ return;}
	$("#form_tag").submit();
}
setTimeout(hideActived,2600);
$("#menu_tag").addClass('sidebarsubmenu1');
<?php echo '</script'; ?>
>	</div><?php }
}
