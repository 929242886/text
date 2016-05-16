{include file ="admin/header.php"}
<div id="container">

<div class="containertitle"><b>草稿</b><span id="msg_2"></span></div>
<div id="msg"></div>
<form action="?a=article_add&c=article" method="post" enctype="multipart/form-data" id="addlog" name="addlog">
<div id="post">
    <div>
        <input type="text" maxlength="200" name="title" id="title"/>
    </div>
    <div>
<span class="field">
            <textarea id="editor1" onblur='editor1()' name="sit_content"><{$v.content}></textarea>
            &nbsp;&nbsp;&nbsp;&nbsp;<sp id='sp_editor1'></sp>
        </span>
        <script type="text/javascript">
        CKEDITOR.replace( 'editor1',
        {
            filebrowserBrowseUrl : './common/edit/ckeditor/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : './common/edit/ckeditor/ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl : './common/edit/ckeditor/ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl : './common/edit/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : './common/edit/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : './common/edit/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        });
        </script>

    </div>
    <div style="margin:10px 0px 5px 0px;">
        <label for="tag" id="tag_label" praceholder="">文章标签，逗号或空格分隔，过多的标签会影响系统运行效率</label>
        <input name="tag" id="tag" maxlength="200"/>
        <span style="color:#2A9DDB;cursor:pointer;margin-right: 40px;"><a href="javascript:displayToggle('tagbox', 0);">已有标签+</a></span>
        <select name="sort" id="sort" style="width:130px;">
        <option value="-1">选择分类...</option>
        {foreach from = $re item = v}
            <option value="{$v['id']}">{$v['t_name']}</option>
            {/foreach}
                </select>
            
        
        发布于：<input  type="date" style="width:139px;" name="postdate" id="postdate" value=""/>
        <div id="tagbox">
        {if $arr}
        {foreach $arr as $k=>$v}
            <a href="javascript: insertTag('{$v.tagname}','tag');">{$v.tagname}</a> 
        {/foreach}
    {else}
    还没有设置过标签！
    {/if}
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
</html>