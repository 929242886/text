<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>企聘王</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- basic styles -->
<link href="/Public/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/Public/css/font-awesome.min.css" />

<!--[if IE 7]>
  <link rel="stylesheet" href="/Public/css/font-awesome-ie7.min.css" />
<![endif]-->

<!-- page specific plugin styles -->

<!-- fonts -->

<link rel="stylesheet" href="http://fonts.useso.com/css?family=Open+Sans:400,300" />

<!-- ace styles -->

<link rel="stylesheet" href="/Public/css/ace.min.css" />
<link rel="stylesheet" href="/Public/css/ace-rtl.min.css" />
<link rel="stylesheet" href="/Public/css/ace-skins.min.css" />

<!--[if lte IE 8]>
  <link rel="stylesheet" href="/Public/css/ace-ie.min.css" />
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->

<script src="/Public/js/ace-extra.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
<script src="/Public/js/html5shiv.js"></script>
<script src="/Public/js/respond.min.js"></script>
<![endif]-->
</head>

<body>
<script type="text/javascript" src="/Public/js/SysUtil.js"></script>
		<script type="text/javascript" src="/Public/js/jquery.js"></script>
		<input type="hidden" value="<?php echo $_GET['success']?>" id = 'aa'/>
		<input type="hidden" value="<?php echo $_GET['messign']?>" id = 'bb'/>
<script>

		$(function(){
				var hh = document.getElementById('aa').value;
				var bb = document.getElementById('bb').value;
		//alert(hh);
				if(hh == 'success')
				{
					//alert(1);
					SysUtil.Tip.success(bb);
				}else if(hh == 'error'){
				SysUtil.Tip.error('这是失败消息');
			}
		});
</script>
<div class="navbar navbar-default" id="navbar">
	<script type="text/javascript">
		try{ace.settings.check('navbar' , 'fixed')}catch(e){}
	</script>

	<div class="navbar-container" id="navbar-container">
		<div class="navbar-header pull-left">
			<a href="#" class="navbar-brand">
				<small>
					<i class="icon-leaf"></i>
					企聘王后台系统
				</small>
			</a><!-- /.brand -->
		</div><!-- /.navbar-header -->

		
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<!-- basic styles -->
<link href="/Public/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/Public/css/font-awesome.min.css" />

<!--[if IE 7]>
  <link rel="stylesheet" href="/Public/css/font-awesome-ie7.min.css" />
<![endif]-->

<!-- page specific plugin styles -->

<!-- fonts -->

<link rel="stylesheet" href="http://fonts.useso.com/css?family=Open+Sans:400,300" />

<!-- ace styles -->

<link rel="stylesheet" href="/Public/css/ace.min.css" />
<link rel="stylesheet" href="/Public/css/ace-rtl.min.css" />
<link rel="stylesheet" href="/Public/css/ace-skins.min.css" />

<!--[if lte IE 8]>
  <link rel="stylesheet" href="/Public/css/ace-ie.min.css" />
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->

<script src="/Public/js/ace-extra.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
<script src="/Public/js/html5shiv.js"></script>
<script src="/Public/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<div class="navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">


				<li class="light-blue">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="/Public/avatars/user.jpg" alt="Jason's Photo" />
						<span class="user-info">
							<small>欢迎光临,</small>
							<?php echo $_SESSION['admin_name']?>
						</span>

						<i class="icon-caret-down"></i>
					</a>

					<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						


						<li>
							<a href="/admin.php/Home/Index/logout">
								<i class="icon-off"></i>
								退出
							</a>
						</li>
					</ul>
				</li>
			</ul><!-- /.ace-nav -->
		</div><!-- /.navbar-header -->
		
</body>
</html>
 
	</div><!-- /.container -->
</div>

<div class="main-container" id="main-container">
	<script type="text/javascript">
		try{ace.settings.check('main-container' , 'fixed')}catch(e){}
	</script>

	<div class="main-container-inner">
		<a class="menu-toggler" id="menu-toggler" href="#">
			<span class="menu-text"></span>
		</a>

		<div class="sidebar" id="sidebar">
			<script type="text/javascript">
				try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
			</script>

			<div class="sidebar-shortcuts" id="sidebar-shortcuts">

				<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
					<span class="btn btn-success"></span>

					<span class="btn btn-info"></span>

					<span class="btn btn-warning"></span>

					<span class="btn btn-danger"></span>
				</div>
			</div><!-- #sidebar-shortcuts -->

			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title></title>
	<link href="/Public/css/bootstrap.min.css" rel="stylesheet" />
 <!-- basic styles -->
<link href="/Public/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/Public/css/font-awesome.min.css" />

<!--[if IE 7]>
  <link rel="stylesheet" href="/Public/css/font-awesome-ie7.min.css" />
<![endif]-->

<!-- page specific plugin styles -->

<!-- fonts -->

<link rel="stylesheet" href="http://fonts.useso.com/css?family=Open+Sans:400,300" />

<!-- ace styles -->

<link rel="stylesheet" href="/Public/css/ace.min.css" />
<link rel="stylesheet" href="/Public/css/ace-rtl.min.css" />
<link rel="stylesheet" href="/Public/css/ace-skins.min.css" />

<!--[if lte IE 8]>
  <link rel="stylesheet" href="/Public/css/ace-ie.min.css" />
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->

<script src="/Public/js/ace-extra.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
<script src="/Public/js/html5shiv.js"></script>
<script src="/Public/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<ul class="nav nav-list">
				<li class="active">
					<a href="index.html">
						<i class="icon-dashboard"></i>
						<span class="menu-text"> 招聘控制台 </span>
					</a>
				</li>
	<li>
					<a href="#" class="dropdown-toggle">
						<i class="icon-desktop"></i>
						<span class="menu-text"> 企业管理 </span>

						<b class="arrow icon-angle-down"></b>
					</a>

					<ul class="submenu">
						<li>
							<a href="/admin.php/Home/Enterprise/index">
								<i class="icon-double-angle-right"></i>
								企业
							</a>
						</li> 

					</ul>
				</li>  
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="icon-desktop"></i>
						<span class="menu-text"> 简历管理 </span>

						<b class="arrow icon-angle-down"></b>
					</a>

					<ul class="submenu">
						<li>
							<a href="/admin.php/Home/Enterprise/../resume/resume">
								<i class="icon-double-angle-right"></i>
								学生简历
							</a>
						</li> 

					</ul>
				</li>  

				<li>
					<a href="#" class="dropdown-toggle">
						<i class="icon-desktop"></i>
						<span class="menu-text"> 条件搜索管理 </span>

						<b class="arrow icon-angle-down"></b>
					</a>

					<ul class="submenu">
						<li>
							<a href="/admin.php/Home/Enterprise/../condition/position">
								<i class="icon-double-angle-right"></i>
								职位
							</a>
						</li> 

						<li>
							<a href="/admin.php/Home/Enterprise/../condition/experience">
								<i class="icon-double-angle-right"></i>
								经验
							</a>
						</li> 

						<li>
							<a href="/admin.php/Home/Enterprise/../condition/salary">
								<i class="icon-double-angle-right"></i>
								薪资
							</a>
						</li> 

					</ul>
					 <li>
					<a href="#" class="dropdown-toggle">
						<i class="icon-desktop"></i>
						<span class="menu-text"> 学生模拟面试 </span>

						<b class="arrow icon-angle-down"></b>
					</a>

					<ul class="submenu">
						<li>
							<a href="/admin.php/Home/Enterprise/../Student/student">
								<i class="icon-double-angle-right"></i>
								老师评价
							</a>
						</li> 

						<li>
							<a href="/admin.php/Home/Enterprise/../Student/viewcomments ">
								<i class="icon-double-angle-right"></i>
								查看我的评价
							</a>
						</li> 

					</ul>
				</li>  
				</ul>
			</ul><!-- /.nav-list -->

			<div class="sidebar-collapse" id="sidebar-collapse">
				<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
			</div>
</body>
</html> 

			

			<script type="text/javascript">
				try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
			</script>
		</div>

		<div class="main-content">
			<div class="breadcrumbs" id="breadcrumbs">
				<script type="text/javascript">
					try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
				</script>

				<ul class="breadcrumb">
					<li>
						<i class="icon-home home-icon"></i>
						<a href="#">首页</a>
					</li>
					<li class="active">企聘王控制台</li>
				</ul><!-- .breadcrumb -->
			</div>

			<div class="page-content">
				<div class="page-header">
					<h1>
						企聘王控制台
						<small>
							<i class="icon-double-angle-right"></i>
							 查看<?php echo $re['a'];?>
						</small>
					</h1>
				</div><!-- /.page-header -->

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->

	<form class="form-inline definewidth m20" action="/admin.php/Home/Enterprise/index" method="get">
    企业名称：
    <input type="text" name="keyword" id="keyword"class="abc input-default" placeholder="" value="<?php echo ($keyword); ?>">&nbsp;&nbsp;
    <button type="submit" class="btn btn-primary">查询</button>
</form>

 	<?php if($arr){ ?>
 	<form action="/admin.php/Home/Enterprise/delete" method="post">
	<table class="table table-bordered table-hover definewidth m10" >
	    <thead>

	    <tr>
	        <th>多选</th>
	        <th>公司名称</th>
	        <th>公司电话</th>
	        <th>法人代表</th> 
	        <th>营业执照</th> 
	        <th>详细地址</th> 
	        <th>规模</th> 
	        <th>公司邮箱</th> 
	        <th>添加时间</th>
	        <th>状态</th>
	    </tr>
	    </thead>
	<?php foreach ($arr as $key => $value): ?>
		
	
	    <tr>
	    <td><input type="checkbox" name="e_id[]" id="e_id[]" value="<?php echo $value['e_id']?>"></td>
	      <td><?php echo $value['e_name']?></td>
	      <td><?php echo $value['e_phone']?></td>
	      <td><?php echo $value['e_legal']?></td>
	      <td>
                <img src="/Public/<?php echo $value['e_photo']?>" alt="">
	      </td>
	      <td><?php echo $value['e_area']?></td>
	      <td><?php echo $value['e_size']?></td>
	      <td><?php echo $value['e_email']?></td>
	      <td><?php echo $value['e_addtime']?></td>
	      <td>
	      	<?php if ($value['e_status']==0) { ?>
                 <a href="/admin.php/Home/Enterprise/status/e_id/<?php echo $value['e_id']?>">审核</a>
	      	<?php }else{ ?>
			     <b>已审核</b>
	      		<?php } ?>
	      </td>
	    </tr>
<?php endforeach ?>
    </table>
    <input type="submit" name="submit" id="submit" value="批量删除" onclick="if(confirm('确定删除？')){}else{return false;};">
    </form>

    <div><?php echo ($page); ?>共<?php echo ($count); ?>条数据</div>
    <?php }else{ echo "<table class=\"table table-bordered table-hover definewidth m10\" >
	    <thead>

	    <tr>
	        <th>姓名</th>
	        <th>性别</th>
	        <th>年龄</th> 
	        <th>毕业学校</th> 
	        <th>做过项目</th> 
	        <th>家庭住址</th> 
	        <th>自我评价</th> 
	        <th>编辑</th> 
	    </tr>
	    </thead>
</table>"; echo '<center>'."<span style='color:red;'>你搜索的是".$keyword."暂无数据</span>".'</center>'; }?><br />
						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div><!-- /.main-content -->

		<div class="ace-settings-container" id="ace-settings-container">
			<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
				<i class="icon-cog bigger-150"></i>
			</div>

			<div class="ace-settings-box" id="ace-settings-box">
				<div>
					<div class="pull-left">
						<select id="skin-colorpicker" class="hide">
							<option data-skin="default" value="#438EB9">#438EB9</option>
							<option data-skin="skin-1" value="#222A2D">#222A2D</option>
							<option data-skin="skin-2" value="#C6487E">#C6487E</option>
							<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
						</select>
					</div>
					<span>&nbsp; 选择皮肤</span>
				</div>

				<div>
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
					<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
				</div>

				<div>
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
					<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
				</div>

				<div>
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
					<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
				</div>

				<div>
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
					<label class="lbl" for="ace-settings-rtl">切换到左边</label>
				</div>

				<div>
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
					<label class="lbl" for="ace-settings-add-container">
						切换窄屏
						<b></b>
					</label>
				</div>
			</div>
		</div><!-- /#ace-settings-container -->
	</div><!-- /.main-container-inner -->

	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="icon-double-angle-up icon-only bigger-110"></i>
	</a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<script src="/Public/js/jquery.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

<!--[if !IE]> -->

<script type="text/javascript">
	window.jQuery || document.write("<script src='/Public/js/jquery-2.0.3.min.js'>"+"<"+"script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='/Public/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

<script type="text/javascript">
	if("ontouchend" in document) document.write("<script src='/Public/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
</script>
<script src="/Public/js/bootstrap.min.js"></script>
<script src="/Public/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
  <script src="/Public/js/excanvas.min.js"></script>
<![endif]-->

<script src="/Public/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/Public/js/jquery.ui.touch-punch.min.js"></script>
<script src="/Public/js/jquery.slimscroll.min.js"></script>
<script src="/Public/js/jquery.easy-pie-chart.min.js"></script>
<script src="/Public/js/jquery.sparkline.min.js"></script>
<script src="/Public/js/flot/jquery.flot.min.js"></script>
<script src="/Public/js/flot/jquery.flot.pie.min.js"></script>
<script src="/Public/js/flot/jquery.flot.resize.min.js"></script>

<!-- ace scripts -->

<script src="/Public/js/ace-elements.min.js"></script>
<script src="/Public/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript" src="/Public/js/SysUtil.js"></script>
		<script type="text/javascript" src="/Public/js/jquery.js"></script>
<script type="text/javascript">

	jQuery(function($) {
		$('.easy-pie-chart.percentage').each(function(){
			var $box = $(this).closest('.infobox');
			var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
			var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
			var size = parseInt($(this).data('size')) || 50;
			$(this).easyPieChart({
				barColor: barColor,
				trackColor: trackColor,
				scaleColor: false,
				lineCap: 'butt',
				lineWidth: parseInt(size/10),
				animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
				size: size
			});
		})
	
		$('.sparkline').each(function(){
			var $box = $(this).closest('.infobox');
			var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
			$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
		});
	
	
	
	
	  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
	  var data = [
		{ label: "social networks",  data: 38.7, color: "#68BC31"},
		{ label: "search engines",  data: 24.5, color: "#2091CF"},
		{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
		{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
		{ label: "other",  data: 10, color: "#FEE074"}
	  ]
	  function drawPieChart(placeholder, data, position) {
		  $.plot(placeholder, data, {
			series: {
				pie: {
					show: true,
					tilt:0.8,
					highlight: {
						opacity: 0.25
					},
					stroke: {
						color: '#fff',
						width: 2
					},
					startAngle: 2
				}
			},
			legend: {
				show: true,
				position: position || "ne", 
				labelBoxBorderColor: null,
				margin:[-30,15]
			}
			,
			grid: {
				hoverable: true,
				clickable: true
			}
		 })
	 }
	 drawPieChart(placeholder, data);
	
	 /**
	 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
	 so that's not needed actually.
	 */
	 placeholder.data('chart', data);
	 placeholder.data('draw', drawPieChart);
	
	
	
	  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
	  var previousPoint = null;
	
	  placeholder.on('plothover', function (event, pos, item) {
		if(item) {
			if (previousPoint != item.seriesIndex) {
				previousPoint = item.seriesIndex;
				var tip = item.series['label'] + " : " + item.series['percent']+'%';
				$tooltip.show().children(0).text(tip);
			}
			$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
		} else {
			$tooltip.hide();
			previousPoint = null;
		}
		
	 });
	
	
	
	
	
	
		var d1 = [];
		for (var i = 0; i < Math.PI * 2; i += 0.5) {
			d1.push([i, Math.sin(i)]);
		}
	
		var d2 = [];
		for (var i = 0; i < Math.PI * 2; i += 0.5) {
			d2.push([i, Math.cos(i)]);
		}
	
		var d3 = [];
		for (var i = 0; i < Math.PI * 2; i += 0.2) {
			d3.push([i, Math.tan(i)]);
		}
		
	
		var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
		$.plot("#sales-charts", [
			{ label: "Domains", data: d1 },
			{ label: "Hosting", data: d2 },
			{ label: "Services", data: d3 }
		], {
			hoverable: true,
			shadowSize: 0,
			series: {
				lines: { show: true },
				points: { show: true }
			},
			xaxis: {
				tickLength: 0
			},
			yaxis: {
				ticks: 10,
				min: -2,
				max: 2,
				tickDecimals: 3
			},
			grid: {
				backgroundColor: { colors: [ "#fff", "#fff" ] },
				borderWidth: 1,
				borderColor:'#555'
			}
		});
	
	
		$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('.tab-content')
			var off1 = $parent.offset();
			var w1 = $parent.width();
	
			var off2 = $source.offset();
			var w2 = $source.width();
	
			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			return 'left';
		}
	
	
		$('.dialogs,.comments').slimScroll({
			height: '300px'
		});
		
		
		//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
		//so disable dragging when clicking on label
		var agent = navigator.userAgent.toLowerCase();
		if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
		  $('#tasks').on('touchstart', function(e){
			var li = $(e.target).closest('#tasks li');
			if(li.length == 0)return;
			var label = li.find('label.inline').get(0);
			if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
		});
	
		$('#tasks').sortable({
			opacity:0.8,
			revert:true,
			forceHelperSize:true,
			placeholder: 'draggable-placeholder',
			forcePlaceholderSize:true,
			tolerance:'pointer',
			stop: function( event, ui ) 
			}
		);
		$('#tasks').disableSelection();
		$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
			if(this.checked) $(this).closest('li').addClass('selected');
			else $(this).closest('li').removeClass('selected');
		});
		
	
	})
</script>

</body>
</html>