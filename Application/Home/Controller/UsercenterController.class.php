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
    	// $id=I('get.u_id');
    	$id = 3;
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
    	$r_id=$data['r_id'];
    	//判断是否有图片上传
    	$name=$_FILES['r_img']['name'];
    	if (!empty($name)) {
    		$upload = new \Think\Upload();// 实例化上传类  
	  		$upload->autoSub  = false; //不允许创建自动创建子目录 
	  		$upload->saveName='time';
	  		$upload->maxSize   = 3145728 ;// 设置附件上传大小    
	  		$upload->exts      = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
	  		$upload->rootPath  =  './Public/Uploads/';
	  		//$upload->savePath  =  'uploads/'; // 设置附件上传目录    // 上传文件    
	  		$info   =   $upload->upload(); 
	  		if(!$info) {// 上传错误提示错误信息        
	  			$this->error($upload->getError());    
	  		}
	  		$data['r_img']=$info['r_img']['savename'];
    	}
  		// $data['r_addtime']=date('Y-m-d H:i:s');
  		$data['r_project']=htmlspecialchars_decode($data['editorValue']);
    	//判断是修改简历还是新简历入库
    	if (!empty($r_id)) {
    		//修改简历
        // print_r($data);die;
    		$User = D('Resume');
    		$re=$User->up($data,$r_id);
    		if ($re) {
    			$this->success('保存成功',U('index'));
    		}else{
    			$this->error('保存失败',U('index'));
    		}
    	}else{
    		//新增简历
        $data['r_addtime']=date('Y-m-d H:i:s');
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
	 /**
     * @param 
     * @return array();
     * @author 李江坤
     */
    public function simulation()
    {
       $db = M('history');
            $where = 'h_id > 0';
            $count      = $db->where($where)->count();// 查询满足要求的总记录数
            $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
            $Page->setConfig('first','第一页');
            $Page->setConfig('prev','上一页');
            $Page->setConfig('next','下一页');
            $Page->setConfig('end','最后一页');
            $show       = $Page->show();// 分页显示输出
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $db->join('left join qipin_user on  qipin_user.u_id = qipin_history.u_id')
              ->join('left join qipin_month on  qipin_month.mo_id = qipin_history.mo_id')
              ->limit($Page->firstRow.','.$Page->listRows)->select();
       $this->assign('list',$list);
       $this->assign('count',$count);//总数
       $this->assign('page',$show);// 赋值分页输出
       $this->display();
    }
}