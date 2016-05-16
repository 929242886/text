{include file ="admin/header.php"}
<div class=containertitle><b>导航管理</b>

</div>

<div class=line></div>

<form action="?a=order_up&c=nav" method="post">

  <table width="100%" id="adm_navi_list" class="item_list">

    <thead>

      <tr>

	  	<th width="50"><b>序号</b></th>

        <th width="230"><b>导航</b></th>

        <th width="60" class="tdcenter"><b>状态</b></th>
        <th width="60" class="tdcenter"><b>新窗口</b></th>


		<th width="360"><b>地址</b></th>

        <th width="100"></th>

      </tr>

    </thead>

    <tbody>

	  
{foreach from = $re item = arr}
      <tr>
	
		<td><input class="num_input" name="order[]" value="{$arr.order}" maxlength="4" /></td>
		<input type="hidden" name = 'id[]' value="{$arr.id}">
		<td>
		<a href="?a=nav_up&c=nav&id={$arr.id}">{$arr.name}</a>
		</td>

		<td class="tdcenter">

				<a href="?a=show_up&c=nav&id={$arr.id}&show={$arr.is_show}" title="点击隐藏导航">
					{if $arr.is_show eq 1}
					显示
					{else}
					不显示
					{/if}
				</a>

				</td>
				<td class="tdcenter">

				<a href="?a=new_up&c=nav&id={$arr.id}&new={$arr.is_new}" title="点击隐藏导航">
					{if $arr.is_new eq 1}
					是
					{elseif $arr.is_new eq 0}
					不是
					{/if}
				</a>

				</td>

        <td>{$arr.url}</td>

        <td>

        <a href="?a=nav_up&c=nav&id={$arr.id}">编辑</a>
        <a href="?a=nav_del&c=nav&id={$arr.id}">删除</a>
                </td>
		{/foreach}
      </tr>

    	    </tbody>

  </table>

  <div class="list_footer"><input type="submit" value="改变排序" class="button" /></div>

</form>
<div class="page"> (有{$count.0.count}条连接)</div> 
<div id="navi_add">

<form action="?a=nav_add&c=nav" method="post" name="navi" id="navi">

<div>

	<h1 onclick="displayToggle('navi_add_custom', 2);">添加自定义导航+</h1>

	<ul id="navi_add_custom">

	<li><input required=""  style="width:30px;" name="order" /> 序号</li>

	<li><input required="" maxlength="200" style="width:100px;" name="name" /> 导航名称<span class="required">*</sapn></li>

	<li>

	<input required="" maxlength="200" style="width:130px;" name="url" id="url" /> 地址(带http)<span class="required">*</sapn></li>

    <li>在新窗口打开<input type="radio" style="vertical-align:middle;" value="1" name="is_new" />是<input checked="" type="radio" style="vertical-align:middle;" value="0" name="is_new" />不是</li>

	<li><input type="submit" name="" value="添加"  /></li>

	</ul>

</div>

</form>




<script>

$("#navi_add_custom").css('display', $.cookie('em_navi_add_custom') ? $.cookie('em_navi_add_custom') : '');

$("#navi_add_sort").css('display', $.cookie('em_navi_add_sort') ? $.cookie('em_navi_add_sort') : '');

$("#navi_add_page").css('display', $.cookie('em_navi_add_page') ? $.cookie('em_navi_add_page') : '');

$(document).ready(function(){

	$("#adm_navi_list tbody tr:odd").addClass("tralt_b");

	$("#adm_navi_list tbody tr")



});

setTimeout(hideActived,2600);

$("#menu_navbar").addClass('sidebarsubmenu1');

</script>	</div><!--end container-->

	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>

</div><!--end mainpage-->

</body>

</html>