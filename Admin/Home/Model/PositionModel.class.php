<?php
namespace Home\Model;
use Think\Model;


class PositionModel extends Model{
	/*
	*model层
	*职位批量删除
	*作者：李亚博
	*/
		public function dele($p_id){

		$e_id = '';
		foreach ($p_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$row = $this->table("qipin_position")->where("p_id in($e_id)")->delete();
		return $row;

	}

	/*
	*model层
	*职位修改列表
	*作者：李亚博
	*/
	public function update_select($p_id){
		$e_id = '';
		foreach ($p_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$data = $this->table("qipin_position")->where("p_id in($e_id)")->select();
		return $data;
	}

	/*
	*model层
	*职位添加
	*作者：李亚博
	*/
	public function inser_model($p_name){
		$data = $this->add($p_name);
		return $data;
	}
}