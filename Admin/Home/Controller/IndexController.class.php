<?php
  namespace Home\Controller;
  use Think\Controller;
  class IndexController extends Controller{
		 public function index()
		{

			//echo __CONTROLLER__;exit;
			$this->display('index');

		}
		public function left()
		{

			$user=D('User');
			$this->data=$user->getQx();
			//var_dump($data);exit;
			$this->display('left');

		}
		public function right()
		{

			$this->display('right');

		}
		public function top()
		{

			$this->display('top');
			
		}
}
?>