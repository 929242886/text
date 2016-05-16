<?php
/* Smarty version 3.1.29, created on 2016-05-03 22:25:59
  from "E:\phpstudy\WWW\mvc\view\link\index.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5728b4f7936b38_28735479',
  'file_dependency' => 
  array (
    '20a4d93f257b1e2b9d0e1390eca8a7334c15b7cd' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\link\\index.php',
      1 => 1462281424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_5728b4f7936b38_28735479 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class=containertitle><b>友情链接管理</b>
</div>
<div class=line></div>
<form action="?a=order_up&c=link" method="post">
  <table width="100%" id="adm_link_list" class="item_list">
    <thead>
      <tr>
	  	<th width="50"><b>序号</b></th>
	  	<th width="100"><b>链接</b></th>
        <th width="100"><b>链接</b></th>
        <th width="80" class="tdcenter"><b>状态</b></th>
		<th width="400"><b>描述</b></th>
        <th width="100"></th>
      </tr>
    </thead>
    <tbody>
	  <?php
$_from = $_smarty_tpl->tpl_vars['re']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_arr_0_saved_item = isset($_smarty_tpl->tpl_vars['arr']) ? $_smarty_tpl->tpl_vars['arr'] : false;
$_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['arr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->_loop = true;
$__foreach_arr_0_saved_local_item = $_smarty_tpl->tpl_vars['arr'];
?>
      <tr>
      <input type="hidden" name = 'id[]' value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">
		<td><input class="num_input" name="order[]" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['order'];?>
" maxlength="4" /></td>
		<td>
		<a href="?a=link_up&c=link&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
</a>
		</td>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['arr']->value['url'];?>
" target="_blank"  title="修改链接"><?php echo $_smarty_tpl->tpl_vars['arr']->value['url'];?>
</a></td>
		<td class="tdcenter">
				<a href="?a=show_up&c=link&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
&show=<?php echo $_smarty_tpl->tpl_vars['arr']->value['is_show'];?>
" title="点击隐藏导航">
					<?php if ($_smarty_tpl->tpl_vars['arr']->value['is_show'] == 1) {?>
					显示
					<?php } else { ?>
					不显示
					<?php }?>
				</a>
				</td>
		
        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['desc'];?>
</td>
        <td>
        <a href="?a=link_up&c=link&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">编辑</a>
        <a href="?a=link_del&c=link&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" class="care">删除</a>
        </td>
      </tr>
      <?php
$_smarty_tpl->tpl_vars['arr'] = $__foreach_arr_0_saved_local_item;
}
if ($__foreach_arr_0_saved_item) {
$_smarty_tpl->tpl_vars['arr'] = $__foreach_arr_0_saved_item;
}
?>
			
	    </tbody>
	     
  </table>
  <div class="list_footer"><input type="submit" value="改变排序" class="button" /></div>
</form>
<div class="page"> (有<?php echo $_smarty_tpl->tpl_vars['count']->value[0]['count'];?>
条连接)</div> 
<form action="?a=link_add&c=link" method="post" name="link" id="link">
<div style="margin:30px 0px 10px 0px;"><a href="javascript:displayToggle('link_new', 2);">添加链接+</a></div>
<div id="link_new" class="item_edit">
	<li><input maxlength="4" style="width:30px;" required="" class="input" name="order" /> 序号</li>
	<li><input maxlength="200" required="" style="width:232px;" class="input" name="name" /> 名称<span class="required">*</sapn></li>
	<li><input required="" maxlength="200" style="width:232px;" class="input" name="url" /> 地址<span class="miaoshu">*</sapn></li>
	<li>描述</li>
	<li><textarea required="" name="miaoshu" type="text" class="textarea" style="width:230px;height:60px;overflow:auto;"></textarea></li>
	<li><input type="submit" name="" value="添加链接"  /></li>
</div>
</form>
<?php echo '<script'; ?>
>
$("#link_new").css('display', $.cookie('em_link_new') ? $.cookie('em_link_new') : 'none');
$(document).ready(function(){
	$("#adm_link_list tbody tr:odd").addClass("tralt_b");
	$("#adm_link_list tbody tr")
});
setTimeout(hideActived,2600);
$("#menu_link").addClass('sidebarsubmenu1');
<?php echo '</script'; ?>
>	</div><!--end container-->
	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>
</div><!--end mainpage-->
</body>
</html><?php }
}
