<?php


/**
*baseController 
*/

class BaseController{

  public $smarty="";

  function __construct(){

    session_start();
    include_once "./lib/Smarty.class.php";
	spl_autoload_register("__autoload");
	$smarty=new Smarty();
	$smarty->template_dir='./view/';
	$smarty->compile_dir='./view_c/';
	$smarty->cache_dir='./cache';
	$smarty->left_delimiter='{';
	$smarty->right_delimiter='}';
	$smarty->caching=false;
	$this->smarty=$smarty;
	$this->publicVar();

  }

  public function display($tplname){
  	
	$this->smarty->display($tplname);

  }
  public function assign($name,$value){

    $this->smarty->assign($name,$value);

  }

  //模板里显示的公共域名
  public function publicVar(){
  	
    //网站域名(完整域名)
	$this->assign('WEBHOST',WEBHOST);
	//网站静态文件路径(相对)
	$this->assign('STATICPATH',$STATICPATH);
  
  }

}


?>