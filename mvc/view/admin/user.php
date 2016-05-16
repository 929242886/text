{include file ="admin/header.php"}

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
 {foreach from=$re item = ree} 
         <tr>
         
          
        <td style="padding:3px; text-align:center;">{if $ree['img']}
   <img src="{$ree['img']}" height="40" width="40" />
{else}
    <img src="./common/images/avatar.jpg" height="40" width="40" />
{/if}</td>

        <td>

        {$ree['name']}<br />

        {if $ree['zhiwei'] eq 1}             
            创始人
            <a href="?a=translate&c=login&id={$ree['id']}">编辑</a>
            {else}
            作者
              <a href="?a=translate&c=login&id={$ree['id']}">编辑</a>
               <a href="?a=del&c=login&id={$ree.id}">删除</a>
        {/if}
                
            

               
        </td>

        <td></td>

        <td>{$ree.email}</td>

        <td class="tdcenter"><a href="./admin_log.php?uid=1">1</a></td>

     </tr>
{/foreach}
        </tbody>

  </table>

</form>

<div class="page"> (有{$count.0.count}位用户)</div> 

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

<script>

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

</script>   </div><!--end container-->

    <div id="footer">欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">emlog</a></div>

</div><!--end mainpage-->
<script>
    function click_once_new_pwd(){
                            var new_pwd = $("#new_pwd").val();
                            var once_new_pwd = $("#once_new_pwd").val();
                                if(once_new_pwd==new_pwd){
                                $("#sp_once_new_pwd").html("正确");
                                }else{
                                $("#sp_once_new_pwd").html("两次密码不一致");
                            }
                            
                        }
</script>
</body>

</html>