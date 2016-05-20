<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller
{
	//显示登录表单的方法
	public function login()
	{

		$this->display('login');
		
	}
	

	//登录验证
	public function dologin(){
		
     	 $admin=D('Adminuser');
		 $row=$admin->login1();
		 $name =trim($_POST['admin_name']);
	     $password=trim($_POST['password']);
		 $pwd = md5($password);
		 if($row){

			 if($row['a_pwd']==$pwd)

			 {

				 //开启session
				 session_start();
				 session('admin_name',$name);
				 session('admin_id',$row['admin_id']);
				 $this->success('登陆成功',U('Index/index'),3);

			 }else{

			     $this->error('密码错误',U('Login/login'),3);

			 }
		 }else{

			 $this->error('用户名错误',U('Login/login'),'3');

		 }
     	 
     }  
	//退出成功
	public function logout()
	{

		unset($_SESSION['admin_name']);
        unset($_SESSION['admin_id']);
		$this->success('退出成功',U('Login/login'));

	}
	
		 
		
}



?>