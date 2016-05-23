<?php
namespace Home\Model;
use Think\Model;


class HistoryModel extends Model{
	public function history_add($e_situation,$e_evaluate,$u_id){
		$db   = M('history');
		$arr  = array('u_id'=>$u_id,'e_situation'=>$e_situation,'e_evaluate'=>$e_evaluate);
		$data = $db->add($arr);
		return $data;
	}

	public function history_del($h_id){
		$e_id = '';
		foreach ($h_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$row  = $this->table("qipin_history")->where("h_id in($e_id)")->delete();
		return $row;
	}

	public function update_select($h_id){
		$e_id = '';
		foreach ($h_id as $key => $value) {
			$e_id .= $value.',';
		}
		$e_id = trim($e_id,',');
		$data = $this->table("qipin_history")->where("h_id in($e_id)")->join("qipin_user on qipin_user.u_id = qipin_history.u_id")->select();
		return $data;
	}
}