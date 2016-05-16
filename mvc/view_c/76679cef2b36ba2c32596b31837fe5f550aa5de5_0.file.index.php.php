<?php
/* Smarty version 3.1.29, created on 2016-05-03 21:20:20
  from "E:\phpstudy\WWW\mvc\view\nav\index.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5728a5942d8895_48712037',
  'file_dependency' => 
  array (
    '76679cef2b36ba2c32596b31837fe5f550aa5de5' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\nav\\index.php',
      1 => 1462281619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_5728a5942d8895_48712037 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class=containertitle><b>导航管理</b>

</div>

<div class=line></div>

<form action="?a=order_up&c=nav" method="post">

  <table width="100%" id="adm_navi_list" class="item_list">

    <thead>

      <tr>

	  	<th width="50"><b>序号</b></th>

        <th width="230"><b>导航</b></th>

        <th width="60" class="tdcenter"><b>状态</b></th>
        <th width="60" class="tdcenter"><b>新窗口</b></th>


		<th width="360"><b>地址</b></th>

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
	
		<td><input class="num_input" name="order[]" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['order'];?>
" maxlength="4" /></td>
		<input type="hidden" name = 'id[]' value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">
		<td>
		<a href="?a=nav_up&c=nav&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
</a>
		</td>

		<td class="tdcenter">

				<a href="?a=show_up&c=nav&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
&show=<?php echo $_smarty_tpl->tpl_vars['arr']->value['is_show'];?>
" title="点击隐藏导航">
					<?php if ($_smarty_tpl->tpl_vars['arr']->value['is_show'] == 1) {?>
					显示
					<?php } else { ?>
					不显示
					<?php }?>
				</a>

				</td>
				<td class="tdcenter">

				<a href="?a=new_up&c=nav&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
&new=<?php echo $_smarty_tpl->tpl_vars['arr']->value['is_new'];?>
" title="点击隐藏导航">
					<?php if ($_smarty_tpl->tpl_vars['arr']->value['is_new'] == 1) {?>
					是
					<?php } elseif ($_smarty_tpl->tpl_vars['arr']->value['is_new'] == 0) {?>
					不是
					<?php }?>
				</a>

				</td>

        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['url'];?>
</td>

        <td>

        <a href="?a=nav_up&c=nav&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">编辑</a>
        <a href="?a=nav_del&c=nav&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">删除</a>
                </td>
		<?php
$_smarty_tpl->tpl_vars['arr'] = $__foreach_arr_0_saved_local_item;
}
if ($__foreach_arr_0_saved_item) {
$_smarty_tpl->tpl_vars['arr'] = $__foreach_arr_0_saved_item;
}
?>
      </tr>

    	    </tbody>

  </table>

  <div class="list_footer"><input type="submit" value="改变排序" class="button" /></div>

</form>
<div class="page"> (有<?php echo $_smarty_tpl->tpl_vars['count']->value[0]['count'];?>
条连接)</div> 
<div id="navi_add">

<form action="?a=nav_add&c=nav" method="post" name="navi" id="navi">

<div>

	<h1 onclick="displayToggle('navi_add_custom', 2);">添加自定义导航+</h1>

	<ul id="navi_add_custom">

	<li><input required=""  style="width:30px;" name="order" /> 序号</li>

	<li><input required="" maxlength="200" style="width:100px;" name="name" /> 导航名称<span class="required">*</sapn></li>

	<li>

	<input required="" maxlength="200" style="width:130px;" name="url" id="url" /> 地址(带http)<span class="required">*</sapn></li>

    <li>在新窗口打开<input type="radio" style="vertical-align:middle;" value="1" name="is_new" />是<input checked="" type="radio" style="vertical-align:middle;" value="0" name="is_new" />不是</li>

	<li><input type="submit" name="" value="添加"  /></li>

	</ul>

</div>

</form>




<?php echo '<script'; ?>
>

$("#navi_add_custom").css('display', $.cookie('em_navi_add_custom') ? $.cookie('em_navi_add_custom') : '');

$("#navi_add_sort").css('display', $.cookie('em_navi_add_sort') ? $.cookie('em_navi_add_sort') : '');

$("#navi_add_page").css('display', $.cookie('em_navi_add_page') ? $.cookie('em_navi_add_page') : '');

$(document).ready(function(){

	$("#adm_navi_list tbody tr:odd").addClass("tralt_b");

	$("#adm_navi_list tbody tr")



});

setTimeout(hideActived,2600);

$("#menu_navbar").addClass('sidebarsubmenu1');

<?php echo '</script'; ?>
>	</div><!--end container-->

	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>

</div><!--end mainpage-->

</body>

</html><?php }
}
