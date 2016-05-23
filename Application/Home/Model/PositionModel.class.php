<?php
/**
 * author : shilinpeng
 * time   : 2016/5/20
 */
namespace Home\Model;
use Think\Model;
class PositionModel extends Model {
	
	/**
	 * 首页
	 */
    public function getposition(){
		
		$position = D('position');
		return $position->select();
		

    }
}