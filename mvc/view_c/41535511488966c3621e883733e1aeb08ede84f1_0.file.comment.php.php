<?php
/* Smarty version 3.1.29, created on 2016-05-03 21:22:43
  from "E:\phpstudy\WWW\mvc\view\comment\comment.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5728a6230c9dc0_19530866',
  'file_dependency' => 
  array (
    '41535511488966c3621e883733e1aeb08ede84f1' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\comment\\comment.php',
      1 => 1462281761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_5728a6230c9dc0_19530866 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class=containertitle><b>评论管理</b>
</div>
<div class=line></div>
<form action="comment.php?action=admin_all_coms" method="post" name="form_com" id="form_com">
  <table width="100%" id="adm_comment_list" class="item_list">
  	<thead>
      <tr>
        <th width="369" colspan="2"><b>内容</b></th>
		<th width="300"><b>评论者</b></th>
        <th width="250"><b>所属文章</b></th>
      </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ar_0_saved_item = isset($_smarty_tpl->tpl_vars['ar']) ? $_smarty_tpl->tpl_vars['ar'] : false;
$_smarty_tpl->tpl_vars['ar'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ar']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ar']->value) {
$_smarty_tpl->tpl_vars['ar']->_loop = true;
$__foreach_ar_0_saved_local_item = $_smarty_tpl->tpl_vars['ar'];
?>
	     <tr>
        <td width="19"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['ar']->value['id'];?>
" name="id[]" class="id" /></td>
        <td width="350"><a href="comment.php?action=reply_comment&amp;cid=3" title="<?php echo $_smarty_tpl->tpl_vars['ar']->value['content'];?>
"><?php echo $_smarty_tpl->tpl_vars['ar']->value['content'];?>

		<?php if ($_smarty_tpl->tpl_vars['ar']->value['is_show'] == 0) {?>
		<span style="color: red">未审核</span>
		<?php }?>
        </a> 	        <br /><?php echo $_smarty_tpl->tpl_vars['ar']->value['date'];?>
		<span style=" margin-left:8px;">    
            <a href="?a=c_del&c=comment&id=<?php echo $_smarty_tpl->tpl_vars['ar']->value['id'];?>
" class="care">删除</a>
				<a href="?a=c_yin&c=comment&id=<?php echo $_smarty_tpl->tpl_vars['ar']->value['id'];?>
">隐藏</a>
				
				<?php if ($_smarty_tpl->tpl_vars['ar']->value['is_show'] == 0) {?>
		<a href="?a=c_shen&c=comment&id=<?php echo $_smarty_tpl->tpl_vars['ar']->value['id'];?>
">审核</a>
		<?php }?>
        
		</span>
		</td>
		<td><a href="http://localhost/src/" target="_blank">admin</a>  <br />来自：<?php echo $_smarty_tpl->tpl_vars['ar']->value['ip'];?>

            <a href="javascript: em_confirm('127.0.0.1', 'commentbyip', '8d19c5ab9fc43d0ae670268f2ee112a4');" title="删除来自该IP的所有评论" class="care">(X)</a></td>
		
        <td><a href="http://localhost/src/?post=4" target="_blank" title="查看该文章">waer</a></td>
     </tr>
     <?php
$_smarty_tpl->tpl_vars['ar'] = $__foreach_ar_0_saved_local_item;
}
if ($__foreach_ar_0_saved_item) {
$_smarty_tpl->tpl_vars['ar'] = $__foreach_ar_0_saved_item;
}
?>
	     
		</tbody>
  </table>
	<div class="list_footer">
	<a href="javascript:void(0);" id="select_all">全选</a> 选中项：
	<input type="button" onclick="del();" value="删除">
	<input type="button" onclick="hide();" value="隐藏">
	<input type="button" onclick="pub();" value="审核">
   
	<input name="operate" id="operate" value="" type="hidden" />
	</div>
    <div class="page"> (有<?php echo $_smarty_tpl->tpl_vars['count']->value[0]['count'];?>
条评论)</div> 
</form>
<?php echo '<script'; ?>
><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

function del(){

	var id = $(".id");
			var str='';
			for (var i = id.length - 1; i >= 0; i--) {
				if($(id[i]).prop('checked')){
					str+=','+$(id[i]).val();
				}
			}
			str=str.substr(1);
			
			$.get("?a=del_all&c=comment", { id: str},
			  function(data){
			    if(data == 1){
			    	location.href = '?a=index&c=comment'
			    }else{
			    	alert(删除失败);
			    }
			  });
}

function hide(){

	var id = $(".id");
			var str='';
			for (var i = id.length - 1; i >= 0; i--) {
				if($(id[i]).prop('checked')){
					str+=','+$(id[i]).val();
				}
			}
			str=str.substr(1);
			
			$.get("?a=hide_all&c=comment", { id: str},
			  function(data){
			    if(data == 1){
			    	location.href = '?a=index&c=comment'
			    }else{
			    	alert("隐藏失败");
			    }
			  });
}

function pub(){

	var id = $(".id");
			var str='';
			for (var i = id.length - 1; i >= 0; i--) {
				if($(id[i]).prop('checked')){
					str+=','+$(id[i]).val();
				}
			}
			str=str.substr(1);
			
			$.get("?a=pub_all&c=comment", { id: str},
			  function(data){
			    if(data == 1){
			    	location.href = '?a=index&c=comment'
			    }else{
			    	alert(123);
			    }
			  });
}

$(document).ready(function(){
	$('#select_all').click(function(){
		var id = $(".id");
		var str='';
		for (var i = id.length - 1; i >= 0; i--) {
			if($(id[i]).prop('checked')){
				$(id[i]).prop('checked',false);
			}else{
				$(id[i]).prop('checked',true);
			}
		}
	});
	$("#adm_comment_list tbody tr:odd").addClass("tralt_b");
	$("#adm_comment_list tbody tr")
});
setTimeout(hideActived,2600);
function commentact(act){
	if (getChecked('id') == false) {
		alert('请选择要操作的评论');
		return;
	}
	$("#operate").val(act);
	$("#form_com").submit();
}
$("#menu_cm").addClass('sidebarsubmenu1');
<?php echo '</script'; ?>
>	</div><!--end container-->
	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>
</div><!--end mainpage-->
</body>
</html><?php }
}
