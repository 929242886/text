<?php
/* Smarty version 3.1.29, created on 2016-05-03 10:58:46
  from "E:\phpstudy\WWW\mvc\view\article\caogao.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572813e6b88ac3_29541407',
  'file_dependency' => 
  array (
    '7e81e81c63868a7ba43b3b9fc0e2a13f420a3c50' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\article\\caogao.php',
      1 => 1461757086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_572813e6b88ac3_29541407 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class=containertitle><b>草稿箱</b>

</div>

<div class=line></div>

<div class="filters">

<div id="f_title">

	

	

	<div style="clear:both"></div>

</div>

<div id="f_tag" style="display:none;">

	标签：

	还没有标签</div>

</div>

<form action="admin_log.php?action=operate_log" method="post" name="form_log" id="form_log">

  <input type="hidden" name="pid" value="draft">

  <table width="100%" id="adm_log_list" class="item_list">

  <thead>

      <tr>

        <th width="511" colspan="2"><b>标题</b></th>

				<th width="100"><b>作者</b></th>

        <th width="146"><b>分类</b></th>

        <th width="130"><b>时间</b></th>

		<th width="39" class="tdcenter"><b>删除</b></th>

		<th width="59" class="tdcenter"><b>发布</b></th>

      </tr>

	</thead>

 	<tbody>
			
		  <tr>
		 
			<?php if ($_smarty_tpl->tpl_vars['re']->value) {?>
			 <?php
$_from = $_smarty_tpl->tpl_vars['re']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ree_0_saved_item = isset($_smarty_tpl->tpl_vars['ree']) ? $_smarty_tpl->tpl_vars['ree'] : false;
$_smarty_tpl->tpl_vars['ree'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ree']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ree']->value) {
$_smarty_tpl->tpl_vars['ree']->_loop = true;
$__foreach_ree_0_saved_local_item = $_smarty_tpl->tpl_vars['ree'];
?>
		<tr><td width="511" colspan="2"><b><?php echo $_smarty_tpl->tpl_vars['ree']->value['title'];?>
</b></td>

				<td width="100"><b><?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['name'];?>
</b></td>
		

        <td width="100"><b>
        <?php if ($_smarty_tpl->tpl_vars['ree']->value['t_id'] == 1) {?>
		php
		<?php } elseif ($_smarty_tpl->tpl_vars['ree']->value['t_id'] == 2) {?>
		ajax
		<?php } else { ?>
		cache
		<?php }?>
        </b></td>

        <td width="200"><b><?php echo $_smarty_tpl->tpl_vars['ree']->value['datetime'];?>
</b></td>
        <th width="39" class="tdcenter"><b><a href="?a=del&c=article&id=<?php echo $_smarty_tpl->tpl_vars['ree']->value['id'];?>
">删除</a></b></th>

		<th width="59" class="tdcenter"><b><a href="?a=fabu&c=article&id=<?php echo $_smarty_tpl->tpl_vars['ree']->value['id'];?>
">发布</a></b></th>

		</tr>
		<?php
$_smarty_tpl->tpl_vars['ree'] = $__foreach_ree_0_saved_local_item;
}
if ($__foreach_ree_0_saved_item) {
$_smarty_tpl->tpl_vars['ree'] = $__foreach_ree_0_saved_item;
}
?>
		<?php } else { ?>
		 <td class="tdcenter" colspan="8">还没有文章</td>
		<?php }?>
		 </tr>

		</tbody>

	</table>

    <input name="token" id="token" value="21febf10bec7c8c7ececa73d9c2438b6" type="hidden" />

	<input name="operate" id="operate" value="" type="hidden" />

	

</form>



<?php echo '<script'; ?>
>



setTimeout(hideActived,2600);

function logact(act){

	if (getChecked('ids') == false) {

		alert('请选择要操作的文章');

		return;}


	$("#operate").val(act);

	$("#form_log").submit();

}

function changeSort(obj) {

	if (getChecked('ids') == false) {

		alert('请选择要操作的文章');

		return;}

	if($('#sort').val() == '')return;

	$("#operate").val('move');

	$("#form_log").submit();

}

function changeAuthor(obj) {

	if (getChecked('ids') == false) {

		alert('请选择要操作的文章');

		return;}

	if($('#author').val() == '')return;

	$("#operate").val('change_author');

	$("#form_log").submit();

}

function changeTop(obj) {

	if (getChecked('ids') == false) {

		alert('请选择要操作的文章');

		return;}

	if($('#top').val() == '')return;

	$("#operate").val(obj.value);

	$("#form_log").submit();

}

function selectSort(obj) {

    window.open("./admin_log.php?a=" + obj.value + "&pid=draft", "_self");

}

function selectUser(obj) {

    window.open("./admin_log.php?uid=" + obj.value + "&pid=draft", "_self");

}

$("#menu_draft").addClass('sidebarsubmenu1');

<?php echo '</script'; ?>
>	</div><!--end container-->

	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>

</div><!--end mainpage-->

</body>

</html><?php }
}
