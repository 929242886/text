<?php
  namespace Home\Controller;
  use Think\Controller;
  class IndexController extends Controller{
		

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
				 $data=D('Adminuser');
    			 $arr=$data->show();
    			 foreach ($arr as $k => $v) {
    			 $rbc[]=$v['p_cont'];
    			}
    			 session('power',$rbc);
				 $this->success('登陆成功',U('Index/index'),3);

			 }else{

			     $this->error('密码错误',U('Index/login'),3);

			 }
		 }else{

			 $this->error('用户名错误',U('Index/login'),'3');

		 }
     	 
     }  
	//退出成功
	public function logout()
	{

		unset($_SESSION['admin_name']);
        unset($_SESSION['admin_id']);
		$this->success('退出成功',U('Index/login'));

	}
	
	public function index(){
		if($_SESSION['admin_name']==''){
			 $this->error('请先登录',U('Index/login'),3);
		}else{
			$this->display('index');
		}
		
	} 
	public function left()
		{

			$user=D('User');
			$this->data=$user->getQx();
			//var_dump($data);exit;
			$this->display('left');

		}
		public function right()
		{

			$this->display('right');

		}
		public function top()
		{

			$this->display('top');
			
		}

		function show(){

        if(!session('admin_name')){
            $this->error('请先登陆');
        }
    	$data=D('Adminuser');
    	$arr=$data->show();
    	foreach ($arr as $k => $v) {
    		$rbc[]=$v['p_cont'];
    	}
    	//print_r($)
        session('power',$rbc);
       // $info=D('Node');
        //$node=$info->node();
       // $this->assign('node',$node);
    	//$this->assign('arr',$arr);	
    	//$this->display();
    }
}
?>