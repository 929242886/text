<?php
	namespace Home\Model;
	use Think\Model;
	class LogModel extends Model {
	       //$name=session('name');
           public function add1($data){
                //return 1;
                $arr = $this->data($data)->add();
                return $arr;
            }

			//查看邀请
	public function sel($id){
		$arr=$this->Table('qipin_log')->join("left join qipin_resume on qipin_log.r_id=qipin_resume.r_id")->join("left join qipin_enterprise on qipin_log.e_id=qipin_enterprise.e_id")->where("qipin_resume.u_id=$id")->select();
		return $arr;
	}
     }
?>