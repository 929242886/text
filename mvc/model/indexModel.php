<?php

/**
 *indexModel
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class IndexModel extends baseModel{

	public $pagesize = 10;

	function index(){
		
		return $arr =$this -> db -> getRow("user");
		
	}

	function nav() {

		return $this -> db -> sql("select * from nav  order by `order` desc");

	}

   public function xian(){

	   $sql=$this->db->getRows('nav');
     return $sql;

   }
   public function whisper(){

     $sql=$this->db->getRows('twitter');
     return $sql;

   }
   public function xian3(){

     $sql=$this->db->getRows('link');
     return $sql;

   }

   public function xian2(){

    $sql=$this->db->sql("select * from article inner join article_type on article.t_id=article_type.t_id where article.is_show=1 order by article.top");
    return $sql;

   }
   public function ping(){

    $a=$_GET['gid'];
    $liu = $this -> db -> getRow("article",array("id"=>$a));
    $liulan = $liu['liulan']+1;
    $sql=$this->db->getRow('article',array("id"=>$a));
    $up = $this -> db -> Up("article",array("id"=>$a),array("liulan"=>$liulan));
    return $sql;

   }

   public function pi(){

    $a=$_GET['gid'];
    $sql=$this->db->sql("select * from comment where art_id=".$a."");
    return $sql;

   }
   
   public function lun(){

    $gid=$_POST['gid'];
    $comment=$_POST['comment'];
    $date=date("Y-m-d H:i:s",time());
    $hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $ip = gethostbyname("$hostname");
    $sql=$this->db->Insert('comment',array("art_id"=>$gid,"datetime"=>$date,"content"=>$comment,'user'=>'admin','ip'=>$ip));
    $sql2=$this->db->getRow('article',array("id"=>$gid));
    $mmm=$sql2['dianzan'];
    $mmm=$mmm+1;
    $sql3=$this->db->Up('article',array("id"=>$gid),array("dianzan"=>$mmm));
   return $sql;

   }

   public function reply() {

   	$re = $this -> db -> getRows("reply");
   	return $re;

   }

   public function twitter() {
    
    return $re = $this -> db -> getRow('twitter');

   }

}	
?>