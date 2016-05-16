<div class="clear"></div>

<div id="about">


    <span id="upmsg"></span>

</div>

</div>

</div>


<script>

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

</script>

	</div><!--end container-->

	<div id="footer">欢迎使用 zhangxinboke </div>

</div><!--end mainpage-->

</body>

</html>