<?php
     

  namespace Home\Controller;
  use Think\Controller;
  header("Content-type:text/html;charset=utf8");
  class EnterpriseController extends PublicController{

    /**
     * 企业信息显示
     * @param $count 数量 $keyword 关键字 $show 分页页码
     * @return array()
     * @author 李江坤
     */

  	public function index() {
      
     //print_r($_GET);die;
        $db = M('enterprise');
  			$where = 'e_id > 0';
  			$keyword = $_GET['keyword'];
	        $where = " e_name like '%$keyword%'"; 
	        $count      = $db->where($where)->count();// 查询满足要求的总记录数
	        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
	        $Page->setConfig('first','第一页');
	        $Page->setConfig('prev','上一页');
	        $Page->setConfig('next','下一页');
	        $Page->setConfig('end','最后一页');
	        $show       = $Page->show();// 分页显示输出
	        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
	        $list = $db->where($where)->order('e_id desc ')->limit($Page->firstRow.','.$Page->listRows)->select();
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

  	}
  	/**
  	 * 删除企业信息
  	 * @param 
  	 * @return string
  	 * @author 李江坤
  	 */
    public function delete()
    {
  			$e_id = I('e_id');
  			$db = M('enterprise');
  		    $arr = $db->where(array('e_id'=>array('in',$e_id)))->delete();
			if ($arr) {
          
          $this -> redirect('index',array('success'=>'success','messign'=>"删除成功"));
  			}else{
  				$this->assign($success['a'],"error");
          $this->assign($success['aa'],"删除失败");
  		}
    }

    /**
     * 改变企业是否审核
     * @param
     * @return string
     * @author 李江坤
     */
    public function status()
    {
    	$e_id = $_GET['e_id'];
    	$db = M('enterprise');
  		$arr = $db->where("e_id='$e_id'")->setField('e_status',1);
   		if ($arr) {
  				$this->success('审核成功',__CONTROLLER__.'/index');
  			}else{
  				$this->error('审核失败');
  	   }
    }
  }
?>