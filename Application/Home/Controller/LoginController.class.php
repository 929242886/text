<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function index(){
		$this->display();
	}
	public function loginok(){
		if($_POST['remember_me']=='on'){
				setcookie('name',$_POST['e_phone'],time()+3600*24*7);
				setcookie('pwd',$_POST['e_pwd'],time()+3600*24*7);
			}
			$enterprise=D('enterprise');
			$name=$_POST['e_phone'];
			$pwd=$_POST['e_pwd'];
			$where="e_phone='$name'";
			$data=$enterprise->where($where)->find();
			if($data){
				if($data['e_pwd']==$pwd){
					$_SESSION['id']=$data['e_id'];
					$this->success('登陆成功',U('Company/index'));
				}else{
					$this->error('密码错误',U('index'));
				}
			}else{
				$this->error('用户名错误',U('index'));
			}
	}
	
	public function register(){
		$this->display();
	}
	public function registerok(){
	  	$enterprise=D('enterprise');
      	$enterprise->create();
      if($enterprise->add($_POST)){
        $this->success('添加成功',U('list1'));
      }else{
        $this->error('添加失败',U('add'));
      		}
	}
	function random($length = 6 , $numeric = 0) {
	PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
	if($numeric) {
		$hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
	} else {
		$hash = '';
		$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
		$max = strlen($chars) - 1;
		for($i = 0; $i < $length; $i++) {
			$hash .= $chars[mt_rand(0, $max)];
		}
	}
	return $hash;
}

}

?>