{include file ="admin/header.php"}
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
            {foreach from=$type item=t}
                        <option value="{$t.t_id}" >{$t.t_name}</option>
             {/foreach}
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
	     {if $re }
	      {foreach from = $re item=v} <tr>
      <td width="21"><input type="checkbox" name="id[]" value="{$v.id}" class="ids" /></td>
      <td width="490"><a href="write_log.php?action=edit&gid=1">{$v.title}</a>
            	              <span style="display:none; margin-left:8px;">
		      </span>
      </td>
	  	  
	        <td><a href="./admin_log.php?uid=1">{$v.author}</a></td>
      <td><a href="./admin_log.php?sid=-1">{$v.t_name}</a></td>
      <td>{$v.datetime}</td>
	  <td class="tdcenter"><a href="?a=article_del&c=article&id={$v.id}">删除</a></td>
	  {/foreach}
    {else}
    <center><h1>搜索无内容</h1></center>
    {/if}
		</tbody>
    
	</table> </div>
	
    <input name="token" id="token" value="1d294c285692ce19148855d8ff429fb4" type="hidden" />
	<input name="operate" id="operate" value="" type="hidden" />
	<div class="list_footer">
	<a href="javascript:void(0);" id="select_all">全选</a> 选中项：
		<input type="submit" value = "放入草稿箱"> 

	    <select name="top" id="top" onChange="changeTop(this);" style="width:90px;">
        <option value="" selected="selected">置顶操作...</option>
        <option value="top">首页置顶</option>
        <option value="sortop">分类置顶</option>
        <option value="notop">取消置顶</option>
    </select>
    
	<select name="sort" id="sort" onChange="changeSort(this);" style="width:110px;">
	<option value="" selected="selected">移动到分类...</option>

    	<option value="-1">未分类</option>
	</select>

	
		</div>
</form>

<script src="./common/js/jquery-1.7.1.js"></script>
<script>
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
</script>	</div><!--end container-->
	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>
</div><!--end mainpage-->
</body>
</html>