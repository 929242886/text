<?php

/**
 *tagModel
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class TagModel extends BaseModel
{

	/*
	 *查询标签
	*/

	public function sel(){

		$arr=$this->db->getRows('tag');
		return $arr;

	}

	/*
	 *删除标签
	*/

	public function del($id){

		for ($i=0; $i < count($id); $i++) { 
			$a_id=$id[$i];
			$sql="delete from tag where id = $a_id";
			$re=$this->db->query($sql);
		}
		return $re;

	}

	public function tag_up() {

		return $this -> db -> getRow('tag',array("id"=>$_GET['id']));

	}

	function up_pro() {

		$arr = array(
				'tagname' => $_POST['tagname'],
				
			);
		return $this -> db -> Up('tag',array('id'=>$_POST['id']),$arr);

	}

}