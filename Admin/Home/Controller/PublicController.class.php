<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    function __construct(){
         parent::__construct();
         if(session('admin_name')==''){
         	$this->error('请先登录',U('Login/login'),0);
         }
         $node=$_SESSION['power'];
         $url=CONTROLLER_NAME;
         //print_r($node	);
         //echo $url;die;
         if(!in_array($url, $node)){
                $this->error('无权访问',__MODULE__.'/Index/index');
         }
    }
}