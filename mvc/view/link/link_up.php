{include file ="admin/header.php"}
<div class=containertitle><b>编辑链接</b></div>
<div class=line></div>
<form action="?a=up_pro&c=link" method="post">
<div class="item_edit">
	<li><input size="40" value="{$re.name}" class="input" name="name" /> 名称<span class="required">*</sapn></li>
	<li><input size="40" value="{$re.url}" class="input" name="url" /> 地址<span class="required">*</sapn></li>
	<li>链接描述<br /><textarea name="desc" rows="3" class="textarea" cols="42">{$re.desc}</textarea></li>
	<li>
	<input type="hidden" value="{$re.id}" name="id" />
	<input type="submit" value="保 存" class="button" />
	<input type="button" value="取 消" class="button" onclick="javascript: window.history.back();" /></li>
</div>
</form>
<script>
$("#menu_link").addClass('sidebarsubmenu1');
</script>	</div><!--end container-->
	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>
</div><!--end mainpage-->
</body>
</html>