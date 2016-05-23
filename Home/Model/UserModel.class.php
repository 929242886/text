<?php
namespace Home\Model;
use Think\Model;


class UserModel extends Model{
	/*
	*学生批量删除
	*作者：李亚博
	*/
	public function dele($u_id){

		$e_id = '';
		foreach ($u_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$row = $this->table("qipin_user")->where("u_id in($e_id)")->delete();
		return $row;

	}

	/*
	*批量查询出所选评价学生
	*作者：李亚博
	*/
	public function comment_model($u_id){
		$e_id = '';
		foreach ($u_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$row  = $this->table("qipin_user")->where("u_id in($e_id)")->join("qipin_money on qipin_user.m_id = qipin_money.m_id")->select();
		return $row;
	}

	/*
	*查询全部月份
	*作者：李亚博
	*/
	public function comment_month(){
		$db = M('month');
		$arr = $db->select();
		return $arr;
	}

	

}