<?php
/**
*分页导航
*@param $baseUrl string 分页url
*@param $pagesize int 显示条数
*@param $page     int 当前页数
*@param $total_record int 总记录条数
*@param $params array 查询条件
**/

function pageNav($baseUrl,$pagesize,$page,$total_record,$params){

	$paramsStr = "";
	foreach ($params as $k =>$val){
		$paramsStr .="&".$k."=".$val;
	}

	$str = "<a href='".$baseUrl."&page=1".$paramsStr."'>首页</a>";
	$str = "<a href='".$baseUrl."&page=1".$paramsStr."'>上一页</a>";
	$str = "<a href='".$baseUrl."&page=1".$paramsStr."'>下一页</a>";
	$str = "<a href='".$baseUrl."&page=1".$paramsStr."'>尾页</a>";

}

list.php
$key = "king";
$type = 1;
$params['key'] = "king"
$params['type'] = 1;
首页 上一页 下一页 尾页

list.php?page=1&key=king&type=1
?>