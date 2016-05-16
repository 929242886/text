<?php

/**
 *articleController
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class articleController extends baseController{
	
	public function Index(){

		$model = new ArticleModel;
		$arr = $model -> tag_sel();
		$re = $model -> article_type();
		$this -> assign('arr',$arr);
		$this -> assign('re',$re);
		$this -> display('article/index.php');

	}

	public function article_add() {

		$model = new ArticleModel;
		$re = $model -> article_add();
		if(!$re){
			header("location:admin.php?a=index&c=article"); 
		}else{
			echo "<script>alert('添加失败');location='?a=index&c=article'</script>";
		}
		
	}

	public function caogao() {

		$model = new ArticleModel;
		$re = $model -> caogao_list();
		$this -> assign("re",$re);
		$this -> display('article/caogao.php');

	}

	public function del() {

		$model = new ArticleModel;
		$re = $model -> caogao_del();
		if(!$re){
			header("location:admin.php?a=caogao&c=article");  
		}else{
			echo "<script>alert('删除失败');location='?a=caogao&c=article'</script>";
		}	

	}

	public function fabu() {

		$model = new ArticleModel;
		$re = $model -> caogao_fabu();
		if(!$re){
			header("location:admin.php?a=caogao&c=article"); 
		}else{
			echo "<script>alert('发布失败');location='?a=caogao&c=article'</script>";
		}	

	}

	public function article_type() {

		$model = new ArticleModel;
		$re = $model -> article_type();
		$this -> assign("re",$re);
		$this -> display("article/article_type.php");

	}

	public function article_all() {

		$model = new ArticleModel;
		$author = $model -> author();
		 $type = $model -> article_type();
		$re = $model -> article_all();
		$this -> assign('author',$author);
		$this -> assign('re',$re);
		$this -> assign('type',$type);
		$this -> display("article/article_all.php");

	}

	public function article_seach() {

		$model = new ArticleModel;
		$type = $model -> article_seach();

	}

	public function article_del() {

		$model = new ArticleModel;
		$re =  $model -> article_del();
		if(!$re){
			header("location:admin.php?a=article_all&c=article");
		}else{
			echo "123";
		}

	}

	public function caogao_add() {

		$model = new ArticleModel;
		$re = $model -> caogao_add();
		if(!$re){
			header("location:admin.php?a=article_all&c=article");
		}else{
			echo "123";
		}

	}

	public function article_sou() {

		$model = new ArticleModel;
		 $type = $model -> article_type();
		$this -> assign('type',$type);
		$re = $model -> article_sou();
		$this -> assign('re',$re);
		$this -> display('article/article_sou.php');
		

	}

	public function zhiding() {

		$model = new ArticleModel;
		$re = $model -> zhiding();
		if(!$re){
			echo '1';
		}else{
			echo "0";
		}

	}

	public function move() {

		$model = new ArticleModel;
		$re = $model -> move();
		if(!$re){
			echo '1';
		}else{
			echo "0";
		}

	}

	public function del_all() {

		$model = new ArticleModel;
		$re = $model -> del_all();
		if(!$re){
			echo '1';
		}else{
			echo "0";
		}

	}

	public function author_seach() {

		
		$model = new ArticleModel;
		$re = $model -> author_seach();

	}

	public function article_up() {

		$model = new ArticleModel;
		$re = $model -> article_up();
		$arr = $model -> article_type();
		$tag = $model -> tag_sel();
		$this -> assign('tag',$tag);
		$this -> assign('arr',$arr);
		$this -> assign('re',$re);
		$this -> display("article/article_up.php");

	}

	public function up_pro() {

		$model = new ArticleModel;
		$re = $model -> up_pro();
		if(!$re){
			header("location:admin.php?a=article_all&c=article");
		}else{
			echo "123";
		}

	}

}