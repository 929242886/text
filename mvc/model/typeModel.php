<?php

/**
 *typeModel
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class typeModel extends baseModel{

	function type_add() {
		
		return  $this -> db -> insert("article_type",array('t_name'=>$_POST['name'],'asname'=>$_POST['asname'],'miaoshu'=>$_POST['miaoshu'],'is_show'=>$_POST['is_show']));

	}

	function type_del() {

		return $this -> db -> del("article_type",array('t_id'=>$_GET['id']));

	}

	function type_up() {

		return $this -> db -> getRow("article_type",array('t_id'=>$_GET['id']));

	}

	function up_pro () {

		$arr = array(
				't_name' => $_POST['name'],
				'asname' => $_POST['asname'],
				'is_show' => $_POST['is_show'],
				'miaoshu' => $_POST['miaoshu'],
			);
		return $this -> db -> Up("article_type",array('t_id'=>$_POST['id']),$arr);

	}

	function order_up() {

		$order = $_POST['order'];
		$id = $_POST['id'];

		foreach ($order as $k => $v) {
			$re = $this -> db -> Up("article_type",array('t_id'=>$id[$k]),array('order'=>$v));
		}
		
		return $re;

	}

	function show_up() {

		$show = $_GET['show']==1?0:1;
	    return $this -> db -> Up('article_type',array('t_id'=>$_GET['id']),array('is_show'=>$show));

	}

}