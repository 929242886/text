<?php
/* Smarty version 3.1.29, created on 2016-05-03 10:45:32
  from "E:\phpstudy\WWW\mvc\view\index\ping.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572810cc0e43e6_50913504',
  'file_dependency' => 
  array (
    '5acfdbcbb9eb2ecf042d29b75babc77c2ee2e7df' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\index\\ping.php',
      1 => 1462237472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.php' => 1,
  ),
),false)) {
function content_572810cc0e43e6_50913504 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="contentleft">
	
	<h2><?php echo $_smarty_tpl->tpl_vars['ping']->value['title'];?>
</h2>
	<p class="date"><?php echo $_smarty_tpl->tpl_vars['ping']->value['datetime'];?>
  <a href="http://localhost/src/?author=1" title="fdsfdfdfsfsdff 929242886@qq.com"><?php echo $_smarty_tpl->tpl_vars['ping']->value['author'];?>
</a> 	    </p>
	<?php echo $_smarty_tpl->tpl_vars['ping']->value['content'];?>
	
	
		
		<a name="comments"></a>
	<p class="comment-header"><b>评论：</b></p>
	<?php
$_from = $_smarty_tpl->tpl_vars['arr5']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pi_0_saved_item = isset($_smarty_tpl->tpl_vars['pi']) ? $_smarty_tpl->tpl_vars['pi'] : false;
$_smarty_tpl->tpl_vars['pi'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pi']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pi']->value) {
$_smarty_tpl->tpl_vars['pi']->_loop = true;
$__foreach_pi_0_saved_local_item = $_smarty_tpl->tpl_vars['pi'];
?>
			<div class="comment" id="comment-<?php echo $_smarty_tpl->tpl_vars['pi']->value['id'];?>
">
		<a name="<?php echo $_smarty_tpl->tpl_vars['pi']->value['id'];?>
"></a>
		<div class="avatar"><img src="http://www.gravatar.com/avatar/ac8819141c8b4eac673f263e97f9d7e4?s=40&d=mm&r=g" /></div>		<div class="comment-info">
			<b><a href="http://localhost/src/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['pi']->value['user'];?>
</a> </b><br /><span class="comment-time"><?php echo $_smarty_tpl->tpl_vars['pi']->value['datetime'];?>
</span>
			<div class="comment-content"><?php echo $_smarty_tpl->tpl_vars['pi']->value['content'];?>
</div>
			<div class="comment-reply"><a href="#comment-<?php echo $_smarty_tpl->tpl_vars['pi']->value['id'];?>
" onclick="commentReply(<?php echo $_smarty_tpl->tpl_vars['pi']->value['id'];?>
,this)">回复</a></div>
		</div>
			</div>
			<?php
$_smarty_tpl->tpl_vars['pi'] = $__foreach_pi_0_saved_local_item;
}
if ($__foreach_pi_0_saved_item) {
$_smarty_tpl->tpl_vars['pi'] = $__foreach_pi_0_saved_item;
}
?>
		
	    <div id="pagenavi">
	        </div>
		<div id="comment-place">
	<div class="comment-post" id="comment-post">
		<div class="cancel-reply" id="cancel-reply" style="display:none"><a href="javascript:void(0);" onclick="cancelReply()">取消回复</a></div>
		<p class="comment-header"><b>发表评论：</b><a name="respond"></a></p>
		<form method="post" name="commentform" action="?a=lun&c=index" id="commentform">
			<input type="hidden" name="gid" value="<?php echo $_smarty_tpl->tpl_vars['ping']->value['id'];?>
" />
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

	<?php echo '<script'; ?>
>sendinfo('http://localhost/src/?action=cal','calendar');<?php echo '</script'; ?>
>

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
		<?php
$_from = $_smarty_tpl->tpl_vars['arr3']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_link_1_saved_item = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['link']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
$__foreach_link_1_saved_local_item = $_smarty_tpl->tpl_vars['link'];
?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['desc'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>
</a></li>
		<?php
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_1_saved_local_item;
}
if ($__foreach_link_1_saved_item) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_1_saved_item;
}
?>
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

<?php echo '<script'; ?>
>prettyPrint();<?php echo '</script'; ?>
>

</body>

</html><?php }
}
