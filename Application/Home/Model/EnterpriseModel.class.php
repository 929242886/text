<?php
	namespace Home\Model;
	use Think\Model;
	class EnterpriseModel extends Model {
	       //$name=session('name');
           public function enterprise($e_id){
                //return 1;
                $arr = $this->where("e_id=$e_id")->select();
                return $arr;
            }
     }
?>