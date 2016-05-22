<?php
/**
 * author : shilinpeng
 * time   : 2016/5/20
 */
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
	/**
	 * 首页
	 */
    public function index(){
		
		$position = D('position');
		$experience = D('experience');
		$money = D('money');
		$resume = D('resume');
		$positionall = $position->getposition();
		$experienceall = $experience->getexperience();
		$moneyall = $money->getmoney();
		$resumeoneall = $resume->getresumeone();
		$resumetwoall = $resume->getresumetwo();
		$resumethreeall = $resume->getresumethree();
		//print_r($resumethreeall);die;
		$this->assign('positionall',$positionall);
		$this->assign('experienceall',$experienceall);
		$this->assign('moneyall',$moneyall);
		$this->assign('resumeoneall',$resumeoneall);
		$this->assign('resumetwoall',$resumetwoall);
		$this->assign('resumethreeall',$resumethreeall);
		//echo $_GET['pid'];die;
		if($_GET['sou1'] || $_GET['sou'] || $_GET['pid']){
			if(!empty($_GET['pid'])){
				$positionRows = $resume->positionRows($_GET['pid']);
				$this->assign('positionRows',$positionRows);
			}
			$this->display('search');
		}else{
			$this->display();
		}
		
    }
	/**
	 * 搜索后的页面 或 查看更多页面
	 */
	public function search(){

		$this->display();

	}
}