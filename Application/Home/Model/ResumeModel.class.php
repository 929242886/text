<?php
/**
 * author : shilinpeng
 * time   : 2016/5/20
 */
namespace Home\Model;
use Think\Model;
class ResumeModel extends Model {
	
	/**
	 * 获取面试职位是项目经理
	 */
    public function getresumeone(){
		
		return $this->join("qipin_position on qipin_resume.p_id = qipin_position.p_id")->where(" qipin_position.p_id = 1")->limit(4)->select();
		
    }
	/**
	 * 获取面试职位是产品经理
	 */
	public function getresumetwo(){
		
		return $this->join("qipin_position on qipin_resume.p_id = qipin_position.p_id")->where(" qipin_position.p_id = 2")->limit(4)->select();
		
    }
	/**
	 * 获取面试职位是高级程序员
	 */
	public function getresumethree(){
		
		return $this->join("qipin_position on qipin_resume.p_id = qipin_position.p_id")->where(" qipin_position.p_id = 3")->limit(4)->select();
		
    }
	/**
	 * 点击更多查看职位下所有简历
	 */
	public function positionRows($cid){
		
		return $this->join("qipin_position on qipin_resume.p_id = qipin_position.p_id")->where(" qipin_position.p_id = $cid")->select();
		
    }
	/**
	 * 点击更多查看职位下所有简历
	 */
	public function positioncount($cid){
		
		return $this->join("qipin_position on qipin_resume.p_id = qipin_position.p_id")->where(" qipin_position.p_id = $cid")->count();
		
    }
    public function sel($id){
		$arr=$this->Table('qipin_resume')->join("left join qipin_user on qipin_resume.u_id=qipin_user.u_id")->join("left join qipin_position on qipin_resume.p_id=qipin_position.p_id")->join("left join qipin_money on qipin_resume.m_id=qipin_money.m_id")->join("left join qipin_experience on qipin_resume.eid=qipin_experience.ex_id")->join("left join qipin_education on qipin_resume.r_education=qipin_education.ed_id")->where("qipin_resume.u_id=$id")->find();
		return $arr;
	}
	/**
	 * 点查询建立详细信息
	 */
	public function resume($id){
                return $this->
                    join("qipin_user on qipin_user.u_id=qipin_resume.u_id")->
                    join("qipin_position on qipin_position.p_id=qipin_resume.p_id")->
                    join("qipin_money on qipin_money.m_id=qipin_resume.m_id")->
                    //join("qipin_education on qipin_education.ed_id=qipin_resume.R_education")->
                    //join("qipin_experience on qipin_experience.ex_id=qipin_resume.eid")->
                    where("qipin_resume.r_id=$id")->select();
                    //return $this->select();
           }
	/**
	 * 搜索
	 */
	public function searchs($where,$where1,$where2){
		
		return $this->join("qipin_position on qipin_resume.p_id = qipin_position.p_id")->join(" qipin_money on qipin_resume.m_id = qipin_money.m_id")->where("$where and $where1 $where2")->select();

	}
	/**
	 * 搜索数量
	 */
	public function searchcount($where,$where1,$where2){
		
		return $this->join("qipin_position on qipin_resume.p_id = qipin_position.p_id")->join(" qipin_money on qipin_resume.m_id = qipin_money.m_id")->where("$where and $where1 $where2")->count();

	}
	//修改简历
	public function up($data,$r_id){
		// print_r($data);die;
		$re=$this->where("r_id=".$r_id)->save($data);
		return $re;
	}
	//添加简历
	public function adds($data){
		// print_r($data);die;
		// $re=$this->data($data)->add();
		$re=$this->add($data);
		return $re;
	}
}