<?php
/* Smarty version 3.1.29, created on 2016-05-03 11:24:27
  from "E:\phpstudy\WWW\mvc\view\admin\translate.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572819eb497c61_47306877',
  'file_dependency' => 
  array (
    'bbc587602de0f2035b1a8612262ccf219bb07132' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\admin\\translate.php',
      1 => 1461720297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_572819eb497c61_47306877 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="containertitle2">

<a class="navi1" href="./configure.php">基本设置</a>

<a class="navi4" href="./seo.php">SEO设置</a>

<a class="navi4" href="./style.php">后台风格</a>

<a class="navi2" href="./blogger.php">个人设置</a>

</div>

<form action="?a=upd&c=login" method="post" name="blooger" id="blooger" enctype="multipart/form-data">

<div class="item_edit" style="margin-left:30px;">

	<li>
<?php if ($_smarty_tpl->tpl_vars['re']->value['img']) {?>
   <img src="<?php echo $_smarty_tpl->tpl_vars['re']->value['img'];?>
" height="90" width="90" />
<?php } else { ?>
    <img src="./common/images/avatar.jpg"  />
<?php }?>
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['id'];?>
"/><br />

	头像<br />

    <input name="photo" type="file" /> (支持JPG、PNG格式图片)

	</li>

	<li>昵称<br /><input maxlength="50" style="width:200px;" class="input" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['username'];?>
" name="name" required="" /> </li>

	<li>邮箱<br /><input name="email" class="input" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['email'];?>
" style="width:200px;" maxlength="200" required=""/></li>

	<li>个人描述<br /><textarea name="description" class="textarea" style="width:300px; height:65px;" type="text" maxlength="500" required=""><?php echo $_smarty_tpl->tpl_vars['re']->value['miaoshu'];?>
</textarea></li>

	<li><input maxlength="200" style="width:200px;" class="input" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['name'];?>
" name="username"  required=""/> 登陆名</li>

    <li><input type="password" maxlength="200" class="input" id='newpass' style="width:200px;" value="" name="newpass"  required=""/> 新密码（不小于6位，不修改请留空）</li>

	<li><input type="password" maxlength="200" class="input" id='oncenewpass' style="width:200px;" value="" name="repeatpass" onblur='click_once_new_pwd()' required=""/><span  id='sp_once_new_pwd'>再输入一次新密码</span></li>

    <li>

        <input name="token" id="token" value="c979dbf9f48bbb907f3a36db82434f76" type="hidden" />

        <input type="submit" value="保存资料" class="button" />

    </li>

</div>

</form>

<?php echo '<script'; ?>
>

function click_once_new_pwd(){
							var new_pwd = $("#newpass").val();
							var once_new_pwd = $("#oncenewpass").val();							
								if(once_new_pwd==new_pwd){
								$("#sp_once_new_pwd").html("正确");
								}else{
								$("#sp_once_new_pwd").html("两次密码不一致");
								}
							
						}

$("#chpwd").css('display', $.cookie('em_chpwd') ? $.cookie('em_chpwd') : 'none');

setTimeout(hideActived,2600);


<?php echo '</script'; ?>
>	</div><!--end container-->

	<div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>

</div><!--end mainpage-->

</body>

</html><?php }
}
