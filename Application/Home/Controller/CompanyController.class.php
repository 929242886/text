<?php
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller {
    /**
     * @author yangyunfeng
     * @企业用户中心
     */
    public function index()
    {
        $enterprise=D('Enterprise');
        if($_POST)
        {        	
        	if($_POST['e_id']=='')
        	{
                //添加操作
                $time=date('Y-m-d H:i:s',time());
			    $_POST['e_addtime']=$time;
			    //修改营业执照
			     $upload = new \Think\Upload();// 实例化上传类    
			     $upload->maxSize   =     3145728 ;// 设置附件上传大小    
			     $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
			     $upload->savePath  =''; // 设置附件上传目录    // 上传文件     
			     $info   =   $upload->uploadOne($_FILES['e_photo']);  
			      
			     if(!$info){
			     // 上传错误提示错误信息        
			     $this->error($upload->getError());    
			     }else{
			     // 上传成功 获取上传文件信息         
			      $e_photo=$info['savepath'].$info['savename'];   
			      }
			      $_POST['e_photo']=$e_photo;
        		$enterprise->create();
	        	if($enterprise->add($_POST))
	        	{
			        $this->redirect('index');
			    }else{
			        $this->error('添加失败',U('index'));
			    }
        	}
        	else
        	{
        		//var_dump($_POST);die;
        		//修改操作
			  	$time=date('Y-m-d H:i:s',time());
			    $_POST['e_addtime']=$time;
			    if($_FILES['e_photo']['name']==''){
                    $enterprise->create();
				  	if($enterprise->save()){
				  		$this->redirect('index');
				  	}else{
				  		$this->error('修改失败',U('index'));
				  	}
			    }else{
		                //修改营业执照
					     $upload = new \Think\Upload();// 实例化上传类    
					     $upload->maxSize   =     3145728 ;// 设置附件上传大小    
					     $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
					     $upload->savePath  =''; // 设置附件上传目录    // 上传文件     
					     $info   =   $upload->uploadOne($_FILES['e_photo']);  
					      
					     if(!$info) {
					     // 上传错误提示错误信息        
					     $this->error($upload->getError());    
					     }else{
					     // 上传成功 获取上传文件信息         
					      $e_photo=$info['savepath'].$info['savename'];   
					      }
					      $_POST['e_photo']=$e_photo;
					  	$enterprise->create();
					  	if($enterprise->save()){
					  		$this->redirect('index');
					  	}else{
					  		$this->error('修改失败',U('index'));
					  	}
			    }
			    

        	}
        	
        }
        $e_id=$_SESSION['id'];
        //print_r($e_id);die;
        $row=$enterprise->find($e_id);
        //print_r($row);die;
        //推送消息
        $resume=D('Resume');
        $res=$resume->order("r_addtime desc")->limit("4")->select();
        //print_r($res);die;
        
        $money=D('Money');
        foreach($res as $k=>$v)
        {	
        	$id=$v['m_id'];
        	$where="m_id='$id'";
        	$moneys=$money->where($where)->find();
        	
        	$res[$k]['money']=$moneys['m_money'];

        }
        //print_r($res);die;
        $this->assign('res',$res);
        $this->assign('data',$row);
        $this->display('index');
    }
    /**
     * @已邀请人才
     */
    public function invite()
    {
        $log=D('Log');
        $e_id=$_SESSION['id'];
        $row=$log->where(array('e_id'=>$e_id))->select();
        //print_r($row);die;
        foreach($row as $k=>$v)
        {
        	$resume=D('Resume');
        	$row[$k]['s']=$resume->where(array('r_id'=>$v['r_id']))->find();
        	//print_r($arr);die;
        }
        //print_r($row);die;
        $this->assign('data',$row);
        $this->display('invite');
    }
    /**
     * @修改密码
     */
    public function update()
    {
        $enterprise=D('Enterprise');
        if($_POST)
        {
        	
			  	if($_POST['e_id']){
			  		$enterprise->create();
				  	if($enterprise->save()){
				  		$this->redirect('Login/index');
				  	}else{
				  		$this->error('修改失败',U('index'));
				  	}
			  	}
        }
        $e_id=$_SESSION['id'];
        $row=$enterprise->find($e_id);
        //print_r($row);die;
        $this->assign('row',$row);
        $this->display('update');
    }
    /*
     * @arthurdou
     * @手机验证码操作
     */
    public function verify(){
        $phone_num = I('get.phone');
        $v_num= (int)rand (100000,999999);
        $post_data = "account=arthurdou&password=doudou&mobile=$phone_num&content=".rawurlencode("您的验证码是：【".$v_num."】。请不要把验证码泄露给其他人。如非本人操作，可不用理会！");
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

   
}