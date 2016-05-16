<?php

/**
 *commentController
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class CommentController extends BaseController{

	public function index(){

		$model = new commentModel;
		$re = $model -> comment();
		$count = $model -> count();
		$this -> assign("arr",$re);
		$this -> assign("count",$count);
		$this->display('comment/comment.php');

	}

	public function c_del() {

		$model = new commentModel;
		$re = $model ->c_del();
		if(!$re){
			header("location:admin.php?a=index&c=comment");
		}else{
			echo "123";
		}

	}

	public function c_shen() {

		$model = new commentModel;
		$re = $model -> c_shen();
		if(!$re){
			header("location:admin.php?a=index&c=comment");
		}else{
			echo "123";
		}

	}

	public function c_yin() {

		$model = new commentModel;
		$re = $model -> c_yin();
		if(!$re){
			header("location:admin.php?a=index&c=comment");
		}else{
			echo "123";
		}

	}

	public function del_all() {

		$model = new commentModel;
		$re = $model -> del_all();
		if(!$re){
			echo '1';
		}else{
			echo "0";
		}

	}


	public function hide_all() {

			$model = new commentModel;
			$re = $model -> hide_all();
			if(!$re){
				echo '1';
			}else{
				echo "0";
			}

		}

	public function pub_all() {

		$model = new commentModel;
		$re = $model -> pub_all();
		if(!$re){
			echo '1';
		}else{
			echo "0";
		}

	}

}
?>