{include file ="admin/header.php"}
<div class=containertitle><b>修改导航</b></div>
<div class=line></div>
<form action="?a=up_pro&c=nav" method="post">
<div class="item_edit">
	<li><input size="20" value="{$re.name}" name="name" /> 导航名称</li>
	<li>
	<input size="50" value="该导航地址由系统生成，无法修改" name="url" disabled="disabled" /> 导航地址，
	在新窗口打开
	{if $re.is_new eq 1}
	<input type="checkbox" style="vertical-align:middle;" value="1" name="is_new"  checked="" />
	{elseif $re.is_new eq 0}
	<input type="checkbox" style="vertical-align:middle;" value="0" name="is_new"   />
	{/if}
    </li>
    	<li>
	<input type="hidden" value="{$re.id}" name="id" />
	<input type="submit" value="保 存" class="button" />
	<input type="button" value="取 消" class="button" onclick="javascript: window.history.back();" />
	</li>
</div>
</form>
<script>
$("#menu_navbar").addClass('sidebarsubmenu1');
</script>	</div><!--end container-->
	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>
</div><!--end mainpage-->
</body>
</html>