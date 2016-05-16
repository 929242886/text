<?php

/**
 *navModel
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class NavModel extends baseModel{

	public $pagesize = 10;

	function index() {

		return $this -> db -> sql("select * from nav order by `order` desc");

	}

	function show_up() {

		$show = $_GET['show']==1?0:1;
	    return $this -> db -> Up('nav',array('id'=>$_GET['id']),array('is_show'=>$show));

	}

	function new_up() {

		$new = $_GET['new']==1?0:1;
		return $this -> db -> Up('nav',array('id'=>$_GET['id']),array('is_new'=>$new));

	}

	function nav_up() {

		return $this -> db -> getRow('nav',array('id'=>$_GET['id']));

	}

	function up_pro() {

		$arr = array(
				'name' => $_POST['name'],
				'is_new' => $_POST['is_new'],
			);
		return $this -> db -> Up('nav',array('id'=>$_POST['id']),$arr);

	}

		function nav_add() {

		$arr = array(
				'name' => $_POST['name'],
				'is_new' => $_POST['is_new'],
				'order' => $_POST['order'],
				'url' => $_POST['url'],
			);
		return $this -> db -> insert('nav',$arr);

	}

	function nav_del() {

		return $this -> db -> del('nav',array('id'=>$_GET['id']));

	}

	function order_up() {

		$order = $_POST['order'];
		$id = $_POST['id'];
		foreach ($order as $k => $v) {
			$re = $this -> db -> Up("nav",array('id'=>$id[$k]),array('order'=>$v));
		}
		
		return $re;

	}

	function count() {

		return $this -> db -> sql("select count(*) as count from nav ");

	}

}