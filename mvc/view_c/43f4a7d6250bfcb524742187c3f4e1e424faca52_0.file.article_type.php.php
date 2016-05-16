<?php
/* Smarty version 3.1.29, created on 2016-05-03 21:03:51
  from "E:\phpstudy\WWW\mvc\view\article\article_type.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5728a1b7d17784_08811885',
  'file_dependency' => 
  array (
    '43f4a7d6250bfcb524742187c3f4e1e424faca52' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\article\\article_type.php',
      1 => 1462280631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_5728a1b7d17784_08811885 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class=containertitle><b>分类管理</b>

</div>

<div class=line></div>

<form  method="post" action="?a=order_up&c=type">

	<table width="100%" id="adm_sort_list" class="item_list">

		<thead>

			<tr>

			<th width="55"><b>序号</b></th>

			<th width="160"><b>名称</b></th>

			<th width="160"><b>是否显示</b></th>

            <th width="180"><b>描述</b></th>

			<th width="130"><b>别名</b></th>

			<th width="60">操作</th>

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

		<td>

			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['t_id'];?>
" class="sort_id" name="id[]" />

			<input maxlength="4" class="num_input" name="order[]" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['order'];?>
" />

		</td>

		<td class="sortname">
			<a href="?a=up&c=type&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['t_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['arr']->value['t_name'];?>
</a>
            

        </td>
        <td class="sortname">
        <a href="?a=show_up&c=type&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['t_id'];?>
&show=<?php echo $_smarty_tpl->tpl_vars['arr']->value['is_show'];?>
" title="点击隐藏导航">
					<?php if ($_smarty_tpl->tpl_vars['arr']->value['is_show'] == 1) {?>
					显示
					<?php } else { ?>
					不显示
					<?php }?>
				</a>
				
        </td>

		<td><?php echo $_smarty_tpl->tpl_vars['arr']->value['miaoshu'];?>
</td>

        <td class="alias"><?php echo $_smarty_tpl->tpl_vars['arr']->value['asname'];?>
</td>


		<td>

			<a href="?a=up&c=type&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['t_id'];?>
">编辑</a>

			<a href="?a=del&c=type&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['t_id'];?>
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

<form action="?a=type_add&c=type" method="post">

<div style="margin:30px 0px 10px 0px;"><a href="javascript:displayToggle('sort_new', 2);">添加分类+</a></div>

<div id="sort_new" class="item_edit">

   

	<li><input required="" maxlength="200" style="width:243px;" class="input" name="name" id="sortname" /> 名称<span class="required">*</sapn></li>

	<li><input required="" maxlength="200" style="width:243px;" class="input" name="asname" id="alias" /> 别名 (用于URL的友好显示)</li>
	<li><input type="radio" name="is_show" value='1'>显示<input type="radio" name="is_show" checked="" value = "0">不显示</li>


	<li>分类描述<br />

	<textarea required="" name="miaoshu" type="text"  site = "20" maxlength="20" style="width:240px;height:60px;overflow:auto;" class="textarea"></textarea></li>

    <input name="token" id="token" value="5bf8c497aa59f33d43b8d6f0d170730d" type="hidden" />

	<li><input type="submit" id="addsort" value="添加新分类" class="button"/><span id="alias_msg_hook"></span></li>

</div>

</form>

<?php echo '<script'; ?>
>

$("#sort_new").css('display', $.cookie('em_sort_new') ? $.cookie('em_sort_new') : 'none');


function issortalias(a){

	var reg1=/^[\w-]*$/;

	var reg2=/^[\d]+$/;

	if(!reg1.test(a)) {

		return 1;

	}else if(reg2.test(a)){

		return 2;

	}else if(a=='post' || a=='record' || a=='sort' || a=='tag' || a=='author' || a=='page'){

		return 3;

	} else {

		return 0;

	}

}

function checksortalias(){

	var a = $.trim($("#alias").val());

	if (1 == issortalias(a)){

		$("#addsort").attr("disabled", "disabled");

		$("#alias_msg_hook").html('<span id="input_error">别名错误，应由字母、数字、下划线、短横线组成</span>');

	}else if (2 == issortalias(a)){

		$("#addsort").attr("disabled", "disabled");

		$("#alias_msg_hook").html('<span id="input_error">别名错误，不能为纯数字</span>');

	}else if (3 == issortalias(a)){

		$("#addsort").attr("disabled", "disabled");

		$("#alias_msg_hook").html('<span id="input_error">别名错误，与系统链接冲突</span>');

	}else {

		$("#alias_msg_hook").html('');

		$("#msg").html('');

		$("#addsort").attr("disabled", false);

	}

}

$(document).ready(function(){

	$("#adm_sort_list tbody tr:odd").addClass("tralt_b");

	$("#adm_sort_list tbody tr")



	$("#menu_sort").addClass('sidebarsubmenu1');

});

<?php echo '</script'; ?>
>	</div><!--end container-->

	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>

</div><!--end mainpage-->

</body>

</html><?php }
}
