<?php

/**
 *单类 mysql
*/
class mysql{

	    private $host    ='localhost'; //数据库主机

	    private $user     = 'root'; //数据库用户名

	    private $pwd     = 'root'; //数据库用户名密码

	    private $database = 'boke'; //数据库名

	    private $charset = 'UTF8'; //数据库编码，GBK,UTF8,gb2312

	    private $link;             //数据库连接标识;

	    private $rows;             //查询获取的多行数组

	    static $_instance; //存储对象

	    /**
	     * 构造函数
	     * 私有
    */

	    private function __construct($pconnect = false) {

	        if (!$pconnect) {
				//echo "123";
	            $this->link = @ mysql_connect($this->host, $this->user, $this->pwd) or $this->err('');

	        } else {

	            $this->link = @ mysql_pconnect($this->host, $this->user, $this->pwd) or $this->err();

	        }

	        mysql_select_db($this->database) or $this->err();

	        $this->query("SET NAMES utf8", $this->link);

	        return $this->link;

	    }

	    /**
	     * 防止被克隆
	     *
	     */

	    private function __clone(){}

	    public static function getInstance($pconnect = false){

	        if(FALSE == (self::$_instance instanceof self)){

	            self::$_instance = new self($pconnect);

	        }
	        return self::$_instance;

	    }

		/**
		*where 条件处理
		*/
		public static function where($arr=array()){
			$where = '';
			if(!empty($arr)){
				foreach($arr as $k=>$v){
					$where .= "`$k` ".'='." '{$v}' ".' and ';
				}
			}
			//echo $where;
			$where .= '1 = 1';
        return $where;
		}

	    /**
	     * 查询
	     */

	    public function query($sql, $link = '') {

	        $this->result = mysql_query($sql, $this->link) or $this->err($sql);

	        return $this->result;

	    }
	   

    /**
	  * 单行记录
	 */

	    public function getRow($table,$arr=array(), $type = MYSQL_ASSOC) {
			
			$where = $this->where($arr);
			//echo "select * from ".$table." where ".$where;
	        $result = $this->query("select * from ".$table." where ".$where);
			
	        return @ mysql_fetch_array($result, $type);

	    }

	    /**
	     * 多行记录
	     */

	    public function getRows($table,$arr=array()) {
			$where = $this->where($arr);
			
	        $result = $this->query("select * from ".$table." where ".$where . "");
			//echo "select * from ".$table." where ".$where . $order . $limit."";
	        while ($row = @ mysql_fetch_array($result, MYSQL_ASSOC)) {

	            $this->rows[] = $row;

	        }
	        return $this->rows;

	    }

		 /**
	     * 添加信息
	     */

		public function Insert($table,$arr=array()) {
			
		
		//echo "INSERT into ".$table."(`".implode("`,`",array_keys($arr))."`)
		//value('".implode("','",array_values($arr))."');";
		$result = $this->query("INSERT into ".$table."(`".implode("`,`",array_keys($arr))."`)
		value('".implode("','",array_values($arr))."');");

		
	        return @ mysql_insert_id($result);

	    }
		/**
	     * 修改信息
	     */
		public function Up($table,$arr=array(),$fields=array()){
       $where = $this->where($arr);
        $field = '';
        if(!empty($fields)){
            foreach($fields as $k=>$v){
                $field .= "`$k` ".'='." '{$v}'".',';
            }
        }
		
        $field = substr($field,0,-1);
		//echo "update " . $table . " set " . $field ." where " . $where;die;
       $result = $this->query( "update " . $table . " set " . $field ." where " . $where);
        return @ mysql_fetch_array($result);
    }
		

		/**
	     * 删除信息
	     */

		public function del($table,$arr=array()) {
		
		$where = $this->where($arr);
		//echo "delete from ".$table." where ".$where;die;
		$result = $this->query("delete from ".$table." where ".$where);
			
	        return @ mysql_fetch_array($result);

	    }

		
	    /**
	     * 错误信息输出
	     */

	    protected function err($sql = null) {

	        //这里输出错误信息
      echo 'error';

	        exit();

	    }

	     /**
	     * 总条数
	     */
	    public function getNum($dbname, $type="assoc"){
			//求出总条数
			$size_sql="select count(*) as num from $dbname";
			$size_res=$this->query($size_sql);
			if(!in_array($type,array("assoc","array","row"))){
				die("mysql_query error");
			}
			$funcame = "mysql_fetch_".$type;
			return $funcame($size_res);
		}

		/**
	      * 分页
	     */

		public function page($dbname,$size,$where=array()){
			//设置页码
			@$page=$_GET['page']?$_GET['page']:1;
			//接受总条数
			$arr = $this->getNum($dbname);
			$count = $arr['num'];
			//求出总页数(为尾页功能向上取整)
			$num = ceil($count/$size);
			//设置偏移量
			$limit = ($page-1)*$size;
			//准备sql语句
			$where = $this->where($where);
			//echo "select * from $dbname where $where limit $limit,$size";die;
			$sql="select * from $dbname where $where limit $limit,$size";
			//执行sql语句
			$res['data']=$this->sql($sql);
			if($page<=1){
				$min = '1';
			}else{
				$min = $page-1;
			}
			if($page>=$num){
				$max = $num;
			}else{
				$max = $page+1;
			}

			$res['links'] = "<a href='?page=1'>首页</a>&nbsp;&nbsp;<a href='?page=".$min."'>上一页</a>&nbsp;&nbsp;<a href='?page=".$max."'>下一页</a>&nbsp;&nbsp;<a href='?page=".$num."'>尾页</a>";
			return $res;
		}

		 /**
	    *万能sql
	    */
	    public function sql($sql) {
	    	//echo $sql;die;
	    	//echo $sql;
	        $this->result = mysql_query($sql) or $this->err($sql);
    		$data = array();
	          while ($row = @ mysql_fetch_assoc($this->result)) {

	            $data[] = $row;

	        }
	        // print_r($data);die;
	        $this->rows=$data;
	        return $this->rows;


	    }

	}


	
	?>