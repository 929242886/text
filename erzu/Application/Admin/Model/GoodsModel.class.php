<?php
  namespace Admin\Model;
  use Think\Model;
  class GoodsModel extends Model{
     //定义一个生成货号的方法
      public function getCodeName(){
      	 return 'Think'.time();
      }
  }