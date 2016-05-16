<?php

/**
 *articleController
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class caogaoController extends baseController{
	
	public function Index(){

		$model = new caogaoModel;
		$arr = $model -> tag_sel();
		$re = $model -> article_type();
		$this -> assign('arr',$arr);
		$this -> assign('re',$re);
		$this -> display('caogao/index.php');

	}

	public function article_add() {

		$model = new caogaoModel;
		$re = $model -> article_add();
		if(!$re){
			header("location:admin.php?a=index&c=caogao"); 
		}else{
			echo "<script>alert('添加失败');location='?a=index&c=caogao'</script>";
		}

	}

	public function caogao() {

		$model = new caogaoModel;
		$re = $model -> caogao_list();
		$this -> assign("re",$re);
		$this -> display('caogao/caogao.php');

	}

	public function del() {

		$model = new caogaoModel;
		$re = $model -> caogao_del();
		if(!$re){
			header("location:admin.php?a=caogao&c=caogao");  
		}else{
			echo "<script>alert('删除失败');location='?a=caogao&c=article'</script>";
		}	

	}

	public function fabu() {

		$model = new caogaoModel;
		$re = $model -> caogao_fabu();
		if(!$re){
			header("location:admin.php?a=article_all&c=caogao"); 
		}else{
			echo "<script>alert('发布失败');location='?a=caogao&c=caogao'</script>";
		}	

	}

	public function article_type() {

		$model = new caogaoModel;
		$re = $model -> article_type();
		$this -> assign("re",$re);
		$this -> display("caogao/article_type.php");

	}

	public function article_all() {

		$model = new caogaoModel;
		$author = $model -> author();
		 $type = $model -> article_type();
		$re = $model -> article_all();
		$this -> assign('author',$author);
		$this -> assign('re',$re);
		$this -> assign('type',$type);
		$this -> display("caogao/article_all.php");

	}

	public function article_seach() {

		$model = new caogaoModel;
		$type = $model -> article_seach();

	}

	public function article_del() {

		$model = new caogaoModel;
		$re =  $model -> article_del();
		if(!$re){
			header("location:admin.php?a=article_all&c=caogao");
		}else{
			echo "123";
		}

	}

	public function caogao_add() {

		$model = new caogaoModel;
		$re = $model -> caogao_add();
		if(!$re){
			header("location:admin.php?a=article_all&c=caogao");
		}else{
			echo "123";
		}

	}

	public function article_sou() {

		$model = new caogaoModel;
		 $type = $model -> article_type();
		$this -> assign('type',$type);
		$re = $model -> article_sou();
		$author = $model -> author();
		$this -> assign("author",$author);
		$this -> assign('re',$re);
		$this -> display('caogao/article_sou.php');
		
	}

	public function zhiding() {

		$model = new caogaoModel;
		$re = $model -> zhiding();
		if(!$re){
			echo '1';
		}else{
			echo "0";
		}

	}

	public function move() {

		$model = new caogaoModel;
		$re = $model -> move();
		if(!$re){
			echo '1';
		}else{
			echo "0";
		}

	}

	public function del_all() {

		$model = new caogaoModel;
		$re = $model -> del_all();
		if(!$re){
			echo '1';
		}else{
			echo "0";
		}

	}

	public function author_seach() {
		
		$model = new caogaoModel;
		$re = $model -> author_seach();

	}


}