<?php 

/**
 *baseModel
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class baseModel {

	public $db = false;
	function __construct(){
		session_start();
		return $this -> db = mysql::getInstance();

	}
}
?>