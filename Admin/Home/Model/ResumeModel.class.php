<?php
namespace Home\Model;
use Think\Model;


class ResumeModel extends Model{
	/*
	*批量删除
	*作者：李亚博
	*/
	public function dele($r_id){

		$e_id = '';
		foreach ($r_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$row = $this->table("qipin_resume")->where("r_id in($e_id)")->delete();
		return $row;

	}

	/*
	*修改审核状态，通过1
	*作者：李亚博
	*/
	public function adopt_examine($r_id){

		$e_id = '';
		foreach ($r_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$row = $this->table("qipin_resume")->where("r_id in($e_id)")->save(array('r_status'=>'1'));
		return $row;

	}

	/*
	*修改审核状态，未通过0
	*作者：李亚博
	*/
	public function notthrough_examine($r_id){

		$e_id = '';
		foreach ($r_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$row = $this->table("qipin_resume")->where("r_id in($e_id)")->save(array('r_status'=>'0'));
		return $row;

	}

	/*
	*详情简历，五表联查（qipin_resume、qipin_position、qipin_money、qipin_experience、qipin_education）
	*作者：李亚博
	*/
	public function details2($r_id){

		$db = M('resume');
			$arr=$db->Table('qipin_resume')
  			->join("left join qipin_position on qipin_resume.p_id=qipin_position.p_id")
  			->join("left join qipin_money on qipin_resume.m_id=qipin_money.m_id")
  			->join("left join qipin_experience on qipin_resume.eid=qipin_experience.ex_id")
  			->join("left join qipin_education on qipin_resume.r_education=qipin_education.ed_id")
  			->where("qipin_resume.r_id=$r_id")
  			->select();
  			return $arr;

	}
}