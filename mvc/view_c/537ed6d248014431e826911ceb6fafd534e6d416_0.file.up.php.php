<?php
/* Smarty version 3.1.29, created on 2016-05-03 21:09:26
  from "E:\phpstudy\WWW\mvc\view\article\up.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5728a306c3d558_04040569',
  'file_dependency' => 
  array (
    '537ed6d248014431e826911ceb6fafd534e6d416' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\article\\up.php',
      1 => 1462280942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_5728a306c3d558_04040569 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="?a=up_pro&c=type" method="post">

<div style="margin:30px 0px 10px 0px;"><a href="javascript:displayToggle('sort_new', 2);">添加分类+</a></div>

<div id="sort_new" class="item_edit">

   <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['t_id'];?>
" name="id">
	
	<li><input maxlength="200" style="width:243px;" class="input" name="name" id="sortname" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['t_name'];?>
" /> 名称<span class="required">*</sapn></li>

	<li><input maxlength="200" style="width:243px;" class="input" name="asname" id="alias" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['asname'];?>
" /> 别名 (用于URL的友好显示)</li>
	<?php if ($_smarty_tpl->tpl_vars['arr']->value['is_show'] == 1) {?>
	<li><input type="radio" name="is_show" value='1' checked="">显示<input type="radio" name="is_show" value = "0">不显示</li>
	<?php } else { ?>
	<li><input type="radio" name="is_show" value='1' >显示<input type="radio" name="is_show" value = "0" checked="">不显示</li>
	<?php }?>

	<li>分类描述<br />

	<textarea name="miaoshu" type="text" style="width:240px;height:60px;overflow:auto;" class="textarea"><?php echo $_smarty_tpl->tpl_vars['arr']->value['miaoshu'];?>
</textarea></li>
    <input name="token" id="token" value="5bf8c497aa59f33d43b8d6f0d170730d" type="hidden" />

	<li><input type="submit" id="addsort" value="修改" class="button"/><span id="alias_msg_hook"></span></li>

</div>

</form><?php }
}
