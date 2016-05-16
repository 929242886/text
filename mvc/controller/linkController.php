<?php

/**
 *linkController
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class linkController extends baseController{
	
	public function Index(){
	
		$model = new LinkModel;
		$re = $model -> lists();
		$count = $model ->count();
		$this -> assign("count",$count);
		$this -> assign('re',$re);
		$this -> display('link/index.php');

	}

	public function link_add() {

		$model = new LinkModel;
		$re = $model -> link_add();
		if(!$re){
			header("location:admin.php?a=index&c=link");
		}else{
			echo "<script>alert('添加成功');location='?a=index&c=link'</script>";
		}

	}

	public function link_del() {

		$model = new LinkModel;
		$re = $model -> link_del();
		if(!$re){
			header("location:admin.php?a=index&c=link");
		}else{
			echo "<script>alert('删除成功');location='?a=index&c=link'</script>";
		}
		
	}

	public function link_up() {

		$model = new LinkModel;
		$re = $model -> link_up();
		$this -> assign('re',$re);
		$this -> display('link/link_up.php');

	}

	public function up_pro() {

		$model = new LinkModel;
		$re = $model -> up_pro();
		if(!$re){
			header("location:admin.php?a=index&c=link");
		}else{
			echo "123";
		}
		
	}

	public function order_up() {

		$model = new LinkModel;
		$re = $model -> order_up();
		if(!$re){
			header("location:admin.php?a=index&c=link");
		}else{
			echo "123";
		}

	}

	public function show_up() {

		$model = new LinkModel;
		$re = $model -> show_up();
		header("location:admin.php?a=index&c=link");

	}


}