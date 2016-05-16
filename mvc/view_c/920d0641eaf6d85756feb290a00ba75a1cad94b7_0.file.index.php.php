<?php
/* Smarty version 3.1.29, created on 2016-05-03 21:04:53
  from "E:\phpstudy\WWW\mvc\view\article\index.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5728a1f5ce6d15_36271138',
  'file_dependency' => 
  array (
    '920d0641eaf6d85756feb290a00ba75a1cad94b7' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\article\\index.php',
      1 => 1462280692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_5728a1f5ce6d15_36271138 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="container">

<div class="containertitle"><b>写文章</b><span id="msg_2"></span></div>
<div id="msg"></div>
<form action="?a=article_add&c=article" method="post" enctype="multipart/form-data" id="addlog" name="addlog">
<div id="post">
    <div>
        <input required="" type="text" maxlength="200" name="title" id="title"/>
    </div>
    <div>
<span class="field">
            <textarea required="" id="editor1" onblur='editor1()' name="sit_content"><<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
></textarea>
            &nbsp;&nbsp;&nbsp;&nbsp;<sp id='sp_editor1'></sp>
        </span>
        <?php echo '<script'; ?>
 type="text/javascript">
        CKEDITOR.replace( 'editor1',
        {
            filebrowserBrowseUrl : './common/edit/ckeditor/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : './common/edit/ckeditor/ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl : './common/edit/ckeditor/ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl : './common/edit/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : './common/edit/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : './common/edit/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        });
        <?php echo '</script'; ?>
>

    </div>
    <div style="margin:10px 0px 5px 0px;">
        <label for="tag" id="tag_label" praceholder="">文章标签，逗号或空格分隔，过多的标签会影响系统运行效率</label>
        <input required="" name="tag" id="tag" maxlength="200"/>
        <span style="color:#2A9DDB;cursor:pointer;margin-right: 40px;"><a href="javascript:displayToggle('tagbox', 0);">已有标签+</a></span>
        <select name="sort" id="sort" style="width:130px;">
        <option value="-1">选择分类...</option>
        <?php
$_from = $_smarty_tpl->tpl_vars['re']->value;
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
            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['t_name'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
                </select>
            
        
        发布于：<input required=""  type="date" style="width:139px;" name="postdate" id="postdate" value=""/>
        <div id="tagbox">
        <?php if ($_smarty_tpl->tpl_vars['arr']->value) {?>
        <?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_1_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_1_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
            <a href="javascript: insertTag('<?php echo $_smarty_tpl->tpl_vars['v']->value['tagname'];?>
','tag');"><?php echo $_smarty_tpl->tpl_vars['v']->value['tagname'];?>
</a> 
        <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
if ($__foreach_v_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_1_saved_key;
}
?>
    <?php } else { ?>
    还没有设置过标签！
    <?php }?>
    </div>
    
    
    <div class="show_advset" onclick="displayToggle('advset', 1);">高级选项</div>
    <div id="advset">
    <div>文章摘要：</div>
    <div><textarea id="excerpt" name="excerpt" style="width:845px; height:260px;"></textarea></div>
    <div><span id="alias_msg_hook"></span>文章链接别名：(用于自定义文章链接。需要<a href="./seo.php" target="_blank">启用文章链接别名</a>)<span id="alias_msg_hook"></span></div>
    <div><input name="alias" id="alias" /></div>
    <div style="margin-top:3px;">
        文章访问密码：<input type="text" value="" name="password" id="password" style="width:80px;" />
        <span id="post_options">
        <select name="caogao" >
            <option value="0">发布</option>
            <option value="1">草稿</option>
        </select>
            <input type="checkbox"  name="top" id="top" />
            <label for="top">首页置顶</label>
            <input type="checkbox"  name="sortop" id="sortop" />
            <label for="sortop">分类置顶</label>
            <input type="checkbox"  name="is_sel" id="allow_remark"  />
            <label for="allow_remark">允许评论</label>
        </span>
    </div>
    </div>
    <div id="post_button">
        <input name="token" id="token" value="9233d1928dc31a17657daa1d0c40ff19" type="hidden" />
        <input type="hidden" name="ishide" id="ishide" value="">
        <input type="submit" value="发布文章" onclick="return checkform();" class="button" />
        <input type="hidden" name="author" id="author" value=1 />
    </div>
</div>
</form>

</div>
</body>
</html><?php }
}
