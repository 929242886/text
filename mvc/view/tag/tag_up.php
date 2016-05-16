{include file = "admin/header.php"}
<div class=containertitle><b>标签管理</b>
</div>
<div class=line></div>
<form action="?a=up_pro&c=tag" method="post" name="form_tag" id="form_tag">
<div>
<li>
<!-- <li style="margin:20px 30px">还没有标签，写文章的时候可以给文章打标签</li> -->
<li>
<tr>
	
	<td>
	<input type="hidden" value="{$re.id}" name="id">
		<input type="text" value="{$re.tagname}" name="tagname">
	</td>
	
</tr>
<tr>
	<td><input type="submit" value="修改"></td>
</tr>
</li>
<input name="token" id="token" value="a2965667ac0c83c9cd9125a9584cf489" type="hidden">
<li style="margin:20px 0px">

</li>
</div>
</form>
	</div>