<?php
namespace Home\Model;
use Think\Model;


class MoneyModel extends Model{
	/*
	*model层
	*薪资批量删除
	*作者：李亚博
	*/
	public function salary_delete($m_id){

		$e_id = '';
		foreach ($m_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$row = $this->table("qipin_money")->where("m_id in($e_id)")->delete();
		return $row;

	}

	/*
	*model层
	*薪资批量修改列表
	*作者：李亚博
	*/
	public function salary_update($m_id){
		$e_id = '';
		foreach ($m_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$data = $this->table("qipin_money")->where("m_id in($e_id)")->select();
		return $data;
	}

	/*
	*model层
	*经验添加
	*作者：李亚博
	*/
	public function add_model($arr){
		// print_r($e_year);die;
		$obj=array('e_year'=>$arr);
		$data = $this->add($obj);
		return $data;
	}

	/*
	*model层
	*薪资批量删除
	*作者：李亚博
	*/
	public function salary_insert_model($data){
		$arr = array('m_money'=>$data);
		$obj = $this->add($arr);
		return $obj;
	}

}