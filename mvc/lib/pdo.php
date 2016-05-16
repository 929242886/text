<?php

class pdo
{
  protected static $_instance = null;
  protected $dbName = '';
  protected $dsn;
  protected $dbh;
  /**
   * 构造
   * 
   * @return MyPDO
   */
  private function __construct($dbHost, $dbUser, $dbPasswd, $dbName, $dbCharset)
  {
    try {
      $this->dsn = 'mysql:host='.$dbHost.';dbname='.$dbName;
      $this->dbh = new PDO($this->dsn, $dbUser, $dbPasswd);
      $this->dbh->exec('SET character_set_connection='.$dbCharset.', character_set_results='.$dbCharset.', character_set_client=binary');
    } catch (PDOException $e) {
      $this->outputError($e->getMessage());
    }
  }
  /**
   * 防止克隆
   * 
   */
  private function __clone() {}
  /**
   * Singleton instance
   * 
   * @return Object
   */
  public static function getInstance($dbHost, $dbUser, $dbPasswd, $dbName, $dbCharset)
  {
    if (self::$_instance === null) {
      self::$_instance = new self($dbHost, $dbUser, $dbPasswd, $dbName, $dbCharset);
    }
    return self::$_instance;
  }
  /**
   * Query 查询
   *
   * @param String $strSql SQL语句
   * @param String $queryMode 查询方式(All or Row)
   * @param Boolean $debug
   * @return Array
   */

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
  public function query($strSql, $queryMode = 'All', $debug = false)
  {
	  //echo "asd";
    if ($debug === true) $this->debug($strSql);
    $recordset = $this->dbh->query($strSql);
    $this->getPDOError();
    if ($recordset) {
      $recordset->setFetchMode(PDO::FETCH_ASSOC);
      if ($queryMode == 'All') {
        $result = $recordset->fetchAll();
      } elseif ($queryMode == 'Row') {
        $result = $recordset->fetch();
      }
    } else {
      $result = '11234';
    }
    return $result;
  }
  /**
   * Update 更新
   *
   * @param String $table 表名
   * @param Array $arrayDataValue 字段与值
   * @param String $where 条件
   * @param Boolean $debug
   * @return Int
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
		
       @$strSql = "update " . $table . " set " . $field ." where " . $where;
    $result = $this->dbh->exec($strSql);
    $this->getPDOError();
    return $result;
  }
  /**
   * Insert 插入
   *
   * @param String $table 表名
   * @param Array $arrayDataValue 字段与值
   * @param Boolean $debug
   * @return Int
   */
  public function insert($table, $arrayDataValue)
  {
    $this->checkFields($table, $arrayDataValue);
    $strSql = "INSERT INTO `$table` (`".implode('`,`', array_keys($arrayDataValue))."`) VALUES ('".implode("','", $arrayDataValue)."')";
    $result = $this->dbh->exec($strSql);
    $this->getPDOError();
    return $result;
  }

  /**
   * Delete 删除
   *
   * @param String $table 表名
   * @param String $where 条件
   * @param Boolean $debug
   * @return Int
   */
  public function delete($table, $where = '', $debug = false)
  {
    if ($where == '') {
      $this->outputError("'WHERE' is Null");
    } else {
		$where = $this->where($where);
		
      $strSql = "DELETE FROM `$table` WHERE $where";
      if ($debug === true) $this->debug($strSql);
      $result = $this->dbh->exec($strSql);
      $this->getPDOError();
      return $result;
    }
  }
  /**
   * execSql 执行SQL语句
   *
   * @param String $strSql
   * @param Boolean $debug
   * @return Int
   */
  public function execSql($strSql, $debug = false)
  {
    if ($debug === true) $this->debug($strSql);
    $result = $this->dbh->exec($strSql);
    $this->getPDOError();
    return $result;
  }
  /**
   * 获取字段最大值
   * 
   * @param string $table 表名
   * @param string $field_name 字段名
   * @param string $where 条件
   */
  public function getMaxValue($table, $field_name, $where = '', $debug = false)
  {
    $strSql = "SELECT MAX(".$field_name.") AS MAX_VALUE FROM $table";
    if ($where != '') $strSql .= " WHERE $where";
    if ($debug === true) $this->debug($strSql);
    $arrTemp = $this->query($strSql, 'Row');
    $maxValue = $arrTemp["MAX_VALUE"];
    if ($maxValue == "" || $maxValue == null) {
      $maxValue = 0;
    }
    return $maxValue;
  }
  /**
   * 获取指定列的数量
   * 
   * @param string $table
   * @param string $field_name
   * @param string $where
   * @param bool $debug
   * @return int
   */
  public function getCount($table, $field_name, $where = '', $debug = false)
  {
    $strSql = "SELECT COUNT($field_name) AS NUM FROM $table";
    if ($where != '') $strSql .= " WHERE $where";
    if ($debug === true) $this->debug($strSql);
    $arrTemp = $this->query($strSql, 'Row');
    return $arrTemp['NUM'];
  }
 
  
  /**
   * checkFields 检查指定字段是否在指定数据表中存在
   *
   * @param String $table
   * @param array $arrayField
   */
  private function checkFields($table, $arrayFields)
  {
    $fields = $this->getFields($table);
    foreach ($arrayFields as $key => $value) {
      if (!in_array($key, $fields)) {
        $this->outputError("Unknown column `$key` in field list.");
      }
    }
  }
  /**
   * getFields 获取指定数据表中的全部字段名
   *
   * @param String $table 表名
   * @return array
   */
  private function getFields($table)
  {
    $fields = array();
    $recordset = $this->dbh->query("SHOW COLUMNS FROM $table");
    $this->getPDOError();
    $recordset->setFetchMode(PDO::FETCH_ASSOC);
    $result = $recordset->fetchAll();
    foreach ($result as $rows) {
      $fields[] = $rows['Field'];
    }
    return $fields;
  }
  /**
   * getPDOError 捕获PDO错误信息
   */
  private function getPDOError()
  {
    if ($this->dbh->errorCode() != '00000') {
      $arrayError = $this->dbh->errorInfo();
      $this->outputError($arrayError[2]);
    }
  }
  /**
   * debug
   * 
   * @param mixed $debuginfo
   */
  private function debug($debuginfo)
  {
    var_dump($debuginfo);
    exit();
  }
  /**
   * 输出错误信息
   * 
   * @param String $strErrMsg
   */
  private function outputError($strErrMsg)
  {
    throw new Exception('MySQL Error: '.$strErrMsg);
  }
  /**
   * destruct 关闭数据库连接
   */
  public function destruct()
  {
    $this->dbh = null;
  }
}
?>