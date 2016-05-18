<?php
namespace Admin\Controller;
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
     	 $admin=D('Admin');
		 if($admin->login1()){
			 $this->success('登陆成功',U('Index/index'),3);
          
		 }else{
			 $this->error('用户名不存在',U('Login/login'),'3');
		 }
     	 
     }  
	//退出成功
	public function logout()
	{
		unset($_SESSION['userid']);
        unset($_SESSION['username']);
		$this->success('退出成功',U('Login/login'));
	}
	
		 
		
}



?>