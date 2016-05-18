<?php
namespace Admin\Model;
use Think\Model;


class AdminModel extends Model{

  //验证登陆
  public function login1(){
	  $post=$this->post_check($_POST);
	  $name = $post['admin_name'];
      $password = MD5($post['password']);
	  $row=$this->table("admin")->where("admin_name='$name'")->find();
	  //var_dump($row);die;
	  return $row;
  }

    //防止sql注入,xss攻击
    public function post_check($post) {
      if(!get_magic_quotes_gpc()) {
          foreach($post as $key=>$val){
             $post[$key]  = addslashes($val);
          }
        }
      foreach($post as $key=>$val){
        //把"_"过滤掉
        $post[$key] = str_replace("_", "\_", $val);
        //把"%"过滤掉
        $post[$key] = str_replace("%", "\%", $val); //sql注入
        $post[$key] = nl2br($val);
        //转换html
        $post[$key] = htmlspecialchars($val); //xss攻击
      }
      return $post;
  }
}
?>