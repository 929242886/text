{include file ="admin/header.php"}
<div class=containertitle><b>友情链接管理</b>
</div>
<div class=line></div>
<form action="?a=order_up&c=link" method="post">
  <table width="100%" id="adm_link_list" class="item_list">
    <thead>
      <tr>
	  	<th width="50"><b>序号</b></th>
	  	<th width="100"><b>链接</b></th>
        <th width="100"><b>链接</b></th>
        <th width="80" class="tdcenter"><b>状态</b></th>
		<th width="400"><b>描述</b></th>
        <th width="100"></th>
      </tr>
    </thead>
    <tbody>
	  {foreach from = $re item = arr}
      <tr>
      <input type="hidden" name = 'id[]' value="{$arr.id}">
		<td><input class="num_input" name="order[]" value="{$arr.order}" maxlength="4" /></td>
		<td>
		<a href="?a=link_up&c=link&id={$arr.id}">{$arr.name}</a>
		</td>
		<td><a href="{$arr.url}" target="_blank"  title="修改链接">{$arr.url}</a></td>
		<td class="tdcenter">
				<a href="?a=show_up&c=link&id={$arr.id}&show={$arr.is_show}" title="点击隐藏导航">
					{if $arr.is_show eq 1}
					显示
					{else}
					不显示
					{/if}
				</a>
				</td>
		
        <td>{$arr.desc}</td>
        <td>
        <a href="?a=link_up&c=link&id={$arr.id}">编辑</a>
        <a href="?a=link_del&c=link&id={$arr.id}" class="care">删除</a>
        </td>
      </tr>
      {/foreach}
			
	    </tbody>
	     
  </table>
  <div class="list_footer"><input type="submit" value="改变排序" class="button" /></div>
</form>
<div class="page"> (有{$count.0.count}条连接)</div> 
<form action="?a=link_add&c=link" method="post" name="link" id="link">
<div style="margin:30px 0px 10px 0px;"><a href="javascript:displayToggle('link_new', 2);">添加链接+</a></div>
<div id="link_new" class="item_edit">
	<li><input maxlength="4" style="width:30px;" required="" class="input" name="order" /> 序号</li>
	<li><input maxlength="200" required="" style="width:232px;" class="input" name="name" /> 名称<span class="required">*</sapn></li>
	<li><input required="" maxlength="200" style="width:232px;" class="input" name="url" /> 地址<span class="miaoshu">*</sapn></li>
	<li>描述</li>
	<li><textarea required="" name="miaoshu" type="text" class="textarea" style="width:230px;height:60px;overflow:auto;"></textarea></li>
	<li><input type="submit" name="" value="添加链接"  /></li>
</div>
</form>
<script>
$("#link_new").css('display', $.cookie('em_link_new') ? $.cookie('em_link_new') : 'none');
$(document).ready(function(){
	$("#adm_link_list tbody tr:odd").addClass("tralt_b");
	$("#adm_link_list tbody tr")
});
setTimeout(hideActived,2600);
$("#menu_link").addClass('sidebarsubmenu1');
</script>	</div><!--end container-->
	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>
</div><!--end mainpage-->
</body>
</html>