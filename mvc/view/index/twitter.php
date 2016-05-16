{include file = "index/header.php"}
<div id="contentleft">
<div id="tw">

    <ul>
     
    <li class="li">
    <div class="main_img"><img src="{$smarty.session.user.img}" width="32px" height="32px" /></div>
    <div class="post1"><span>{$smarty.session.user.name}</span>{$re.content}{if $re.img}{else}<img src="{$ar.img}" alt=""> {/if}<br /><br/></div>
    <div class="clear"></div>
    <div class="bttome">
        <p class="post"><a href="javascript:loadr('http://localhost/src/t/?action=getr&tid=2','2');">回复(<span id="rn_2">1</span>)</a></p>
        <p class="time">约 1 小时前 </p>
    </div>
	<div class="clear"></div>
   	<ul id="r_2" class="r"></ul>
        </li>

    <li class="li">
    
   
   	<ul id="r_1" class="r"></ul>
        </li>
    	<li id="pagenavi"><span></span></li>
    </ul>
</div><!--end #tw-->
</div><!--end #contentleft-->
<ul id="sidebar">
	<li>
	<h3><span>日历</span></h3>
	<div id="calendar">
	</div>
	<script>sendinfo('http://localhost/src/t/?action=cal','calendar');</script>
	</li>
	<li>
	<h3><span>存档</span></h3>
	<ul id="record">
		</ul>
	</li>
	<li>
	<h3><span>最新评论</span></h3>
	<ul id="newcomment">
		<li id="comment">admin	<br /><a href="http://localhost/src/?post=4#3">@admin：sdvsdvd</a></li>
		<li id="comment">admin	<br /><a href="http://localhost/src/?post=4#2">vdsv</a></li>
		<li id="comment">admin	<br /><a href="http://localhost/src/?post=4#1">sacscacs</a></li>
		</ul>
	</li>
	<li>
	<h3><span>链接</span></h3>
	<ul id="link">
		<li><a href="http://www.emlog.net" title="emlog官方主页" target="_blank">emlog</a></li>
		</ul>
	</li>
	<li>
	<h3><span>搜索</span></h3>
	<ul id="logsearch">
	<form name="keyform" method="get" action="http://localhost/src/index.php">
	<input name="keyword" class="search" type="text" />
	</form>
	</ul>
	</li>
</ul><!--end #siderbar-->
</div><!--end #content-->
<div style="clear:both;"></div>
<div id="footerbar">
	Powered by <a href="http://www.emlog.net" title="采用emlog系统">emlog</a> 
	<a href="http://www.miibeian.gov.cn" target="_blank"></a> 	</div><!--end #footerbar-->
</div><!--end #wrap-->
<script>prettyPrint();</script>
</body>
</html>