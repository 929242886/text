<?php

/**
 *adminModel
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class CommentModel extends baseModel{

	function comment() {

		$re = $this -> db -> getRows("comment");
		return $re;

	}

	function c_del() {

		return $re = $this -> db -> del('comment',array('id'=>$_GET['id']));

	}

	function c_shen() {

		return $re = $this -> db -> Up("comment",array('id'=>$_GET['id']),array("is_show"=>1));

	}

	function c_yin() {

		return $re = $this -> db -> Up("comment",array('id'=>$_GET['id']),array("is_show"=>0));

	}

	function del_all(){

		$id = $_GET['id'];
		$id = explode(',',$_GET['id']);
		foreach($id as $k => $v){
			$re = $this -> db -> del('comment',array('id'=>$v));
		}
		
		return $re;

	}


	function hide_all(){

			$id = $_GET['id'];
			$id = explode(',',$_GET['id']);
			foreach($id as $k => $v){
				$re = $this -> db -> Up('comment',array('id'=>$v),array('is_show'=>0));
			}
			
			return $re;

		}

		function pub_all(){

			$id = $_GET['id'];
			$id = explode(',',$_GET['id']);
			foreach($id as $k => $v){
				$re = $this -> db -> Up('comment',array('id'=>$v),array('is_show'=>1));
			}
			
			return $re;

		}

		function count() {

			return $re = $this -> db -> sql("select count(*) as count from comment"); 

		}


}