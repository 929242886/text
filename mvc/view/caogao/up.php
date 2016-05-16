{include file ="admin/header.php"}
<form action="?a=up_pro&c=type" method="post">

<div style="margin:30px 0px 10px 0px;"><a href="javascript:displayToggle('sort_new', 2);">添加分类+</a></div>

<div id="sort_new" class="item_edit">

   <input type="hidden" value="{$arr.id}" name="id">
	
	<li><input maxlength="200" style="width:243px;" class="input" name="name" id="sortname" value="{$arr.t_name}" /> 名称<span class="required">*</sapn></li>

	<li><input maxlength="200" style="width:243px;" class="input" name="asname" id="alias" value="{$arr.asname}" /> 别名 (用于URL的友好显示)</li>
	{if $arr.is_show eq 1}
	<li><input type="radio" name="is_show" value='1' checked="">显示<input type="radio" name="is_show" value = "0">不显示</li>
	{else}
	<li><input type="radio" name="is_show" value='1' >显示<input type="radio" name="is_show" value = "0" checked="">不显示</li>
	{/if}

	<li>分类描述<br />

	<textarea name="miaoshu" type="text" style="width:240px;height:60px;overflow:auto;" class="textarea">{$arr.miaoshu}</textarea></li>
    <input name="token" id="token" value="5bf8c497aa59f33d43b8d6f0d170730d" type="hidden" />

	<li><input type="submit" id="addsort" value="修改" class="button"/><span id="alias_msg_hook"></span></li>

</div>

</form>