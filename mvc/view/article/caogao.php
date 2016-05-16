{include file ="admin/header.php"}
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
		 
			{if $re}
			 {foreach from = $re item = ree}
		<tr><td width="511" colspan="2"><b>{$ree.title}</b></td>

				<td width="100"><b>{$_SESSION['name']}</b></td>
		

        <td width="100"><b>
        {if $ree.t_id eq 1}
		php
		{elseif $ree.t_id eq 2}
		ajax
		{else $ree.t_id eq 3}
		cache
		{/if}
        </b></td>

        <td width="200"><b>{$ree.datetime}</b></td>
        <th width="39" class="tdcenter"><b><a href="?a=del&c=article&id={$ree.id}">删除</a></b></th>

		<th width="59" class="tdcenter"><b><a href="?a=fabu&c=article&id={$ree.id}">发布</a></b></th>

		</tr>
		{/foreach}
		{else}
		 <td class="tdcenter" colspan="8">还没有文章</td>
		{/if}
		 </tr>

		</tbody>

	</table>

    <input name="token" id="token" value="21febf10bec7c8c7ececa73d9c2438b6" type="hidden" />

	<input name="operate" id="operate" value="" type="hidden" />

	

</form>



<script>



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

</script>	</div><!--end container-->

	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>

</div><!--end mainpage-->

</body>

</html>