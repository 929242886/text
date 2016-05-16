{include file='index/header.php'}
<div id="contentleft">
	
	<h2>{$ping.title}</h2>
	<p class="date">{$ping.datetime}  <a href="http://localhost/src/?author=1" title="fdsfdfdfsfsdff 929242886@qq.com">{$ping.author}</a> 	    </p>
	{$ping.content}	
	
		
		<a name="comments"></a>
	<p class="comment-header"><b>评论：</b></p>
	{foreach from =$arr5 item=pi}
			<div class="comment" id="comment-{$pi.id}">
		<a name="{$pi.id}"></a>
		<div class="avatar"><img src="http://www.gravatar.com/avatar/ac8819141c8b4eac673f263e97f9d7e4?s=40&d=mm&r=g" /></div>		<div class="comment-info">
			<b><a href="http://localhost/src/" target="_blank">{$pi.user}</a> </b><br /><span class="comment-time">{$pi.datetime}</span>
			<div class="comment-content">{$pi.content}</div>
			<div class="comment-reply"><a href="#comment-{$pi.id}" onclick="commentReply({$pi.id},this)">回复</a></div>
		</div>
			</div>
			{/foreach}
		
	    <div id="pagenavi">
	        </div>
		<div id="comment-place">
	<div class="comment-post" id="comment-post">
		<div class="cancel-reply" id="cancel-reply" style="display:none"><a href="javascript:void(0);" onclick="cancelReply()">取消回复</a></div>
		<p class="comment-header"><b>发表评论：</b><a name="respond"></a></p>
		<form method="post" name="commentform" action="?a=lun&c=index" id="commentform">
			<input type="hidden" name="gid" value="{$ping.id}" />
						<p><textarea name="comment" id="comment" rows="10" tabindex="4"></textarea></p>
			<p> <input type="submit" id="comment_submit" value="发表评论" tabindex="6" /></p>
			<input type="hidden" name="pid" id="comment-pid" value="0" size="22" tabindex="1"/>
		</form>
	</div>
	</div>
		<div style="clear:both;"></div>
</div><!--end #contentleft-->
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