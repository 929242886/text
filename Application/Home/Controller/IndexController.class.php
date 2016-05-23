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
		$money = D('money');
		$resume = D('resume');
		$positionall = $position->getposition();
		$moneyall = $money->getmoney();
		$resumeoneall = $resume->getresumeone();
		$resumetwoall = $resume->getresumetwo();
		$resumethreeall = $resume->getresumethree();
		//print_r($positionall);die;
		$this->assign('positionall',$positionall);
		$this->assign('moneyall',$moneyall);
		$this->assign('resumeoneall',$resumeoneall);
		$this->assign('resumetwoall',$resumetwoall);
		$this->assign('resumethreeall',$resumethreeall);
		//echo $_GET['pid'];die;
		if($_GET['sou'] || $_GET['pid'] || $_GET['zw'] || $_GET['xz']){

			if(!empty($_GET['pid'])){
				$positionRows = $resume->positionRows($_GET['pid']);
				$count = $resume->positioncount($_GET['pid']);
			}else{
				$positionRows = 0;
			}
			if(!empty($_GET['zw'])){
				$zw = $_GET['zw'];
				$where = " qipin_position.p_name = '".$zw."'";
				$this->assign("zw",$zw);
			}else{
				$where = " qipin_position.p_name != ''";
			}
			if(!empty($_GET['xz'])){
				$xz = $_GET['xz'];
				$where1 = " qipin_money.m_money = '".$xz."'";
				$this->assign("xz",$xz);
			}else{
				$where1 = " qipin_money.m_money != '' ";
			}
			if(!empty($_GET['sou'])){
				$where2 = " and r_name like '%".$_GET['sou']."%'";
			}else{
				$where2 = "";
			}
			$results = $resume->searchs($where,$where1,$where2);
			$counts = $resume->searchcount($where,$where1,$where2);
			$this->assign('counts',$counts);
			$this->assign('results',$results);
			$this->assign('positionRows',$positionRows);
			$this->assign('count',$count);
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