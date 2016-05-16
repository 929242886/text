<?php
/* Smarty version 3.1.29, created on 2016-05-03 17:49:47
  from "E:\phpstudy\WWW\mvc\view\caogao\article_sou.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5728743b443591_60708369',
  'file_dependency' => 
  array (
    'c96e32047f7aebc7de6c493f6baf8d8528f527ec' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\caogao\\article_sou.php',
      1 => 1462268655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_5728743b443591_60708369 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class=containertitle><b>文章管理</b>
</div>
<div class=line></div>
<div class="filters">
<div id="f_title">
	<div style="float:left; margin-top:8px;">
		<span class="filter"><a href="./admin_log.php?">全部</a></span>
        <span id="f_t_sort">
            <select name="bysort" id="seach" onchange="seach();" style="width:110px;">
            <option value="" selected="selected">按分类查看...</option>
            <?php
$_from = $_smarty_tpl->tpl_vars['type']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_t_0_saved_item = isset($_smarty_tpl->tpl_vars['t']) ? $_smarty_tpl->tpl_vars['t'] : false;
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$__foreach_t_0_saved_local_item = $_smarty_tpl->tpl_vars['t'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['t_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['t']->value['t_name'];?>
</option>
             <?php
$_smarty_tpl->tpl_vars['t'] = $__foreach_t_0_saved_local_item;
}
if ($__foreach_t_0_saved_item) {
$_smarty_tpl->tpl_vars['t'] = $__foreach_t_0_saved_item;
}
?>
            </select>
        </span>
        <span id="f_t_sort">
            <select name="author" id="author" onchange="au_seach();" style="width:110px;">
            <option value="" selected="selected">按作者查看...</option>
            <?php
$_from = $_smarty_tpl->tpl_vars['author']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_t_1_saved_item = isset($_smarty_tpl->tpl_vars['t']) ? $_smarty_tpl->tpl_vars['t'] : false;
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$__foreach_t_1_saved_local_item = $_smarty_tpl->tpl_vars['t'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
" ><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
</option>
             <?php
$_smarty_tpl->tpl_vars['t'] = $__foreach_t_1_saved_local_item;
}
if ($__foreach_t_1_saved_item) {
$_smarty_tpl->tpl_vars['t'] = $__foreach_t_1_saved_item;
}
?>
            </select>
        </span>
                <span id="f_t_tag"><a href="javascript:void(0);">按标签查看</a></span>
	</div>
	<div style="float:right;">
		<form action="?a=article_sou&c=article" method="post">
		<input type="text" id="input_s" name="keyword"><input value='搜索' type="submit">
				</form>
	</div>
	<div style="clear:both"></div>
</div>
<div id="f_tag" style="display:none;">
	标签：
	还没有标签</div>
</div>
<form action="?a=caogao_add&c=article" method="post" name="form_log" id="form_log">
  <input type="hidden" name="pid" value="">
<div id='span'>
  <table width="100%" id="adm_log_list" class="item_list">
  <thead>
      <tr>
        <th width="511" colspan="2"><b>标题</b></th>
				
				<th width="100"><b>作者</b></th>
        <th width="146"><b>分类</b></th>
        <th width="130"><b><a href="./admin_log.php?sortDate=DESC">时间</a></b></th>
		<th width="39" class="tdcenter"><b><a href="./admin_log.php?sortComm=ASC">删除</a></b></th>
      </tr>
	</thead>
 	<tbody>
	     <?php if ($_smarty_tpl->tpl_vars['re']->value) {?>
	      <?php
$_from = $_smarty_tpl->tpl_vars['re']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_2_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_2_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?> <tr>
      <td width="21"><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="ids" /></td>
      <td width="490"><a href="write_log.php?action=edit&gid=1"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
            	              <span style="display:none; margin-left:8px;">
		      </span>
      </td>
	  	  
	        <td><a href="./admin_log.php?uid=1"><?php echo $_smarty_tpl->tpl_vars['v']->value['author'];?>
</a></td>
      <td><a href="./admin_log.php?sid=-1"><?php echo $_smarty_tpl->tpl_vars['v']->value['t_name'];?>
</a></td>
      <td><?php echo $_smarty_tpl->tpl_vars['v']->value['datetime'];?>
</td>
	  <td class="tdcenter"><a href="?a=article_del&c=article&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a></td>
	  <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_local_item;
}
if ($__foreach_v_2_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_item;
}
?>
    <?php } else { ?>
    <center><h1>搜索无内容</h1></center>
    <?php }?>
		</tbody>
    
	</table> </div>
	
    <input name="token" id="token" value="1d294c285692ce19148855d8ff429fb4" type="hidden" />
	<input name="operate" id="operate" value="" type="hidden" />
	<div class="list_footer">
	<a href="javascript:void(0);" id="select_all">全选</a> 选中项：
		<input type="submit" value = "放入草稿箱"> 

	   
    
	
	
		</div>
</form>

<?php echo '<script'; ?>
 src="./common/js/jquery-1.7.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(document).ready(function(){
	$("#adm_log_list tbody tr:odd").addClass("tralt_b");
	$("#adm_log_list tbody tr")

});
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
    window.open("?a=article_seach&c=article&id= "+ obj.value +"");
}
function selectUser(obj) {
    window.open("./admin_log.php?uid="+obj.value+"", "_self");
}
$("#menu_log").addClass('sidebarsubmenu1');
function seach(){
							
			var seach = $("#seach").val();
			//alert(seach);
			$.get("?a=article_seach&c=article", { id: seach },
  function(data){
     $("#span").html(data);
  });
							
		}
<?php echo '</script'; ?>
>	</div><!--end container-->
	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>
</div><!--end mainpage-->
</body>
</html><?php }
}
