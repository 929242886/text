<?php

/**
 *typeController
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class typeController extends baseController{
	
	public function type_add(){

		$model = new TypeModel;
		$re = $model -> type_add();
		if(!$re){
			header("location:admin.php?a=article_type&c=article");
		}else{
			echo "<script>alert('添加失败');location='?a=article_type&c=article'</script>";
		}

	}

	public function del() {

		$model = new TypeModel;
		$re = $model -> type_del();
		if(!$re){
			header("location:admin.php?a=article_type&c=article");
		}else{
			echo "<script>alert('删除失败');location='?a=article_type&c=article'</script>";
		}

	}

	public function up() {

		$model = new TypeModel;
		$re = $model -> type_up();
		$this -> assign('arr',$re);
		$this -> display("article/up.php");

	}

	public function up_pro() {

		$model = new TypeModel;
		$re = $model -> up_pro();
		if(!$re){
			header("location:admin.php?a=article_type&c=article"); 
		}else{
			echo "<script>alert('修改失败');location='?a=article_type&c=article'</script>";
		}

	}

	function order_up() {

		$model = new TypeModel;
		$re = $model -> order_up();
		if(!$re){
			header("location:admin.php?a=article_type&c=article");
		}else{
			echo "123";
		}
	}

	function show_up() {

		$model = new TypeModel;
		$re = $model -> show_up();
		if(!$re){
			header("location:admin.php?a=article_type&c=article");
		}else{
			echo "123";
		}

	}

}
