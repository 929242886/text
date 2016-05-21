<?php
	namespace Home\Model;
	use Think\Model;
	class LogModel extends Model {
	       //$name=session('name');
           public function add1($data){
                //return 1;
                $arr = $this->data($data)->add();
                return $arr;
            }
     }
?>