<?php
/* Smarty version 3.1.29, created on 2016-05-03 20:59:02
  from "E:\phpstudy\WWW\mvc\view\admin\user.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5728a0960b9283_65024323',
  'file_dependency' => 
  array (
    '3b1e34fc126ee04c016a920d3ac708de31697aaf' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\admin\\user.php',
      1 => 1462280338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.php' => 1,
  ),
),false)) {
function content_5728a0960b9283_65024323 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class=containertitle><b>用户管理</b>

</div>

<div class=line></div>

<form action="comment.php?action=admin_all_coms" method="post" name="form" id="form">

  <table width="100%" id="adm_comment_list" class="item_list">

    <thead>

      <tr>

        <th width="60"></th>

        <th width="220"><b>用户</b></th>

        <th width="250"><b>描述</b></th>

        <th width="240"><b>电子邮件</b></th>

        <th width="30" class="tdcenter"><b>文章</b></th>

      </tr>

    </thead>

    <tbody>
 <?php
$_from = $_smarty_tpl->tpl_vars['re']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ree_0_saved_item = isset($_smarty_tpl->tpl_vars['ree']) ? $_smarty_tpl->tpl_vars['ree'] : false;
$_smarty_tpl->tpl_vars['ree'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ree']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ree']->value) {
$_smarty_tpl->tpl_vars['ree']->_loop = true;
$__foreach_ree_0_saved_local_item = $_smarty_tpl->tpl_vars['ree'];
?> 
         <tr>
         
          
        <td style="padding:3px; text-align:center;"><?php if ($_smarty_tpl->tpl_vars['ree']->value['img']) {?>
   <img src="<?php echo $_smarty_tpl->tpl_vars['ree']->value['img'];?>
" height="40" width="40" />
<?php } else { ?>
    <img src="./common/images/avatar.jpg" height="40" width="40" />
<?php }?></td>

        <td>

        <?php echo $_smarty_tpl->tpl_vars['ree']->value['name'];?>
<br />

        <?php if ($_smarty_tpl->tpl_vars['ree']->value['zhiwei'] == 1) {?>             
            创始人
            <a href="?a=translate&c=login&id=<?php echo $_smarty_tpl->tpl_vars['ree']->value['id'];?>
">编辑</a>
            <?php } else { ?>
            作者
              <a href="?a=translate&c=login&id=<?php echo $_smarty_tpl->tpl_vars['ree']->value['id'];?>
">编辑</a>
               <a href="?a=del&c=login&id=<?php echo $_smarty_tpl->tpl_vars['ree']->value['id'];?>
">删除</a>
        <?php }?>
                
            

               
        </td>

        <td></td>

        <td><?php echo $_smarty_tpl->tpl_vars['ree']->value['email'];?>
</td>

        <td class="tdcenter"><a href="./admin_log.php?uid=1">1</a></td>

     </tr>
<?php
$_smarty_tpl->tpl_vars['ree'] = $__foreach_ree_0_saved_local_item;
}
if ($__foreach_ree_0_saved_item) {
$_smarty_tpl->tpl_vars['ree'] = $__foreach_ree_0_saved_item;
}
?>
        </tbody>

  </table>

</form>

<div class="page"> (有<?php echo $_smarty_tpl->tpl_vars['count']->value[0]['count'];?>
位用户)</div> 

<form action="?a=user_add&c=login" method="post">

<div style="margin:30px 0px 10px 0px;"><a href="javascript:displayToggle('user_new', 2);">添加用户+</a></div>

<div id="user_new" class="item_edit">

    <li>

    <select name="zhiwei" id="role" class="input">

        <option value="0">作者（投稿人）</option>

        <option value="1">管理员</option>

    </select>

    </li>

    <li><input name="login" type="text" id="userss" value="" style="width:180px;" onblur="users();" required="" class="input" /> 
    <span id="sp_user">用户名</span>
    </li>

    <li><input name="password" type="password" id="new_pwd" value="" style="width:180px;" required="" class="input" /> 密码 (大于6位)</li>

    <li><input name="password2" type="password" id="once_new_pwd" value="" style="width:180px;" required="" class="input" onblur="click_once_new_pwd();" /><span  id='sp_once_new_pwd'>重复密码</span> </li>
        
   

    <input name="token" id="token" value="9820c74eeb26e4829f8d30918972d1f0" type="hidden" />

    <li><input type="submit" name="" value="添加用户"  /></li>

</div>

</form>

<?php echo '<script'; ?>
>

function users() {
   var userss = $("#userss").val();
   $.get("?a=user_only&c=login", { userss: userss},
              function(data){
               $("#sp_user").html(data);
              });
}

$("#user_new").css('display', $.cookie('em_user_new') ? $.cookie('em_user_new') : 'none');

$(document).ready(function(){

    $("#adm_comment_list tbody tr:odd").addClass("tralt_b");

    

});

setTimeout(hideActived,2600);

$("#menu_user").addClass('sidebarsubmenu1');

<?php echo '</script'; ?>
>   </div><!--end container-->

    <div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>

</div><!--end mainpage-->
<?php echo '<script'; ?>
>
    function click_once_new_pwd(){
                            var new_pwd = $("#new_pwd").val();
                            var once_new_pwd = $("#once_new_pwd").val();
                                if(once_new_pwd==new_pwd){
                                $("#sp_once_new_pwd").html("正确");
                                }else{
                                $("#sp_once_new_pwd").html("两次密码不一致");
                            }
                            
                        }
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
