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
     	 $user=D('User');
     	 if($user->validate($user->rules)->create()){
              $this->success("登录成功",U('Index/index'),2);
     	 }else{
     	 	$this->error($user->getError(),U('Login/login'),2);
     	 }
     }  
	
	public function logout()
	{
		
		session(null);
		$this->success('退出成功',U('Login/login'));
	}
	
		 
		
}



?>