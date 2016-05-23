<?php
  namespace Home\Controller;
  use Think\Controller;
  class StudentController extends PublicController{
  		/*
  		*学生模拟面试列表（分页、搜索、关键字标红、保留关键字）
  		*作者：李亚博
  		*/
  		public function student(){

  			  $db      = M('user'); 
	        $keyword = $_GET['keyword'];
	        $where   = 'u_id > 0';
	        if(!empty($keyword))$where = " u_name like '%$keyword%'"; 
	        $count = $db->join("qipin_money on qipin_user.m_id = qipin_money.m_id")->where("$where")->count();// 查询满足要求的总记录数
	        $Page     = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
	        $Page->setConfig('first','第一页');
	        $Page->setConfig('prev','上一页');
	        $Page->setConfig('next','下一页');
	        $Page->setConfig('end','最后一页');
	        $show     = $Page->show();// 分页显示输出
	        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
	        $list     = $db->join("qipin_money on qipin_user.m_id = qipin_money.m_id")->where("$where")->order('u_id desc ')->limit($Page->firstRow.','.$Page->listRows)->select();
	        //print_r($list);die;
	        //关键字标红
	        if(!empty($keyword)){
	            foreach($list as $k=>$v){
	               $list[$k]['u_name'] =  str_replace($keyword,"<font color='red'>".$keyword."</font>",$v['u_name']);
	            }
	        }

	        $this->assign('count',$count);
	        $this->assign('keyword',$keyword);
	        $this->assign('arr',$list);
	        $this->assign('page',$show);
	        $this->display();

  		}

      /*
      *批量（删除、查询出所选学生）
      *作者：李亚博
      */
  		public function delete(){

  			$u_id  = $_GET['u_id']; 
  			$db    = D('user');
  			if ($_GET['submit']) {  

  				$arr = $db->dele($u_id);
	  			if ($arr) {
	  				$this->success('删除成功',__CONTROLLER__.'/student');
	  			}else{
	  				$this->error('删除失败');
	  			} 
	  			exit;

  			}else if($_GET['comment']){
  				$arr = $db->comment_model($u_id); 
          $obj = $db->comment_month(); 
          $this->assign('obj',$obj);
  				$this->assign('arr',$arr);
  				$this->display('teacher_comment');
  			}

  		}

      /*
      *批量评论学生的模拟面试情况
      *作者：李亚博
      */
  		public function comment_add(){
  			
        $mo_id = $_POST['mo_id']; 
        $id    = $_POST['admin_id']; 
  			$db    = M('history');
  			foreach($_POST['e_situation'] as $k=>$v)
  			{
  				
               $e_situation = $v;
               $u_id        = $_POST['u_id'][$k];
               $e_evaluate  = $_POST['e_evaluate'][$k]; 
               $arr         = array('mo_id'=>$mo_id,'a_id'=>$id,'u_id'=>$u_id,'e_situation'=>$e_situation,'e_evaluate'=>$e_evaluate);
      		     $row         = $db->add($arr);

  			}
  			if ($row) {
          $this->success('评论成功',__CONTROLLER__.'/student');
        }else{
          $this->error('评论失败');
        }

  		}

      /*
      *查看老师评价
      *作者：李亚博
      */
      public function viewcomments(){

          $admin_id = session('admin_id');
          $db       = M('history'); 
          $keyword  = $_GET['keyword'];
          $where    = 'h_id > 0';
          if(!empty($keyword))$where = " u_name like '%$keyword%'"; 
          $count = $db
          ->join("qipin_user on qipin_user.u_id = qipin_history.u_id")
          ->join("qipin_adminuser on qipin_adminuser.a_id = qipin_history.a_id and $admin_id=qipin_history.a_id")
          ->join("qipin_month on qipin_history.mo_id=qipin_month.mo_id")
          ->where("$where")
          ->count();// 查询满足要求的总记录数 
          $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
          $Page->setConfig('first','第一页');
          $Page->setConfig('prev','上一页');
          $Page->setConfig('next','下一页');
          $Page->setConfig('end','最后一页');
          $show       = $Page->show();// 分页显示输出
          // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
          $list = $db
          ->join("qipin_user on qipin_user.u_id = qipin_history.u_id")
          ->join("qipin_adminuser on qipin_adminuser.a_id = qipin_history.a_id and $admin_id=qipin_history.a_id")
          ->join("qipin_month on qipin_history.mo_id=qipin_month.mo_id")
          ->where("$where")
          ->order('h_id desc ')
          ->limit($Page->firstRow.','.$Page->listRows)
          ->select();
          //关键字标红
          if(!empty($keyword)){
              foreach($list as $k=>$v){
                 $list[$k]['u_name'] =  str_replace($keyword,"<font color='red'>".$keyword."</font>",$v['u_name']);
              }
          }

          $this->assign('count',$count);
          $this->assign('keyword',$keyword);
          $this->assign('arr',$list);
          $this->assign('page',$show);
          $this->display();

      }

      /*
      *批量（删除、修改查询）
      *作者：李亚博
      */
      public function history_delete(){
         
        $h_id  = $_GET['h_id']; 
        $db    = D('history');
        if ($_GET['submit']) {  
          
          $arr = $db->history_del($h_id);
          if ($arr) {
            $this->success('删除成功',__CONTROLLER__.'/viewcomments');
          }else{
            $this->error('删除失败');
          } 
          exit;

        }else if($_GET['update']){ 

          $data = $db->update_select($h_id); 
          $this->assign('data',$data);
          $this->display('update'); 
          exit;

        } 
        
      }

      /*
      *批量修改老师对学生的模拟评价
      *作者：李亚博
      */
      public function viewcomments_up(){
          
        $db = M('history');
        foreach($_POST['e_situation'] as $k=>$v)
        {
              
            $e_situation = $v;
            $e_evaluate  = $v;
            $id          = $_POST['h_id'][$k];
            $row         = $db->where("h_id='$id'")->save(array('e_evaluate'=>$e_evaluate,'e_situation'=>$e_situation));

        } 

        if ($row) {
          $this->success('修改成功',__CONTROLLER__.'/viewcomments');
        }else{
          $this->error('修改失败');
        }

      }
}