<?php

/**
 *twitterController
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class TwitterController extends BaseController{

	/*
	 *微语首页
	*/

	public function Index(){

		$model=new TwitterModel();
		$arr=$model->sel();
		$count=$model->count();
		$reply=$model->sel_reply();
		
		$this->assign('reply',$reply);
		$this->assign('count',$count);
		$this->display('twitter/twitter.php');

	}

	/*
	 *微语添加
	*/

	public function add(){
			
    	$model=new TwitterModel();
    	$re=$model->add();
    	if (!$re) {
			echo "<script>alert('微语添加成功');location.href='?c=twitter&a=index'</script>";
		}else{
			echo "<script>alert('微语添加失败');location.href='?c=twitter&a=index'</script>";
		}

	}
	
	/*
	 *微语回复添加
	*/

	public function reply(){

		$id=$_COOKIE['user']['id'];
		$name=$_COOKIE['name'];
		$date=time();
		$row=array(
			'tid'=>$_POST['tid'],
			'date'=>$date,
			'name'=>$name,
			'reply_content'=>$_POST['reply_content'],
		);
		$model=new TwitterModel();
		$re=$model->add_reply($row,$_POST['tid']);
		if (!$re) {
			echo "<script>alert('回复成功');location.href='?c=twitter&a=index'</script>";
		}else{
			echo "<script>alert('回复失败');location.href='?c=twitter&a=index'</script>";
		}

	}

	/*
	 *微语删除
	*/

	public function delete(){
		
		$model=new TwitterModel();
		$re=$model->deletes($id);
		if (!$re) {
			echo "<script>alert('微语删除成功');location.href='?c=twitter&a=index'</script>";
		}else{
			echo "<script>alert('微语删除失败');location.href='?c=twitter&a=index'</script>";
		}

	}

	/*
	 *微语回复删除
	*/

	public function replydelete(){

		$id=$_GET['reply_id'];
		$model=new TwitterModel();
		$re=$model->delete_reply($id);
		if (!$re) {
			echo "<script>alert('微语回复删除成功');location.href='?c=twitter&a=index'</script>";
		}else{
			echo "<script>alert('微语回复删除失败');location.href='?c=twitter&a=index'</script>";
		}

	}

	/*
	 *微语回复隐藏
	*/

	public function replyhide(){

		$id=$_GET['reply_id'];
		$model=new TwitterModel();
		$re=$model->hide_reply($id);
		if (!$re) {
			echo "<script>alert('微语回复隐藏成功');location.href='?c=twitter&a=index'</script>";
		}else{
			echo "<script>alert('微语回复隐藏失败');location.href='?c=twitter&a=index'</script>";
		}

	}
	
}
?>