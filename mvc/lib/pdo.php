<?php

class pdo
{
  protected static $_instance = null;
  protected $dbName = '';
  protected $dsn;
  protected $dbh;
  /**
   * ����
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
   * ��ֹ��¡
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
   * Query ��ѯ
   *
   * @param String $strSql SQL���
   * @param String $queryMode ��ѯ��ʽ(All or Row)
   * @param Boolean $debug
   * @return Array
   */

	/**

		*where ��������
		
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
   * Update ����
   *
   * @param String $table ����
   * @param Array $arrayDataValue �ֶ���ֵ
   * @param String $where ����
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
   * Insert ����
   *
   * @param String $table ����
   * @param Array $arrayDataValue �ֶ���ֵ
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
   * Delete ɾ��
   *
   * @param String $table ����
   * @param String $where ����
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
   * execSql ִ��SQL���
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
   * ��ȡ�ֶ����ֵ
   * 
   * @param string $table ����
   * @param string $field_name �ֶ���
   * @param string $where ����
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
   * ��ȡָ���е�����
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
   * checkFields ���ָ���ֶ��Ƿ���ָ�����ݱ��д���
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
   * getFields ��ȡָ�����ݱ��е�ȫ���ֶ���
   *
   * @param String $table ����
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
   * getPDOError ����PDO������Ϣ
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
   * ���������Ϣ
   * 
   * @param String $strErrMsg
   */
  private function outputError($strErrMsg)
  {
    throw new Exception('MySQL Error: '.$strErrMsg);
  }
  /**
   * destruct �ر����ݿ�����
   */
  public function destruct()
  {
    $this->dbh = null;
  }
}
?>