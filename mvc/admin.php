<?php
if(isset($_GET['c'])){
	$c = ucfirst(trim($_GET['c']));
}else{ 
	$c = 'Index';
}
if(isset($_GET['a'])){
	$a = trim($_GET['a']);
}else{
	$a = 'login';
}

//IndexController.php
$cname = $c."Controller";
//index
$aname = $a;

include_once("./controller/".$cname.".php");
$obj =  new $cname;
$obj -> $aname();

function  __autoload($class_name){
	//echo $class_name."</br>";
	if(strpos($class_name,"Controller") !== false){

		include_once("./controller/".$class_name.".php");

	}else if(strpos($class_name,"Model") !== false){

		include "./model/".$class_name.".php";

	}else if(strpos($class_name,"mysql") !== false){

		include "./lib/mysql.php";

	}

}
?>