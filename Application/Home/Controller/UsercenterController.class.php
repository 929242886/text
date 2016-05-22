<?php
/*
*作者：崔凯强
*/
namespace Home\Controller;
use Think\Controller;
class UsercenterController extends Controller {
	//用户查看简历
    public function index(){
    	//实例化模型
    	//$id=$_SESSION['u)id'];
    	$id=15;
    	$User = D('Resume');
    	//查看简历信息
    	$arr=$User->sel($id);
    	// print_r($arr);die;
    	//查看求职意向
    	$pos=M('position');
    	$pos=$pos->select();
    	//查看学历
    	$edu=M('education');
    	$edu=$edu->select();
    	//查看期望薪资
    	$salary=M('money');
    	$salary=$salary->select();
    	//查看工作经验
    	$exper=M('experience');
    	$exper=$exper->select();
    	// print_r($arr);die;
    	$this->assign('u_id',$id);
    	$this->assign('arr',$arr);	
    	$this->assign('edu',$edu);	
    	$this->assign('pos',$pos);	
    	$this->assign('salary',$salary);	
    	$this->assign('exper',$exper);	
        $this->display('index');
    }
    //简历模块
    public function doadd(){
    	$data=I('post.');
    	$u_id=$data['u_id'];
    	//判断是否有图片上传
    	// if (!empty($data['r_img'])) {
    		$upload = new \Think\Upload();// 实例化上传类  
	  		$upload->autoSub  = false; //不允许创建自动创建子目录 
	  		// $upload->saveName='time';
	  		$upload->maxSize   = 3145728 ;// 设置附件上传大小    
	  		$upload->exts      = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
	  		$upload->rootPath  =  './Public/Uploads/';
	  		//$upload->savePath  =  'uploads/'; // 设置附件上传目录    // 上传文件    
	  		$info   =   $upload->upload();   
	  		//var_dump($upload->getError());die;
	  		// print_r($info);die;
	  		if(!$info) {// 上传错误提示错误信息        
	  			$this->error($upload->getError());    
	  		}
	  		$data['r_img']=$info['r_img']['savename'];
    	// }
    	
  		$data['r_addtime']=date('Y-m-d H:i:s');
  		$data['r_project']=I('post.editorValue');
  		// echo $data['r_addtime'];die;
  		// print_r($data);die;
    	//判断是修改简历还是新简历入库
    	if (!empty($u_id)) {
    		//修改简历
    		$User = D('Resume');
    		$re=$User->up($data,$u_id);
    		if ($re) {
    			$this->success('保存成功',U('index'));
    		}else{
    			$this->error('保存失败',U('index'));
    		}
    	}else{
    		//新增简历
    		$data['r_status']=0;
    		// $uid=$_SESSION['u_id'];
    		$data['u_id']=10;
    		$User = D('Resume');
    		unset($data['editorValue']);
    		$re=$User->adds($data);
    		if ($re) {
    			$this->success('保存成功',U('index'));
    		}else{
    			$this->error('保存失败',U('index'));
    		}
    	}
    	// print_r($data);die;
    	// print_r($_FILES);die;
    	// add($data='',$options=array(),$replace=true);
    }
    public function aaa(){
    	$upload = new \Think\Upload();// 实例化上传类  
  		$upload->autoSub  = false; //不允许创建自动创建子目录 
  		$upload->saveName='time';
  		$upload->maxSize   = 3145728 ;// 设置附件上传大小    
  		$upload->exts      = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
  		$upload->rootPath  =  './Public/uploads/';
  		//$upload->savePath  =  'uploads/'; // 设置附件上传目录    // 上传文件    
  		$info   =   $upload->upload();   
  		//var_dump($upload->getError());die;
  		print_r($info);die;
  		if(!$info) {// 上传错误提示错误信息        
  			$this->error($upload->getError());    
  		}
    }
    //收到邀请
    public function invite(){
    	// echo "1";
    	// $u_id=$_SESSION['u_id'];
    	$u_id=2;
    	$invite=D('Log');
    	$arr=$invite->sel($u_id);
    	$this->assign('arr',$arr);
    	$this->display();
    }

    //是否显示面试时间
   	public function mianshi(){
   		$id = I('get.id');
   		$log = D('Log');
   		$data = $log->find($id);
   		if($data['is_show'] == 1){
   			$data['is_show']=0;
   		}else{
   			$data['is_show']=1;
   		}
   		if($log->where('id='.$id)->save($data)){
   			echo 1;
   		}else{
   			echo 0;
   		}
   	}
   	//是否接受面试邀请
   	public function inv(){
   		$id = I('get.id');
   		$log = D('Log');
   		$data = $log->find($id);
   		if($data['is_accept'] == 1){
   			$data['is_accept']=0;
   		}else{
   			$data['is_accept']=1;
   		}
   		if($log->where('id='.$id)->save($data)){
   			echo 1;
   		}else{
   			echo 0;
   		}
   	}
}