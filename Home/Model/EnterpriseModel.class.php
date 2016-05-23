<?php
namespace Home\Model;
use Think\Model;
class EnterpriseModel extends Model{
     public function delete($e_id)
     {
     	return $this->where(array('e_id'=>array('in',$e_id)))->delete();
     	
     }
}