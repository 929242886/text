<?php
  namespace Home\Controller;
  use Think\Controller;
  class ConditionController extends PublicController{
    /*
    *职位列表（分页、搜索、关键字标红、保留关键字）
    *作者：李亚博
    */
  		public function position(){

  			$db = M('position'); 
  			$where = 'p_id > 0';
	        $keyword = $_GET['keyword'];
	        if(!empty($keyword)) 
	        $where = " p_name like '%$keyword%'"; 
	        $count      = $db->where($where)->count();// 查询满足要求的总记录数
	        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
	        $Page->setConfig('first','第一页');
	        $Page->setConfig('prev','上一页');
	        $Page->setConfig('next','下一页');
	        $Page->setConfig('end','最后一页');
	        $show       = $Page->show();// 分页显示输出
	        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
	        $list = $db->where($where)->order('p_id desc ')->limit($Page->firstRow.','.$Page->listRows)->select();
	        //关键字标红
	        // print_r($list);die;
	        if(!empty($keyword)){
	            foreach($list as $k=>$v){
	               $list[$k]['p_name'] =  str_replace($keyword,"<font color='red'>".$keyword."</font>",$v['p_name']);
	            }
	        }
	        $this->assign('count',$count);
	        $this->assign('keyword',$keyword);
	        $this->assign('arr',$list);
	        $this->assign('page',$show);
	        $this->display();

  		}

      /*
      *职位（批量删除、批量修改、添加）
      *作者：李亚博
      */
  		public function delete(){
  			$p_id = $_GET['p_id'];
  			$db = D('position');
  			if ($_GET['submit']) {  

  				$arr = $db->dele($p_id);
	  			if ($arr) {
	  				$this->success('删除成功',__CONTROLLER__.'/position');
	  			}else{
	  				$this->error('删除失败');
	  			} 
	  			

  			}else if($_GET['update']){
  				$data = $db->update_select($p_id);
  				$this->assign('data',$data);
  				$this->display('update');
  				
  				exit;
  			}else if($_GET['add']){
  				$this->display('position_add');
  			}
  		}

      /*
      *职位批量修改
      *作者：李亚博
      */
  		public function up(){
  			  
  			$db = M('position');
  			foreach($_POST['p_name'] as $k=>$v)
  			{

               $p_name=$v;
               $id=$_POST['p_id'][$k];
      		   $row = $db->where("p_id='$id'")->save(array('p_name'=>$p_name));

  			}

  			if ($row) {
  				$this->success('修改成功',__CONTROLLER__.'/position');
  			}else{
  				$this->error('修改失败');
  			}

  		}

      /*
      *职位添加
      *作者：李亚博
      */
  		public function insert(){
  			$p_name = $_POST['p_name'];
  			$db = D('position');
  			$data = $db->inser_model($p_name);
  			if ($data) {
  				$this->success('添加成功',__CONTROLLER__.'/position');
  			}else{
  				$this->error('添加失败');
  			}
  		}

      /*
      *经验列表（分页、搜索、关键字标红、保留关键字）
      *作者：李亚博
      */
  		public function experience(){

  			$db = M('experience'); 
  			$where = 'ex_id > 0';
	        $keyword = $_GET['keyword'];
	        if(!empty($keyword)) 
	        $where = " e_year like '%$keyword%'"; 
	        $count      = $db->where($where)->count();// 查询满足要求的总记录数
	        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
	        $Page->setConfig('first','第一页');
	        $Page->setConfig('prev','上一页');
	        $Page->setConfig('next','下一页');
	        $Page->setConfig('end','最后一页');
	        $show       = $Page->show();// 分页显示输出
	        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
	        $list = $db->where($where)->order('ex_id desc ')->limit($Page->firstRow.','.$Page->listRows)->select();
	        //关键字标红
	        // print_r($list);die;
	        if(!empty($keyword)){
	            foreach($list as $k=>$v){
	               $list[$k]['e_year'] =  str_replace($keyword,"<font color='red'>".$keyword."</font>",$v['e_year']);
	            }
	        }
	        $this->assign('count',$count);
	        $this->assign('keyword',$keyword);
	        $this->assign('arr',$list);
	        $this->assign('page',$show);
	        $this->display();

  		}

      /*
      *经验（批量删除、批量修改、添加）
      *作者：李亚博
      */
  		public function experience_delete(){

  			$ex_id = $_GET['ex_id'];
  			$db = D('experience');
  			if ($_GET['submit']) {  

  				$arr = $db->experience_dele($ex_id);
	  			if ($arr) {
	  				$this->success('删除成功',__CONTROLLER__.'/experience');
	  			}else{
	  				$this->error('删除失败');
	  			}  

  			}else if($_GET['update']){

  				$data = $db->update_model($ex_id);
  				$this->assign('data',$data);
  				$this->display('experience_update'); 
  				exit;

  			}else if($_GET['add']){

  				$this->display('experience_add');

  			}

  		}

      /*
      *经验批量修改
      *作者：李亚博
      */
  		public function experience_up(){

  			  $db = M('experience');
    			foreach($_POST['e_year'] as $k=>$v)
    			{

               $e_year = $v;
               $id     = $_POST['ex_id'][$k];
        		   $row    = $db->where("ex_id='$id'")->save(array('e_year'=>$e_year));

    			}

    			if ($row) {
    				$this->success('修改成功',__CONTROLLER__.'/experience');
    			}else{
    				$this->error('修改失败');
    			}

  		}

      /*
      *经验添加
      *作者：李亚博
      */
  		public function experience_insert(){
        
    			$e_year = $_POST['e_year'];
          $y = $_POST['y'];
          $e_year2 = $_POST['e_year2'];
          $year = $_POST['year'];
          $arr = $e_year.$y.$e_year2.$year; 
    			$db = D('experience'); 
    			$data = $db->add_model($arr); 
    			if ($data) {
    				$this->success('添加成功',__CONTROLLER__.'/experience');
    			}else{
    				$this->error('添加失败');
    			}
  		}

      /*
      *薪资列表：（分页、搜索、关键字标红、保留关键字）
      *作者：李亚博
      */
  		public function salary(){

  			$db = M('money'); 
        $where = 'm_id > 0';
          $keyword = $_GET['keyword'];
          if(!empty($keyword)) 
          $where = " m_money like '%$keyword%'"; 
          $count      = $db->where($where)->count();// 查询满足要求的总记录数
          $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
          $Page->setConfig('first','第一页');
          $Page->setConfig('prev','上一页');
          $Page->setConfig('next','下一页');
          $Page->setConfig('end','最后一页');
          $show       = $Page->show();// 分页显示输出
          // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
          $list = $db->where($where)->order('m_id desc ')->limit($Page->firstRow.','.$Page->listRows)->select();
          //关键字标红
          if(!empty($keyword)){
              foreach($list as $k=>$v){
                 $list[$k]['m_money'] =  str_replace($keyword,"<font color='red'>".$keyword."</font>",$v['m_money']);
              }
          }
          $this->assign('count',$count);
          $this->assign('keyword',$keyword);
          $this->assign('arr',$list);
          $this->assign('page',$show);
          $this->display();

  		}

      /*
      *薪资（批量删除、批量修改、添加）
      *作者：李亚博
      */
      public function salary_del_up_add(){

          $m_id = $_GET['m_id'];
          $db = D('money');
          if ($_GET['submit']) {  

              $arr = $db->salary_delete($m_id);
              if ($arr) {
                $this->success('删除成功',__CONTROLLER__.'/salary');
              }else{
                $this->error('删除失败');
              } 
            

          }else if($_GET['update']){
             
              $data = $db->salary_update($m_id);
              $this->assign('data',$data);
              $this->display('salary_up'); 
              exit;

          }else if($_GET['add']){

            $this->display('salary_add');

          }
      }

      /*
      *薪资批量修改
      *作者：李亚博
      */
      public function salary_save(){

        $db = M('money');
        foreach($_POST['m_money'] as $k=>$v)
        {

             $m_money = $v;
             $id     = $_POST['m_id'][$k];
             $row    = $db->where("m_id='$id'")->save(array('m_money'=>$m_money));

        }

        if ($row) {
          $this->success('修改成功',__CONTROLLER__.'/salary');
        }else{
          $this->error('修改失败');
        }

      }

      /*
      *薪资添加
      *作者：李亚博
      */
      public function salary_insert(){
        
        $m_money = $_POST['m_money'];
        $k = $_POST['k'];
        $m_money2 = $_POST['m_money2'];
        $data = $m_money.$k.$m_money2;
        $db = D('money');
        $arr = $db->salary_insert_model($data);
        if ($arr) {
          $this->success('添加成功',__CONTROLLER__.'/salary');
        }else{
          $this->error('添加失败');
        }
      }
}