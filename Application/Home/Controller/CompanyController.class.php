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
    	$id=$_SESSION['id'];
    	if($id!=''){
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
			        $this->success('添加成功',U('index'));
			    }else{
			        $this->error('添加失败',U('index'));
			    }
        	}
        	else
        	{
        		//修改操作
			  	$time=date('Y-m-d H:i:s',time());
			    $_POST['e_addtime']=$time;
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
			  		$this->success('修改成功',U('index'));
			  	}else{
			  		$this->error('修改失败',U('index'));
			  	}

        	}
        	
        }
        $e_id=$_SESSION['id'];
        $row=$enterprise->find($e_id);
        //print_r($row);die;
        $this->assign('data',$row);
        $this->display('index');
    }else{
    	$this->error('您未登录',U('Login/index'));
    }
    }
    /**
     * @已邀请人才
     */
    public function invite()
    {
    	$id=$_SESSION['id'];
    	if($id!=''){
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
        }else{
    	$this->error('您未登录',U('Login/index'));
    }
    }
    /**
     * @修改密码
     */
    public function update()
    {
    	$id=$_SESSION['id'];
    	if($id!=''){
        $enterprise=D('Enterprise');
        if($_POST)
        {
        	
        	if($_POST['e_pwd']==$_POST['re_pwd'])
        	{
			  	if($_POST['e_id']){
			  		$enterprise->create();
				  	if($enterprise->save()){
				  		$this->success('修改成功',U('index'));
				  	}else{
				  		$this->error('修改失败',U('index'));
				  	}
			  	}
        	}
        	else
        	{
        		$this->error('两次密码输入不一致',U('update'));
        	}
        }
        $e_id=$_SESSION['id'];
        $row=$enterprise->find($e_id);
        //print_r($row);die;
        $this->assign('row',$row);
        $this->display('update');
        }else{
    	$this->error('您未登录',U('Login/index'),0);
    }
    }
    /**
     * 短信验证码处理
     */
    public function message()
    {
    	 
    	session_start();
		if($_POST){
			//echo '<pre>';print_r($_POST);print_r($_SESSION);
			if($_POST['mobile']!=$_SESSION['mobile'] or $_POST['mobile_code']!=$_SESSION['mobile_code'] or empty($_POST['mobile']) or empty($_POST['mobile_code'])){
				exit('手机验证码输入错误。');	
			}else{
				$_SESSION['mobile'] = '';
				$_SESSION['mobile_code'] = '';	
				exit('注册成功。');	
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
		$_SESSION['send_code'] = random(6,1);
    }
}