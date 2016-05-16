{include file = "admin/header.php"}
<div class=containertitle><b>微语</b>
</div>
<div class=line></div>
<div id="tw">
    <div class="main_img"><a href="./blogger.php"><img src="{$smarty.session.user.img}" height="52" width="52" /></a></div>
    <div class="right">
    <form method="post" action="?c=twitter&a=add" enctype="multipart/form-data" >
    <input type="hidden" name="img" id="imgPath" />
    <input name="token" id="token" value="174d016ba9da693305b0001887fba058" type="hidden" />
    <div class="msg">你还可以输入140字</div>
    <div class="box_1"><textarea required="" class="box" name="content"></textarea></div>
    <div class="tbutton"><input type="submit" value="发布" onclick="return checkt();"/> </div>
	<img class="twImg" id="face" style="margin-right: 10px;cursor: pointer;" src="./common/images/face.png">

    <input type="file" name="img">

        </form>
    </div>
    <div class="clear"></div>
    <ul>
    {foreach from=$reply item=vo}
        <li class="li">
    <div class="main_img"><img src="{$smarty.session.user.img}" width="32px" height="32px" /></div>
    <p class="post1">{$vo.name}<br />{$vo.content} <br/></p>
    <div class="clear"></div>
        {if $vo.imgs eq ""}
         <p class="post1"><a title="查看图片" href="javascript:void(0)" target="_blank"></a></p>
        {else}
       <p class="post1"><a  title="查看图片" href="javascript:void(0)" target="_blank"><img height="160px"  width='160px' style="border: 1px solid #EFEFEF;" src="{$vo.imgs}"></a></p>
        {/if}
      
       <div class="bttome">
        <p class="post" id="<{$v.twi_id}>"><a href="javascript:void(0);" class="sel" onclick="sele(this)" >回复</a>( <span>{$vo.replynum}</span> <small></small> )</p>
        <p class="time">{$vo.date|date_format:'%Y-%m-%d %H:%M:%S'}   <a href="?c=twitter&a=delete&t_id={$vo.t_id}" onclick="if(confirm('您确定删除吗?')==false)return false" class="care">删除</a> </p>
    </div>
    <div class="clear"></div>
	<div class="clear"></div>
   	<div id="r_1" class="r"></div>
   <div class="huifu" id="rp_7">
    <div style="margin:0;padding-left:0"><ul>
    {if !empty($vo.reply)}
    {foreach from=$vo.reply key=key item=vr}
         <li id="reply_<{$vr.reply_id}>" style="background-color:#FFF">
         <span class="name">{$vr.name}：</span> {$vr.reply_content} <span class="time">{$vr.date|date_format:'%Y-%m-%d %H:%M:%S'}  </span><span><a href="?c=twitter&a=replyhide&reply_id={$vr.id}">隐藏</a></span> 
         <a href="?c=twitter&a=replydelete&reply_id={$vr.id}">删除</a> 
         <em><a href="javascript:reply(7, '@{$vr.name}：');">回复</a></em>
         </li>
        {/foreach}
    {else}
    还没有回复
    {/if}
        </ul></div>
     <form action="?c=twitter&a=reply" class="checkForm" method="post">
    <input type="hidden" value="{$vo.t_id}" name="tid" />
    <textarea name="reply_content"></textarea>
    <div><input class="button_p" onclick="doreply(7);" value="回复" type="submit"> <span style="color:#FF0000"></span></div>
    </form>
    </div>
    
    </li>
    {/foreach}
    	 <li class="page"> (有{$count.0.aa}条微语)</li>
    </ul>
</div>
<div id="faceWraps"></div>
<script type="text/javascript" src="./common/js/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="./common/js/emo.js"></script>
<script>
function sele(ts){
    $(ts).parents('.bttome').nextAll('.huifu').show();
}
$(document).ready(function(){
    $(".post a").toggle(
      function () {
        tid = $(this).parent().attr('id');
        $("#r_" + tid).html('<p class="loading"></p>');
        $.get("twitter.php?action=getreply&tid="+tid+"&stamp="+timestamp(), function(data){
        $("#r_" + tid).html(data);
        $("#rp_"+tid).show();
      })},
      function () {
        tid = $(this).parent().attr('id');
        $("#r_" + tid).html('');
        $("#rp_"+tid).hide();
    });
    $(".box").keyup(function(){
       var t=$(this).val();
       var n = 140 - t.length;
       if (n>=0){
         $(".msg").html("你还可以输入"+n+"字");
       }else {
         $(".msg").html("<span style=\"color:#FF0000\">已超出"+Math.abs(n)+"字</span>");
       }
    });
    setTimeout(hideActived,2600);
    $("#sz_box").css('display', $.cookie('em_sz_box') ? $.cookie('em_sz_box') : '');
    $("#menu_tw").addClass('sidebarsubmenu1');
    $(".box").focus();
	
	$("#custom_file_upload").uploadify({
		id              : jQuery(this).attr('id'),
		swf             : './common/js/uploadify/uploadify.swf',
		uploader        : 'attachment.php?action=upload_tw_img',
		cancelImage     : './common/images/cancel.png',
		buttonText      : '选择图片',
		checkExisting   : "/",
		auto            : true,
		multi           : false,
		buttonCursor    : 'pointer',
		fileTypeExts    : '*.jpg;*.png;*.gif;*.jpeg',
		queueID         : 'custom-queue',
		queueSizeLimit	: 100,
		removeCompleted : false,
		fileSizeLimit	: 20971520,
		fileObjName     : 'attach',
		postData		: { EM_AUTHCOOKIE_qHVTAcQ4hlLjCzQuSXtJwRVIGHScu1tC:'admin||a75c5e5957c7382670f1007619a3da20'},
		onUploadSuccess : onUploadSuccess,
		onUploadError   : onUploadError
	});
	
	$("#face").click(function(e){
		var wrap = $("#faceWraps");
		if(!wrap.html()){
			var emotionsStr = [];
			$.each(emo,function(k,v){
				emotionsStr.push('<img style="cursor: pointer;padding: 3px;" title="'+k+'" src="./common/editor/plugins/emoticons/images/'+v+'"/>');
			});
			wrap.html(emotionsStr.join(""));
		}
		
		wrap.children().unbind('click').click(function () {
			var val= $("textarea").val();
			$("textarea").val((val||"")+$(this).attr("title"));
			$("textarea").focus();
		});

		var offset = $(this).offset();
		wrap.css({
			left : offset.left,
			top : offset.top
		});
		wrap.show();
		e.stopPropagation();
		e.preventDefault();
		$(document.body).unbind('click').click(function (e) {
			wrap.hide();
		});
		$(document).unbind('click').scroll(function (e) {
			wrap.hide();
		});
	});
});

function onUploadSuccess(file, data, response){
	var data = eval("("+data+")");
	if(data.filePath){
		$("#imgPath").val(data.filePath);
		$("#img_select").hide();
		$("#img_name").show();
		$("#img_name_a").text(file.name);
		$("#img_pop").html("<img src='"+data.filePath+"'/>");
	}else{
		alert("上传失败！");	
	}
}
function onUploadError(file, errorCode, errorMsg, errorString){
	alert(errorString);
}
function unSelectFile(){
	$.get("attachment.php?action=del_tw_img",{ filepath:$("#imgPath").val()});
	$("#imgPath").val("");
	$("#img_select").show();
	$("#img_name").hide();
	$("#img_name_a").text("{ 图片名称}");
	$("#img_pop").empty();
}
function reply(tid, rp){
    $("#rp_"+tid+" textarea").val(rp);
    $("#rp_"+tid+" textarea").focus();
}
function doreply(tid){
    var r = $("#rp_"+tid+" textarea").val();
    alert(r);
    var post = "r="+encodeURIComponent(r);
	$.post('?c=twitter&a=answer&tid='+tid+"&stamp="+timestamp(), post, function(data){
		data = $.trim(data);
		if (data == 'err1'){
            $(".huifu span").text('回复长度需在140个字内');
		}else if(data == 'err2'){
		    $(".huifu span").text('该回复已经存在');
		}else{
    		$("#r_"+tid).append(data);
    		var rnum = Number($("#"+tid+" span").text());
    		$("#"+tid+" span").html(rnum+1);
    		$(".huifu span").text('')
    	}
	});
}
function delreply(rid,tid){
    if(confirm('你确定要删除该条回复吗？')){
        $.get("twitter.php?action=delreply&rid="+rid+"&tid="+tid+"&stamp="+timestamp(), function(data){
            var tid = Number(data);
            var rnum = Number($("#"+tid+" span").text());
            $("#"+tid+" span").text(rnum-1);
            if ($("#reply_"+rid+" span a").text() == '审核'){
                var rnum = Number($("#"+tid+" small").text());
                if(rnum == 1){ $("#"+tid+" small").text('');}else{ $("#"+tid+" small").text(rnum-1);}
            }
            $("#reply_"+rid).hide("slow");
        })}else { return;}
}
function hidereply(rid,tid){
    $.get("twitter.php?action=hidereply&rid="+rid+"&tid="+tid+"&stamp="+timestamp(), function(){
        $("#reply_"+rid).css('background-color','#FEE0E4');
        $("#reply_"+rid+" span a").text('审核');
        $("#reply_"+rid+" span a").attr("href","javascript: pubreply("+rid+","+tid+")");
        var rnum = Number($("#"+tid+" small").text());
        $("#"+tid+" small").text(rnum+1);
        });
}
function pubreply(rid,tid){
    $.get("twitter.php?action=pubreply&rid="+rid+"&tid="+tid+"&stamp="+timestamp(), function(){
        $("#reply_"+rid).css('background-color','#FFF');
        $("#reply_"+rid+" span a").text('隐藏');
        $("#reply_"+rid+" span a").attr("href","javascript: hidereply("+rid+","+tid+")");
        var rnum = Number($("#"+tid+" small").text());
        if(rnum == 1){ $("#"+tid+" small").text('');}else{ $("#"+tid+" small").text(rnum-1);}
        });
}
function checkt(){
	var t=$(".box").val();
    if (t.length > 140){ return false;}
}
</script>	</div>