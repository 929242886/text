<?php
  namespace Home\Controller;
  use Think\Controller;
  class ResumeController extends PublicController{
  	/*
  	*显示列表，分页，搜索，关键字标红，保留关键字
  	*作者：李亚博
  	*/
  		public function resume(){

  			$db = M('resume'); 
  			$where = 'r_id > 0';
	        $keyword = $_GET['keyword'];
	        if(!empty($keyword)) 
	        $where = " r_name like '%$keyword%'"; 
	        $count      = $db->where($where)->count();// 查询满足要求的总记录数
	        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
	        $Page->setConfig('first','第一页');
	        $Page->setConfig('prev','上一页');
	        $Page->setConfig('next','下一页');
	        $Page->setConfig('end','最后一页');
	        $show       = $Page->show();// 分页显示输出
	        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
	        $list = $db->where($where)->order('r_id desc ')->limit($Page->firstRow.','.$Page->listRows)->select();
	        //关键字标红
	        if(!empty($keyword)){
	            foreach($list as $k=>$v){
	               $list[$k]['r_name'] =  str_replace($keyword,"<font color='red'>".$keyword."</font>",$v['r_name']);
	            }
	        }
	        $this->assign('count',$count);
	        $this->assign('keyword',$keyword);
	        $this->assign('arr',$list);
	        $this->assign('page',$show);
	        $this->display();
	  		
  		}

  		/*
  		*五表联查，详情简历
  		*作者：李亚博
  		*/
  		public function details(){
			   $r_id = $_GET['r_id'];
  			 $db = D('resume');
  			 $arr=$db->details2($r_id);
	       $this->assign('arr',$arr);
	       $this->display();

  		}

  		/*
  		*删除，审核（通过、未通过）
  		*作者：李亚博
  		*/
  		public function delete(){
  			 
  			$r_id = $_POST['r_id']; 
  			$db = D('resume');
  			if ($_POST['submit']) {  

  				$arr = $db->dele($r_id);
	  			if ($arr) {
	  				$this->success('删除成功',__CONTROLLER__.'/resume');
	  			}else{
	  				$this->error('删除失败');
	  			} 
	  			exit;

  			}else if($_POST['examine']){ 

  				$adopt = $db->adopt_examine($r_id);
  				if ($adopt) {
  					$this->success('您选择了通过',__CONTROLLER__.'/resume');
  				}else{
  					$this->error('通过失败，请重新选项');
  				}
  				exit;

  			}else if($_POST['examine2']){ 

  				$notthrough = $db->notthrough_examine($r_id);
  				if ($notthrough) {
  					$this->success('您选择了未通过',__CONTROLLER__.'/resume');
  				}else{
  					$this->error('未通过失败，请重新选项');
  				}
  				exit;
  			}
  			
  		}
}