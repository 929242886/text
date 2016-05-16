<?php
/* Smarty version 3.1.29, created on 2016-05-04 08:23:43
  from "E:\phpstudy\WWW\mvc\view\index\index.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5729410f8b8e79_55350648',
  'file_dependency' => 
  array (
    'c237b3ce4fa33c08a5c3f5fff7dd7cefbd38d02d' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\index\\index.php',
      1 => 1462321422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.php' => 1,
  ),
),false)) {
function content_5729410f8b8e79_55350648 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="contentleft">
      <?php
$_from = $_smarty_tpl->tpl_vars['arr2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
	<h2><a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h2>
	<p class="date"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['date']);?>
<a href="#" >张昕</a> 
		</p>
	<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
	<p class="tag"></p>
	<p class="count">
	<a href="index.php?c=index&a=ping&gid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">评论(<?php echo $_smarty_tpl->tpl_vars['v']->value['dianzan'];?>
)</a>
	浏览量(<?php echo $_smarty_tpl->tpl_vars['v']->value['liulan'];?>
)
	</p>
	<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
	<div style="clear:both;"></div>
<div id="pagenavi">
	</div>
</div><!-- end #contentleft-->


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
