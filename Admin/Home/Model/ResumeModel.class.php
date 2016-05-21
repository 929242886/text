<?php
namespace Home\Model;
use Think\Model;


class ResumeModel extends Model{
	public function dele($r_id){
		$e_id = '';
		foreach ($r_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$row = $this->table("qipin_resume")->where("r_id in($e_id)")->delete();
		return $row;
	}
}