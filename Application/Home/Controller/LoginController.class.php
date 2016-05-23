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
					$this->redirect('Company/index');
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
      	 $user_ip = md5($_SERVER['REMOTE_ADDR']);
      	 $verify_num = $_POST['verify'];
      	 if($verify_num != ''){
            $v_num = cookie($user_ip);
            if($v_num == ''){
                $this->error('验证码已经过期，请重新获取！');die;
            }else if($v_num != $verify_num){
                $this->error('您输入的验证码错误，请重新输入！');die;
            }
        }
      if($a=$enterprise->add($_POST)){
      	$_SESSION['id']=$a;
        $this->redirect('Company/index');
      }else{
        $this->error('添加失败',U('add'));
      		}
	}
	/*
     * @arthurdou
     * @手机验证码操作
     */
    public function verify(){
        $phone_num = I('get.phone');
        $v_num= (int)rand (100000,999999);
        $post_data = "account=caijunqi&password=a920426&mobile=$phone_num&content=".rawurlencode("您的验证码是：【".$v_num."】。请不要把验证码泄露给其他人。如非本人操作，可不用理会！");
        $url = "http://sms.106jiekou.com/utf8/sms.aspx";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_NOBODY, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        $return_str = curl_exec($curl);
        curl_close($curl);
        $user_ip = md5($_SERVER['REMOTE_ADDR']);
        cookie($user_ip,$v_num,300);
        echo $return_str;
    }
    public function ajax(){
    	$phone=$_GET['phone'];
    	$enterprise=D('enterprise');
    	$where="e_phone='$phone'";
		$data=$enterprise->where($where)->find();
		if($data){
			echo 1;
		}else{
			echo 2;
		}
    }
}

?>