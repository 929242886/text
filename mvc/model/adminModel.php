<?php

/**
 *adminModel
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class adminModel extends baseModel{

	function login(){

		$pwd = md5($_POST['pwd']);
		$re = $this -> db -> getRow("user",array('name'=>$_POST['user'],'pwd'=>$pwd));
		if($_POST['ispersis']=='on'){
			setcookie('name',$re['username'],time()+3600*60*24*7);
			setcookie('pwd',$_POST['pwd'],time()+3600*60*24*7);
		}
		 return $re;
		
	}

	function users(){
	
		return $re = $this -> db -> getRows("user");
		
	}

	function user_add(){
		
		$re = $this -> db -> insert("user",array('name'=>$_POST['login'],'pwd'=>md5($_POST['password']),'zhiwei'=>$_POST['zhiwei']));
		
	}

	function user(){
	
		return $re = $this -> db -> getRow("user",array('id'=>$_GET['id']));
		
	}

	function upd(){

   		if(empty($_FILES['photo']['name'])){
   			$arr = array(
    			'name' => $_POST['name'],
    			'email' =>  $_POST['email'],
    			'miaoshu' => $_POST['description'],
    			'username' => $_POST['username'],
    			'pwd' => md5($_POST['newpass']),
    		);
   		$re = $this -> db -> Up('user',array('id'=>$_POST['id']),$arr);
   		}else{
   			$img = $_FILES['photo'];
    	$c_path = "./common/images/".md5($img['name']).substr($img['name'],
    		strrpos($img['name'],"."));
    	move_uploaded_file($_FILES['photo']['tmp_name'], $c_path);
    	$img = './common/images/'.md5($img['name']).substr($img['name'],strrpos($img['name'],"."));
    	$arr = array(
    			'name' => $_POST['name'],
    			'email' =>  $_POST['email'],
    			'miaoshu' => $_POST['description'],
    			'username' => $_POST['username'],
    			'pwd' => md5($_POST['newpass']),
    			'img' => $img,
    		);
   		$re = $this -> db -> Up('user',array('id'=>$_POST['id']),$arr);
   		}
    	
          return $re;
		
	}

	function del() {

		return $this-> db -> del('user',array('id'=>$_GET['id']));

	}

	function user_only() {

		return $this -> db ->getRow('user',array('name'=>$_GET['userss']));

	}


	function count() {

		return $this -> db -> sql("select count(*) as count from user");

	}

}	
?>