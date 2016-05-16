<?php

/**
 *indexController
 *author : zhangxin 
 *email : 15210539106@163.com
*/

class indexController extends baseController{
	
	   public function Index(){

       $model= new IndexModel();
       $arr3= $model->xian3();
       $arr2= $model->xian2();
       $arr= $model->xian();
       $this->assign("arr2",$arr2);
       $this->assign("arr3",$arr3);
       $this->assign("arr",$arr);
       $this->display('view/index/index.php');

   }

	public function login(){

		$re = $_COOKIE['name'];
		$pwd = $_COOKIE['pwd'];
		$this -> assign('re',$re);
		$this -> assign('pwd',$pwd);
		$this -> display("admin/login.php");

	}

   public function whisper(){

       $model= new IndexModel();
       $arr= $model->xian();
       $arr2= $model->whisper();
       $arr3= $model->xian3();
       $this->assign("arr3",$arr3);
       $this->assign("arr",$arr);
       $this->assign("arr2",$arr2);
       $this->display('index/whisper.php');

   }

   public function ping(){

       $model= new IndexModel();
        $arr3= $model->xian3();
       $arr= $model->xian();
       $arr2= $model->whisper();
       $arr4= $model->ping();
       $arr5= $model->pi();
       $this->assign("arr5",$arr5);
       $this->assign("ping",$arr4);
       $this->assign("arr3",$arr3);
       $this->assign("arr",$arr);
       $this->assign("arr2",$arr2);
       $this->display('index/ping.php');

   }

   public function lun(){

      $model= new IndexModel();
      $arr= $model->lun();
      if(!$arr){
          echo "<script>alert('添加成功');location.href='index.php?c=index&a=index'</script>";
        }else{
          echo "<script>alert('添加失败');location.href='index.php?c=index&a=index'</script>";
        }

    }

	public function twitter() {

		$model = new IndexModel;
		$arr = $model -> twitter();
		$this -> assign("re",$arr);
		$this->display("index/twitter.php");

	}

}
?>