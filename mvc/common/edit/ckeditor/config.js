/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'zh-cn';
	config.uiColor = '#AADC6E';
	//设置宽高
	config.width=800;
	config.height=400;
	// 工具栏（基础'Basic'、全能'Full'、自定义）plugins/toolbar/plugin.js
//config.toolbar = 'Basic';
config.toolbar = 'Full';

//这将配合：
config.toolbar_Full = [
//['Source','-','Save','NewPage','Preview','-','Templates'],
['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
//['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','Image'],
['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
//['Link','Unlink','Anchor'],
//['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
['Styles','Format','Font','FontSize'],
['TextColor','BGColor']
];
//工具栏是否可以被收缩
config.toolbarCanCollapse = true;

//工具栏的位置
config.toolbarLocation = 'top';//可选：bottom

//工具栏默认是否展开
config.toolbarStartupExpanded = true;

// 取消 “拖拽以改变尺寸”功能 plugins/resize/plugin.js
config.resize_enabled = false;

//改变大小的最大高度
config.resize_maxHeight = 3000;

//改变大小的最大宽度
config.resize_maxWidth = 3000;

//改变大小的最小高度
config.resize_minHeight = 250;

//改变大小的最小宽度
config.resize_minWidth = 750;

// 当提交包含有此编辑器的表单时，是否自动更新元素内的数据
config.autoUpdateElement = true;

// 设置是使用绝对目录还是相对目录，为空为相对目录
//config.baseHref = ''

// 编辑器的z-index值
//config.baseFloatZIndex = 1000000;

};
