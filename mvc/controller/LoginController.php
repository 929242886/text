<?php

/**
 *loginController
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class loginController extends baseController{
	
	public function Index(){
		
		$model = new AdminModel;
		$re = $model -> login();
		if($re){
			session_start();
		$_SESSION['user'] = $re;
	
			echo "<script>alert('登录成功');location='?c=login&a=home'</script>";
		}else{
			echo "<script>alert('登录失败');location='admin.php'</script>";
		}

	}

	public function home(){
		
		session_start();
		$this -> display("admin/home.php");

	}

	

	public function user(){

		$model = new AdminModel;
		$re = $model -> users();
		$count = $model ->count();
		$this -> assign("count",$count);
		$this -> assign("re",$re);
		$this -> display("admin/user.php");

	}

	public function translate(){

		$model = new AdminModel;
		$re = $model -> user();
		$this -> assign("re",$re);
		$this -> display("admin/translate.php");

	}

	public function user_add(){

		$model = new AdminModel;
		$re = $model -> user_add();
		if(!$re){
			header("location:admin.php?a=user&c=login");  
		}else{
			echo "<script>alert('添加失败');location='?a=user&c=login'</script>";
		}

	}

	public function back(){

		session_unset();
		header("location:index.php");

	}

	public function upd(){

		$model = new AdminModel;
		$re = $model -> upd();
		if(!$re){
			header("location:admin.php?a=user&c=login");
		}else{
			echo "<script>alert('修改失败');location='?a=user&c=login'</script>";
		}

	}

	public function del(){

		$model = new AdminModel;
		$re = $model -> del();
		if(!$re){
			header("location:admin.php?a=user&c=login");   
		}else{
			echo "<script>alert('删除失败');location='?a=user&c=login'</script>";
		}

	}

	public function user_only() {

		$model = new AdminModel;
		$re = $model -> user_only();
		if($re){
			echo "次用户名已有人用";
		}else{
			echo "可以使用";
		}

	}

}