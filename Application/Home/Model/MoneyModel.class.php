<?php
/**
 * author : shilinpeng
 * time   : 2016/5/21
 */
namespace Home\Model;
use Think\Model;
class MoneyModel extends Model {
	
	/**
	 * 首页
	 */
    public function getmoney(){
		
		$money = D('money');
		return $money->select();
		

    }
}