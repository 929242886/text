{include file='index/header.php'}
<div id="contentleft">
      {foreach from=$arr2 item=v}
	<h2><a href="">{$v.title}</a></h2>
	<p class="date">{date('Y-m-d H:i:s',$v.date)}<a href="#" >张昕</a> 
		</p>
	{$v.content}	<p class="tag"></p>
	<p class="count">
	<a href="index.php?c=index&a=ping&gid={$v.id}">评论({$v.dianzan})</a>
	浏览量({$v.liulan})
	</p>
	{/foreach}
	<div style="clear:both;"></div>
<div id="pagenavi">
	</div>
</div><!-- end #contentleft-->


<ul id="sidebar">

	<li>

	<h3><span>日历</span></h3>

	<div id="calendar">

	</div>

	<script>sendinfo('http://localhost/src/?action=cal','calendar');</script>

	</li>

	<li>

	<h3><span>存档</span></h3>

	<ul id="record">

		<li><a href="http://localhost/src/?record=201604">2016年4月(1)</a></li>

		</ul>

	</li>

	<li>

	<h3><span>最新评论</span></h3>

	<ul id="newcomment">

		</ul>

	</li>

	<li>

	<h3><span>链接</span></h3>

	<ul id="link">
		{foreach from=$arr3 item=link}
		<li><a href="{$link.url}" title="{$link.desc}" target="_blank">{$link.name}</a></li>
		{/foreach}
		</ul>

	</li>

	<li>

	<h3><span>搜索</span></h3>

	<ul id="logsearch">

	<form name="keyform" method="get" action="">

	<input name="keyword" class="search" type="text" />

	</form>

	</ul>

	</li>

</ul><!--end #siderbar-->

</div><!--end #content-->

<div style="clear:both;"></div>

<div id="footerbar">

	Powered by <a href="" title="采用emlog系统">emlog</a> 

	<a href="n" target="_blank"></a> 	</div><!--end #footerbar-->

</div><!--end #wrap-->

<script>prettyPrint();</script>

</body>

</html>