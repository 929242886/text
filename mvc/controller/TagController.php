<?php

/**
 *tagController
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class TagController extends BaseController{

	/*
	*查询所有标签
	*/

	public function index(){

		$model=new TagModel();
		$arr=$model->sel();
		$this->assign('arr',$arr);

		$this->display('tag/tag.php');

	}

	/*
	*标签删除
	*/
	
	public function del(){

		$id=$_POST['tag'];
		$model=new TagModel();
		$re=$model->del($id);
		if ($re) {
			echo "<script>alert('标签删除成功');location.href='?c=tag&a=index'</script>";
		}else{
			echo "<script>alert('标签删除失败');location.href='?c=tag&a=index'</script>";
		}

	}

	public function tag_up() {

		$model = new TagModel;
		$re = $model ->tag_up();
		$this -> assign("re",$re);
		$this -> display("tag/tag_up.php");

	}

	public function up_pro() {

		$model = new TagModel;
		$re = $model -> up_pro();
		if(!$re){
			header("location:admin.php?a=index&c=tag");
		}else{
			echo "123";
		}

	}

}
?>