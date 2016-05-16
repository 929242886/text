<?php

/**
 *linkModel
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class linkModel extends baseModel{

	function lists() {

		return $this -> db-> sql("select * from link order by `order` desc");

	}

	function link_add() {

		$arr = array(
				'name' => $_POST['name'],
				'order' => $_POST['order'],
				'desc' => $_POST['miaoshu'],
				'url' => $_POST['url'],
			);
		return $this -> db -> insert('link',$arr);

	}

	function link_del() {

		return $this -> db -> del('link',array('id'=>$_GET['id']));

	}

	function link_up() {

		return $this -> db -> getRow('link',array('id'=>$_GET['id']));

	}

	function up_pro() {

		$arr = array(
				'name' => $_POST['name'],
				'url' => $_POST['url'],
				'desc' => $_POST['desc'],
			);
		return $this -> db -> Up('link',array('id'=>$_POST['id']),$arr);

	}

	function order_up() {

		$order = $_POST['order'];
		$id = $_POST['id'];
		foreach ($order as $k => $v) {
			$re = $this -> db -> Up("link",array('id'=>$id[$k]),array('order'=>$v));
		}
		
		return $re;

	}

	function show_up() {

		$show = $_GET['show']==1?0:1;
	    return $this -> db -> Up('link',array('id'=>$_GET['id']),array('is_show'=>$show));

	}

	function count() {

		return $this -> db -> sql("select count(*) as count from link");

	}


}