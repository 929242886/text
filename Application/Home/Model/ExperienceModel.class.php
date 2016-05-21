<?php
/**
 * author : shilinpeng
 * time   : 2016/5/21
 */
namespace Home\Model;
use Think\Model;
class ExperienceModel extends Model {
	
	/**
	 * 首页
	 */
    public function getexperience(){
		
		$experience = D('experience');
		return $experience->select();
		

    }
}