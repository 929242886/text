{include file = "admin/header.php"}
<div class=containertitle><b>标签管理</b>
</div>
<div class=line></div>
<form action="?c=tag&a=del" method="post" name="form_tag" id="form_tag">
<div>
<li>
<!-- <li style="margin:20px 30px">还没有标签，写文章的时候可以给文章打标签</li> -->
<li>
{foreach from=$arr item=vo}
<input type="checkbox" name="tag[]" class="ids" value="{$vo.id}">
<a href="?a=tag_up&c=tag&id={$vo.id}">{$vo.tagname}</a>
 &nbsp;&nbsp;&nbsp;
{/foreach}
</li>
<input name="token" id="token" value="a2965667ac0c83c9cd9125a9584cf489" type="hidden">
<li style="margin:20px 0px">
<a href="javascript:void(0);" id="select_all">全选</a> 选中项：
<a href="javascript:deltags();" class="care">删除</a>
</li>
</div>
</form>
<script>
$("#select_all").toggle(function () { $(".ids").attr("checked", "checked");},function () { $(".ids").removeAttr("checked");});
function deltags(){
	if (getChecked('ids') == false) {
		alert('请选择要删除的标签');
		return;
	}
	if(!confirm('你确定要删除所选标签吗？')){ return;}
	$("#form_tag").submit();
}
setTimeout(hideActived,2600);
$("#menu_tag").addClass('sidebarsubmenu1');
</script>	</div>