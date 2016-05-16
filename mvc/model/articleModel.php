<?php

/**
 *articleModel
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class articleModel extends baseModel{

	function article_type(){

		 $type = $this -> db -> sql("select * from article_type order by `order` desc");
		 return $type;
		
	}

	function article_add(){

		session_start();
		$title = $_POST['title'];
		$top = $_POST['post']=='on'?0:1;
		$sortop = $_POST['sortop']=='on'?0:1;
		$is_sel = $_POST['is_sel']=='on'?0:1;
		$arr = array(
				'title' => $title,
				'content' => $_POST['content'],
				'author' => $_SESSION['name'],
				'u_id' => $_SESSION['id'],
				'datetime' => $_POST['postdate'],
				't_id' => $_POST['sort'],
				'caogao' => $_POST['caogao'],
				'alias' => $_POST['alias'],
				'top' => $top,
				'sortop' => $sortop,
				'is_sel' => $is_sel,
			);
		$re = $this -> db -> Insert('article',$arr);
		$id = $this -> db -> sql("select id from article where `title` = '".$title."'");
		$tag = explode(',',$_POST['tag']);
		foreach($tag as $k => $v){
			$is_tag = $this ->db-> getRow('tag',array('tagname'=>$v));
			if($is_tag == ''){
				$this -> db -> Insert('tag',array('a_id'=>$id,'tagname'=>$v));
			}else{
				$new_id = $is_tag['id'].",".$id[0]['id'];
				$this -> db -> Up('tag',array("id"=>$is_tag['id']),array("a_id"=>$new_id));
			}
		}
	
		return $re;
		
	}

	function caogao_list(){

		session_start();
		$arr = array(
				'caogao' => '0',
			);
		return $this -> db -> getRows('article',$arr);
		
	}

	function caogao_del(){
	
		$arr = array(
				'id' => $_GET['id'],
			);
		return $this -> db -> del('article',$arr);
		
	}

	function caogao_fabu(){
	
		$arr = array(
				'id' => $_GET['id'],
			);
		return $this -> db -> Up('article',$arr,array('caogao'=>0));
		
	}

	function caogao_all(){
	
		$all =  $this -> db -> sql('select * from article left join article_type on article.t_id=article_type.t_id where article.caogao = 0');
		 return $all;
		
	}

	function article_seach() {

		$re = $this -> db -> sql('select * from article inner join article_type on article.t_id=article_type.t_id where article.t_id = '.$_GET['id']);
		if($re == false){

		}
		 $arr .= "<table width='100%' id='adm_log_list' class='item_list'>";
  		 $arr .= "<thead>";
       $arr .= "<tr>";
         $arr .= "<th width='511' colspan='2'><b>标题</b></th>";
		 $arr .= "<th width='100'><b>作者</b></th>";
         $arr .= "<th width='146'><b>分类</b></th>";
         $arr .= "<th width='130'><b><a href='./admin_log.php?sortDate=DESC'>时间</a></b></th>";
		 $arr .= "<th width='39' class='tdcenter'><b><a href='./admin_log.php?sortComm=ASC'>评论</a></b></th>";
       $arr .= "</tr>";
		 $arr .= "</thead>";
 	 $arr .= "<tbody>";
	    foreach($re as $v){
      $arr .= '<tr><td width="21"><input type="checkbox" name="blog[]" value="1" class="ids" /></td>';
      $arr .= "<td width='490'><a href='write_log.php?action=edit&gid=1'>".$v['title']."</a>";
       $arr .= '<span style="display:none; margin-left:8px;">';
		$arr .= '</span>';
      $arr .= '</td>';
	  	  
	      $arr .= "<td><a href='./admin_log.php?uid=1'>".$v['author']."</a></td>";
      $arr .= "<td><a href='./admin_log.php?sid=-1'>".$v['t_name']."</a></td>";
      $arr .= "<td>".$v['datetime']."</td>";
	  $arr .= '<td class="tdcenter"><a href="?a=article_del&c=article&id={$v.id}">删除</a></td>';
	   }
	  $arr .= "</tbody>";
	  $arr .="</table>";
  
		echo $arr;

	}

	function article_del() {

		$arr = array(
			'id' => $_GET['id'],
			);
		$re = $this -> db -> del('article',$arr);

	}

	function caogao_add() {

		$id = $_POST['id'];
		foreach($id as $k => $v){
			$re = $this -> db -> Up("article",array('id'=>$v),array('caogao'=>'0'));
		}
		return $re;

	}

	function article_sou() {

		$sou = $_POST['keyword'];
		$re = $this -> db ->sql("select * from article left join article_type on article.t_id=article_type.t_id where article.title like '%".$sou."%'");
		return $re;

	}
	function zhiding() {

		$id = $_GET['id'];
		$zhiding = $_GET['zhiding'];
		$set = array();
		if($zhiding == '0'){
			$set = array('top'=>"1",'sortop'=>'1');
		}else if( $zhiding == 'top'){
			$set = array('top'=>"0");
		}else{
			$set = array('sortop'=>"0");
		}
		$id = explode(',',$_GET['id']);
		foreach($id as $k => $v){
			$re = $this -> db -> Up('article',array('id'=>$v),$set);
		}
		
		return $re;

	}

	function move(){

		$id = $_GET['id'];
		$move = $_GET['move'];
		$id = explode(',',$_GET['id']);
		foreach($id as $k => $v){
			$re = $this -> db -> Up('article',array('id'=>$v),array('t_id'=>$_GET['move']));
		}
		
		return $re;

	}

	

	function del_all(){

		$id = $_GET['id'];
		$id = explode(',',$_GET['id']);
		foreach($id as $k => $v){
			$re = $this -> db -> del('article',array('id'=>$v));
		}

		return $re;

	}

	function tag_sel(){

		return $this -> db -> getRows('tag');

	}

	function user_only() {

		return $this -> db ->getRow('user',array('name'=>$_GET['userss']));

	}

	function article_all() {

		return $this -> db -> sql("select * from article inner join article_type on article.t_id = article_type.t_id where article.caogao=1 order by article.`top`,article.`sortop`");

	}

	function author() {

		return $this -> db -> getRows("user");

	}

	function author_seach() {

		$re = $this -> db -> sql("select * from article where author = '".$_GET['id']."' and caogao=1 ");
		if($re == false){

		}
		 $arr .= "<table width='100%' id='adm_log_list' class='item_list'>";
  		 $arr .= "<thead>";
         $arr .= "<tr>";
         $arr .= "<th width='511' colspan='2'><b>标题</b></th>";
		 $arr .= "<th width='100'><b>作者</b></th>";
         $arr .= "<th width='146'><b>分类</b></th>";
         $arr .= "<th width='130'><b><a href='./admin_log.php?sortDate=DESC'>时间</a></b></th>";
		 $arr .= "<th width='39' class='tdcenter'><b><a href='./admin_log.php?sortComm=ASC'>评论</a></b></th>";
         $arr .= "</tr>";
		 $arr .= "</thead>";
 	     $arr .= "<tbody>";
	     foreach($re as $v){
         $arr .= '<tr><td width="21"><input type="checkbox" name="blog[]" value="1" class="ids" /></td>';
         $arr .= "<td width='490'><a href='write_log.php?action=edit&gid=1'>".$v['title']."</a>";
         $arr .= '<span style="display:none; margin-left:8px;">';
		 $arr .= '</span>';
         $arr .= '</td>';
	  	  
	     $arr .= "<td><a href='./admin_log.php?uid=1'>".$v['author']."</a></td>";
         $arr .= "<td><a href='./admin_log.php?sid=-1'>".$v['t_name']."</a></td>";
         $arr .= "<td>".$v['datetime']."</td>";
	     $arr .= '<td class="tdcenter"><a href="?a=article_del&c=article&id={$v.id}">删除</a></td>';
	     }
	     $arr .= "</tbody>";
	     $arr .="</table>";
  
		echo $arr;

	}

	public function article_up() {

		return $re = $this -> db -> getRow('article',array("id"=>$_GET['id']));

	}

	public function up_pro() {

		$id = $_POST['id'];
		$title = $_POST['title'];
		$top = $_POST['post']=='on'?0:1;
		$sortop = $_POST['sortop']=='on'?0:1;
		$is_sel = $_POST['is_sel']=='on'?0:1;
		$arr = array(
				'title' => $title,
				'content' => $_POST['sit_content'],
				'author' => '1111111',
				'u_id' => $_SESSION['id'],
				'datetime' => $_POST['postdate'],
				't_id' => $_POST['sort'],
				'caogao' => $_POST['caogao'],
				'alias' => $_POST['alias'],
				'top' => $top,
				'sortop' => $sortop,
				'is_sel' => $is_sel,
			);
		$re = $this -> db -> Up('article',array("id"=>$_POST['id']),$arr);
		$id = $this -> db -> sql("select id from article where `id` = '".$id."'");
		$tag = explode(',',$_POST['tag']);

		foreach($tag as $k => $v){
			$is_tag = $this ->db-> getRow('tag',array('tagname'=>$v));
			//print_r($is_tag);die;
			if($is_tag == ''){
				$this -> db -> Insert('tag',array('a_id'=>$id['0']['id'],'tagname'=>$v));
			}else{
				$new_id = $is_tag['a_id'].",".$id[0]['id'];
				$this -> db -> Up('tag',array("id"=>$is_tag['id']),array("a_id"=>$new_id));
			}
		}
	
		return $re;

	}

}
	