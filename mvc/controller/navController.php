<?php

/**
 *navController
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class navController extends baseController{
	
	public function Index() {

		$model = new NavModel;
		$re = $model -> index();
		$count = $model ->count();
		$this -> assign("count",$count);
		$this -> assign('re',$re);
		$this -> display('nav/index.php');

	}

	public function nav_up() {

		$model = new NavModel;
		$re = $model -> nav_up();
		$this -> assign('re',$re);
		$this -> display('nav/nav_up.php');

	}

	public function show_up() {

		$model = new NavModel;
		$re = $model -> show_up();
		header("location:admin.php?a=index&c=nav");
		

	}

	public function new_up() {

		$model = new NavModel;
		$re = $model -> new_up();
		header("location:admin.php?a=index&c=nav");
		

	}

	public function up_pro() {

		$model = new NavModel;
		$re = $model -> up_pro();
		if(!$re){
			header("location:admin.php?a=index&c=nav");
		}else{
			echo "123";
		}
		
	}

	public function nav_add() {

		$model = new NavModel;
		$re = $model -> nav_add();
		if(!$re){
			header("location:admin.php?a=index&c=nav");
		}else{
			echo "123";
		}
		
	}

	public function nav_del() {

		$model = new NavModel;
		$re = $model -> nav_del();
		if(!$re){
			header("location:admin.php?a=index&c=nav");
		}else{
			echo "123";
		}
		
	}

	public function order_up() {

		$model = new NavModel;
		$re = $model -> order_up();
		if(!$re){
			header("location:admin.php?a=index&c=nav");
		}else{
			echo "123";
		}

	}


}