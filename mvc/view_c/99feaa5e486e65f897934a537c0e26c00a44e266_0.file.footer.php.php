<?php
/* Smarty version 3.1.29, created on 2016-05-03 10:46:42
  from "E:\phpstudy\WWW\mvc\view\admin\footer.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57281112082987_31576707',
  'file_dependency' => 
  array (
    '99feaa5e486e65f897934a537c0e26c00a44e266' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\mvc\\view\\admin\\footer.php',
      1 => 1461889724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57281112082987_31576707 ($_smarty_tpl) {
?>
<div class="clear"></div>

<div id="about">


    <span id="upmsg"></span>

</div>

</div>

</div>


<?php echo '<script'; ?>
>

$(document).ready(function(){

    $(".box2").focus(function(){

        $(this).val('').css('height','50px').unbind('focus');

        $(".tbutton").show();

    });

    $(".box2").keyup(function(){

       var t=$(this).val();

       var n = 140 - t.length;

       if (n>=0){

         $(".tbutton span").html("(你还可以输入"+n+"字)");

       }else {

         $(".tbutton span").html("<span style=\"color:#FF0000\">(已超出"+Math.abs(n)+"字)</span>");

       }

    });

});

function closet(){

    $(".tbutton").hide();

    $(".tbutton span").html("(你还可以输入140字)");

    $(".box2").val('用微语记录生活……').css('height','17px').bind('focus',function(){

        $(this).val('').css('height','50px').unbind('focus');

        $(".tbutton").show();});

}

function checkt(){

    var t=$(".box2").val();

    var n=140 - t.length;


}

<?php echo '</script'; ?>
>

	</div><!--end container-->

	<div id="footer">欢迎使用 zhangxinboke </div>

</div><!--end mainpage-->

</body>

</html><?php }
}
