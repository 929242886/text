<?php
  namespace Home\Controller;
  use Think\Controller;
  class ResumeController extends PublicController{
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
	        // print_r($list);die;
	        //关键字标红
	        if(!empty($keyword)){
	            foreach($list as $k=>$v){
	               $list[$k]['r_name'] =  str_replace($keyword,"<font color='red'>".$keyword."</font>",$v['r_name']);
	            }
	        }
	        $this->assign('count',$count);//总数
	        $this->assign('keyword',$keyword);//保留关键字
	        $this->assign('arr',$list);// 赋值数据集
	        $this->assign('page',$show);// 赋值分页输出
	        $this->display(); // 输出模板
	  			// $this->display();
  		}


  		public function details(){

  			$r_id = $_GET['r_id'];
  			$db = M('resume');
  			$where = "SELECT * FROM qipin_resume left join qipin_education on qipin_resume.r_education = qipin_education.e_id left join qipin_money on qipin_resume.m_id = qipin_money.m_id left join qipin_position on qipin_resume.p_id = qipin_position.p_id left join qipin_experience on qipin_resume.eid = qipin_experience.e_id where r_id=$r_id";
  			$arr = $db->query($where);
	        $this->assign('arr',$arr);// 赋值分页输出
	        $this->display(); // 输出模板

  		}

  		public function delete(){
  			$r_id = $_POST['r_id'];
  			// print_r($r_id);die;
  			$db = D('resume');
  			$arr = $db->dele($r_id);
  			if ($arr) {
  				$this->success('删除成功',__CONTROLLER__.'/resume');
  			}else{
  				$this->error('删除失败');
  			}
  		}
}