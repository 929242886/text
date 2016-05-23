<?php
namespace Home\Model;
use Think\Model;


class ExperienceModel extends Model{
	/*
	*model层
	*经验批量删除
	*作者：李亚博
	*/
	public function experience_dele($ex_id){

		$e_id = '';
		foreach ($ex_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$row = $this->table("qipin_experience")->where("ex_id in($e_id)")->delete();
		return $row;

	}

	/*
	*model层
	*经验批量修改列表
	*作者：李亚博
	*/
	public function update_model($ex_id){
		$e_id = '';
		foreach ($ex_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$data = $this->table("qipin_experience")->where("ex_id in($e_id)")->select();
		return $data;
	}

	/*
	*model层
	*经验添加
	*作者：李亚博
	*/
	public function add_model($e_year){
		// print_r($e_year);die;
		$arr=array('e_year'=>$e_year);
		$data = $this->add($arr);
		return $data;
	}

}