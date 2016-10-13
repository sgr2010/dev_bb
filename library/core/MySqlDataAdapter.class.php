<?php
class MySqlDataAdapter
{
    protected $server, $user, $password;
    
    /**
    * Db name
    * 
    * @var mixed
    */
    public $dbName;
    
    /**
    * MySQL connection information
    *
    * @var resource
    */
    public $connection;
    
    /**
    * Result of last query
    *
    * @var resource
    */
    protected $result;
    
    /**
     * Date and time
     *
     */
    const DATETIME = 'Y-m-d H:i:s';
    
    /**
     * Date
     *
     */
    const DATE = 'Y-m-d';
    
    /**
     * Constructor
     *
     * @param string $server MySQL server address
     * @param string $user Database user
     * @param string $password Database password
     * @param string $dbName Database name
     * @param boolean $persistant Is persistant connection
     * @param  boolean $connect_now Connect now
     * @return void
     */              
    public function __construct($server, $user, $password, $dbName, $persistant = false, $connect_now = true){
        $this->server   = $server;         // Host address
        $this->user     = $user;        // User
        $this->password = $password;    // Password
        $this->dbName   = $dbName;        // Database         
       
        if ($connect_now)
            $this->connect($persistant);
    }
   
    /**
     * Destructor
     *
     * @return void
     */
    public function __destruct(){
        $this->close();
    }
    
    /**
     * Connect to the database
     *
     * @param boolean $persist Is persistant connection
     * @return boolean
     */
    public function connect($persist = false){
        # Test for missing mysql.so
        # First try to load it
        if (!@extension_loaded('mysql')) {
            @dl('mysql.so');
        }        
        
        # Fail now
        # Otherwise we get a suppressed fatal error, which is very hard to track down
        if ( !function_exists('mysql_connect') || !function_exists( 'mysql_pconnect') ) {
            throw new Exception("MySQL functions missing, have you compiled PHP with the --with-mysql option?\n" );
        }        
        
        # The kernel's default SYN retransmission period is far too slow for us,
        # so we use a short timeout plus a manual retry. Retrying means that a small
        # but finite rate of SYN packet loss won't cause user-visible errors.
        $this->connection = false;
        if (ini_get('mysql.connect_timeout') <= 3 ){
            $numAttempts = 2;
        }else {
            $numAttempts = 1;
        }
          
        # Start to try to connect to MySql server
        # if the it attemps more than twice, throw error
       for ( $i = 0; $i < $numAttempts && !$this->connection; $i++ ){
            if ( $i > 1 ){
                usleep(1000);
            }
            
            if ($persist)
                $this->connection = mysql_pconnect($this->server, $this->user, $this->password);
            else
                $this->connection = mysql_connect($this->server, $this->user, $this->password);
       }
       
       # if connection is failed, then trigger user error
       if ($this->connection === false)
            trigger_error('Could not connect to the database.', E_USER_ERROR);

       #if connection is establised, then try to select the defined db
       if ($this->connection){
            if (mysql_select_db($this->dbName, $this->connection))
                return true;
       }

       # if none of above processes work, return false
       return false;
    }    
    
    /**
    * Change the selected db
    * 
    * @param mixed $dbName
    */
    public function selectDb($dbName){
        if ($this->connection){
            $this->dbName = $dbName;
            
            if (mysql_select_db($this->dbName, $this->connection))
                return true;
        }
        return false;
    }
    
    /**
     * Query the database
     *
     * @param string $queryStr SQL query string
     * @return resource MySQL result set
     */
    public function query($queryStr, $unbuffered=false){
      if($unbuffered){
        $this->result = mysql_unbuffered_query($queryStr, $this->connection);
      }else{
        $this->result = mysql_query($queryStr, $this->connection);
      }
      
      if ($this->result === false){ // trigger an sql error
         trigger_error($this->lastError(), E_USER_ERROR);
         return $this->lastError();
      }

      return $this->result;
    }         
 
    /**
     * Update the database
     *
     * @param array $values 3D array of fields and values to be updated
     * @param string $table Table to update
     * @param string $where Where condition
     * @param string $limit Limit condition
     * @return boolean Result
     */
    public function update(array $values, $table, $where = false, $limit = false){
        if (count($values) < 0)
            return false;
            
        $fields = array();
        foreach($values as $field => $val)
            $fields[] = "`" . $field . "` = '" . $this->escapeString($val) . "'";

        $where = ($where) ? " WHERE " . $where : '';
        $limit = ($limit) ? " LIMIT " . $limit : '';

        if ($this->query("UPDATE " . $table . " SET " . implode($fields, ", ") . $where . $limit))
            return true;
        else
            return $this->lastError();
    }  
    
    /**
     * Insert one new row
     *
     * @param array $values 3D array of fields and values to be inserted
     * @param string $table Table to insert
     * @return boolean Result
     */
    public function insert(array $values, $table){
        
      //var_dump($values);exit();
               
        if (count($values) < 0)
            return false;
        
        foreach($values as $field => $val)
            $values[$field] = $this->escapeString($val);

        if ($this->query("INSERT INTO " . $table . " (`" . implode(array_keys($values), "`, `") . "`) VALUES ('" . implode($values, "', '") . "')"))
            return true;
        else
            return $this->lastError();
    }   
   
    /**
     * Select
     *
     * @param mixed $fields Array or string of fields to retrieve
     * @param string $table Table to retrieve from
     * @param string $where Where condition
     * @param string $orderby Order by clause
     * @param string $limit Limit condition
     * @return array Array of rows
     */
    public function select($fields, $table, $where = false, $orderby = false, 
    $limit = false, $join = '', $groupby = ''){
        if (is_array($fields))
            $fields = "`" . implode($fields, "`, `") . "`";

        $orderby = ($orderby) ? " ORDER BY " . $orderby : '';
        $where = ($where) ? " WHERE " . $where : '';
        $limit = ($limit) ? " LIMIT " . $limit : '';

        $this->query("SELECT " . $fields . " FROM " . $table . " " .  $join . " " . $where . " " . $groupby . $orderby . $limit);

        if ($this->numRows() > 0)
        {
            $rows = array();

            while ($r = $this->fetchAssoc())
                $rows[] = $r;

            return $rows;
        } else
            return false;
    }
   
    /**
     * Selects one row
     *
     * @param mixed $fields Array or string of fields to retrieve
     * @param string $table Table to retrieve from
     * @param string $where Where condition
     * @param string $orderby Order by clause
     * @return array Row values
     */
    public function selectOne($fields, $table, $where = false, $orderby = false, $join = '', $groupby = ''){
        $result = $this->select($fields, $table, $where, $orderby, '1', $join, $groupby);

        return $result[0];
    }    
   
    /**
     * Selects one value from one row
     *
     * @param mixed $field Name of field to retrieve
     * @param string $table Table to retrieve from
     * @param string $where Where condition
     * @param string $orderby Order by clause
     * @return array Field value
     */
    public function selectOneValue($field, $table, $where = false, $orderby = false, 
    $join = '', $groupby = '', $dbname= false){
        if($dbname)
            mysql_select_db($dbname, $this->connection);
         
        $result = $this->selectOne($field, $table, $where, $orderby, $join, $groupby);

        mysql_select_db($this->dbName, $this->connection);
        
        return $result[$field];
    }
    
    /**
     * Delete rows
     *
     * @param string $table Table to delete from
     * @param string $where Where condition
     * @param string $limit Limit condition
     * @return boolean Result
     */
    public function delete($table, $where = false, $limit = 1){
        $where = ($where) ? "WHERE {$where}" : "";
        $limit = ($limit) ? "LIMIT {$limit}" : "";

        if ($this->query("DELETE FROM `{$table}` {$where} {$limit}"))
            return true;
        else
            return $this->lastError();
    }
    
    /**
     * Fetch results by associative array
     * 
     * Returns an array of strings that corresponds to the fetched row, or FALSE  if there are no more rows. 
     * The type of returned array depends on how result_type  is defined. By using MYSQL_BOTH (default), you'll get an array with both associative and number indices. 
     * Using MYSQL_ASSOC, you only get associative indices (as mysql_fetch_assoc() works), using MYSQL_NUM, you only get number indices (as mysql_fetch_row() works).
     * If two or more columns of the result have the same field names, the last column will take precedence. 
     * To access the other column(s) of the same name, you must use the numeric index of the column or make an alias for the column. 
     * For aliased columns, you cannot access the contents with the original column name. 
     * @param mixed $result Select query or MySQL result
     * @return array 
     * @
     */
    public function fetchArray($result = false){
        $this->resCalc($result);
        return mysql_fetch_array($result);
    }   
    
    /**
     * Fetch results by associative array
     *
     * @param mixed $result Select query or MySQL result
     * @return array Row
     */
    public function fetchAssoc($result = false){
        $this->resCalc($result);
        return mysql_fetch_assoc($result);
    }
   
    /**
     * Fetch results by enumerated array
     *
     * @param mixed $query Select query or MySQL result
     * @return array Row
     */
    public function fetchRow($result = false){
        $this->resCalc($result);
        return mysql_fetch_row($result);
    }    
    
    /**
    * Fetch result as field object
    * 
    * @param mixed $result
    * @return object
    */
    public function fetchField($result = false, $offset = 0){
         $this->resCalc($result);
         return mysql_fetch_field($result, $offset);
     }      
    
    /**
     * Fetch result as object
     * 
     * @param mixed $result Select query or MySQL result  
     * @return object
     */
    public function fetchObject($result = false){
        $this->resCalc($result); 
        return mysql_fetch_object($result);
     }
    
    /**
     * Fetch one row
     *
     * @param mixed $result Select query or MySQL result
     * @return array
     */
    public function fetchOne($result = false){
        $this->resCalc($result);
        list($ret) = $this->fetchRow($result);
        return $ret;
    }
    
    /**
    * Get the flags associated with the specified field in a result
    * 
    * The following flags are reported, if your version of MySQL is current enough to support them: "not_null", "primary_key", "unique_key", "multiple_key", "blob", "unsigned", "zerofill", "binary", "enum", "auto_increment" and "timestamp". 
    * 
    * @param mixed $result  Select query or MySQL result
    * @param mixed $field_offset The numerical field offset. The field_offset  starts at 0. If field_offset  does not exist, an error of level E_WARNING is also issued.
    * @return string Returns a string of flags associated with the result, or FALSE on failure. 
    * 
    */
    public function fieldFlags($result = false, $field_offset = 0){
        $this->resCalc($result); 
        return mysql_field_flags($result, $field_offset); 
    }
    
    /**
    * Returns the length of the specified field
    * 
    * @param mixed $result Select query or MySQL result
    * @param mixed $field_offset The numerical field offset. The field_offset  starts at 0. If field_offset  does not exist, an error of level E_WARNING is also issued.
    * @return int  The length of the specified field index on success, or FALSE on failure. 
    */
    public function fieldLen($result = false, $field_offset = 0){
      $this->resCalc($result);
      return mysql_field_len($result, $field_offset);
    }
    
    /**
     * Fetch a field name in a result
     *
     * @param mixed $query Select query or MySQL result
     * @param int $offset Field offset
     * @return string Field name
     */
    public function fieldName($result = false, $field_offset = 0){
        $this->resCalc($result);
        return mysql_field_name($result, $field_offset);
    }

    /**
     * Fetch all field names in a result
     *
     * @param mixed $result Select query or MySQL result
     * @return array Field names
     */
    public function fieldNameArray($result = false){
        $names = array();

        $field = $this->numFields($result);

        for ( $i = 0; $i < $field; $i++ ){
            $names[] = $this->fieldName($result, $i);
        }

        return $names;
    }
    
    /**
    * Fetch all field names in a result  
    * 
    * @param mixed $table
    * @param mixed $incTableName = false
    * @param mixed $backtick = '``'
    */
    public function fieldNameArrayByTable($table, $incTableName=false, $backtick='`'){
        $names = array();
        $query = "SELECT * FROM `{$table}` LIMIT 1";

        $result = $this->query($query);
        $field = $this->numFields($result);
        
        if($backtick===false){
            $backtick = '';
        }
        
        $table = ($incTableName) ? $backtick.$table.$backtick.'.' : '';
         
        for( $i = 0; $i < $field; $i++ ){
            $names[] = $table.$backtick.$this->fieldName($result, $i).$backtick;
        }
        return $names;
    }
    
    /**
    * Get name of the table the specified field is in
    * 
    * @param mixed $result  Select query or MySQL result
    * @param mixed $offset  The numerical field offset. The field_offset  starts at 0. If field_offset  does not exist, an error of level E_WARNING is also issued.
    * @return string  The name of the table on success. 
    */
    public function fieldTable($result = false, $field_offset = 0){
      $this->resCalc($result);  
      return mysql_field_table($result, $field_offset);
    }
    
    /**
    * Get the type of the specified field in a result
    * 
    * @param mixed $result   Select query or MySQL result
    * @param mixed $field_offset   The numerical field offset. The field_offset  starts at 0. If field_offset  does not exist, an error of level E_WARNING is also issued.
    * @return string  The returned field type will be one of "int", "real", "string", "blob", and others as detailed in the http://dev.mysql.com/doc/
    */
    public function fieldType($result = false, $field_offset = 0){
       $this->resCalc($result);     
       return mysql_field_type($result, $field_offset);  
    }
    
    /**
    * Gets the fields list from selected table and db
    * 
    * @param mixed $tableName The table name
    * @param mixed $dbName The DB name
    * @return resource
    */
    public function fieldsList($tableName, $dbName = false){
        if($dbName == false)
            $dbName = $this->dbName;
            
        return mysql_list_fields($dbName, $tableName, $this->connection);
    }
    
    /**
     * Free result memory
     *
     * @return boolean
     */
    public function freeResult(){
        return mysql_free_result($this->result);
    }
   
    /**
     * Add escape characters for importing data
     *
     * @param string $str String to parse
     * @return string
     */
    public function escapeString($str){
        return mysql_real_escape_string($str, $this->connection);
    }
   
    /**
     * Count number of rows in a result
     *
     * @param mixed $result Select query or MySQL result
     * @return int Number of rows
     */
    public function numRows($result = false){
        $this->resCalc($result);
        return (int) mysql_num_rows($result);
    }
   
    /**
     * Count number of fields in a result
     *
     * @param mixed $result Select query or MySQL result
     * @return int Number of fields
     */
    public function numFields($result = false){
        $this->resCalc($result);
        return (int) mysql_num_fields($result);
    }
    
    /**
     * Get last inserted id of the last query
     *
     * @return int Inserted in
     */
    public function insertId(){
        return (int) mysql_insert_id($this->connection);
    }
    
    /**
     * Get number of affected rows of the last query
     *
     * @return int Affected rows
     */
    public function affectedRows(){
        return (int) mysql_affected_rows($this->connection);
    }
    
    /**
     * Get the error description from the last query
     *
     * @return string
     */
    public function lastError(){
        $error = '';
        
        if ($this->connection){
            $error = mysql_error( $this->connection );
        }
     
     return $error;
    }
    
    /**
     * Get the last error number
     * See mysql_errno()
     */
    function lastErrNo(){
        if ( $this->connection ){
            return mysql_errno( $this->connection );
        } else {
            return mysql_errno();
        }
    }
    
    /**
    * Dump MySQL info to page
    *
    * @return void
    */
    public function dumpInfo(){
        echo mysql_info($this->connection);
    }
   
    /**
    * Gets the mysql client info in period (.) delimited
    * 
    * @return String: Version information from the database 
    */
    public function getClientInfo(){
        return mysql_get_client_info();
    }
    
    /**
    *   Gets the mysql client info in period (.) delimited
    * @return String: Version information from the database
    */
    public function getServerInfo(){
        return mysql_get_server_info($this->connection);
    }
    
    /**
    * Get status information from SHOW STATUS in an associative array
    */
    public function getStatus($which="%"){
        $result = $this->query( "SHOW STATUS LIKE '{$which}'" );
        $status = array();
        while ( $row = $this->fetchObject( $result ) ) 
        {
            $status[$row->Variable_name] = $row->Value;
        }
        return $status;
    }
    
    /**
    * Gets the total rows count of a table
    */
    public function getTableRows($table){
        $result = $this->query("SELECT COUNT(*) FROM {$table}");
        $row = $this->fetchOne($result);
        return $row;
    }    
    
    /**
     * Ping the server and try to reconnect if it there is no connection
     */
    public function ping(){
        if( !function_exists( 'mysql_ping' ) ) {
            throw new Exception( "Tried to call mysql_ping but this is ancient PHP version. Faking it!\n" );
            return true;
        }
        
        $ping = mysql_ping( $this->connection );
        if ( $ping ) 
        {
            return true;
        }

        // Need to reconnect manually in MySQL client 5.0.13+
        if (version_compare( mysql_get_client_info(), '5.0.13', '>=' )){
            mysql_close( $this->connection );
            $this->connection = false;
            $this->connect(true);
            return true;
        }
        return false;
    }        
   
    /**
     * Close the connection
     *
     * @return boolean
     */
    public function close(){
        if(is_resource($this->connection)){
          return mysql_close($this->connection);
        }
        else
          return false;
    }
    
    /**
     * Determine the data type of a query
     *
     * @param mixed $result Query string or MySQL result set
     * @return void
     */
    private function resCalc(&$result){
        if ($result == false)
            $result = $this->result;
        else {
            if (gettype($result) != 'resource')
                $result = $this->query($result);
        }
    }
    
    /**
    * Returns an array containing default values for each field in the table (key => value array).
    * Be aware that some fields (auto_increment, CURRENT_TIMESTAMP) may need to be set on INSERT. 
    * auto_increment fields will be set to 0  
    * CURRENT_TIMESTAMP fields will be set to the PHP current timestamp based on the time the function
    * call was made
    * 
    * 
    * @param mixed $cTable
    * @return string
    */
    function getDefaultValues($table = null){
    // If cTable was not passed in, return empty array:
      if ($table==null ) 
        return array();
      
    // Set up blank array:
      $returnValue = array();
      
    // Get the fields:
      $result = $this->query("DESCRIBE `{$table}`");
      $nbRows = $this->numRows($result);
      if (count($nbRows)==0) 
        return array();

    // Scan through each field and assign defaults:
      for($i=0; $i < $nbRows; $i++) {
        $val = $this->fetchAssoc($result);
        if ($val['Default'] AND $val['Default']=='CURRENT_TIMESTAMP') {
          $returnValue[$val['Field']] = date('Y-m-d H:i:s');      
        }
        if ($val['Extra'] AND $val['Extra']=='auto_increment') {
          $returnValue[$val['Field']] = 0;      
        }
        if ($val['Default'] AND $val['Default']!='CURRENT_TIMESTAMP') {
          $returnValue[$val['Field']] = $val['Default'];
        } else {
          if ($val['Null']=='YES') {
            $returnValue[$val['Field']] = NULL;
          } else {
            $type = $val['Type'];
            if (strpos($type,'(')!==false)
              $type = substr($type,0,strpos($type,'('));
            if (in_array($type,array('varchar','text','char','tinytext','mediumtext','longtext','set',
                                      'binary','varbinary','tinyblob','blob','mediumblob','longblob'))) {
              $returnValue[$val['Field']] = '';
            } elseif ($type=='datetime') {
              $returnValue[$val['Field']] = '0000-00-00 00:00:00';
            } elseif ($type=='date') {
              $returnValue[$val['Field']] = '0000-00-00';
            } elseif ($type=='time') {
              $returnValue[$val['Field']] = '00:00:00';
            } elseif ($type=='year') {
              $returnValue[$val['Field']] = '0000';
            } elseif ($type=='timestamp') {
              $returnValue[$val['Field']] = date('Y-m-d H:i:s');
            } elseif ($type=='enum') {
              $returnValue[$val['Field']] = 1;
            } else {  // Numeric:
              $returnValue[$val['Field']] = 0;
            }
          }  // end NOT NULL
        }  // end default check
      }  // end foreach loop 
      return $returnValue; 
    }
    
    /**
    * Gets the the column/field information from the specified table
    * 
    * @param mixed $table
    * @return array
    */
    function describeTable($table = null){
        $result = $this->query("DESCRIBE {$table}");
        $data = array();
        
        while($row = $this->fetchAssoc($result)){
            $data[$row['Field']] = $row;
        }
            
        return $data;
    }
    
    function getFullColumnsInfo($table){
        $result = $this->query("SHOW FULL COLUMNS FROM `{$table}`");
        $data = array();
        
        while($row = $this->fetchAssoc($result)){
            $data[$row['Field']] = $row;
        }
            
        return $data;        
    }
    
    /**
    * Check if the datatable exists in the specified database
    * 
    * @param mixed $table The table name
    * @param mixed $database (Optional) The database name
    */
    function tableExist($table, $database=false){
        if(empty($database)){
           $result = $this->query("SELECT DATABASE()");
           $row = $this->fetchArray($result);
           $database = $row[0];
        }
        $result = $this->query("SELECT `table_name` FROM `information_schema`.`tables` WHERE `table_schema` = '{$database}' AND `table_name` = '{$table}'");
        $numRows = $this->numRows($result);
        return $numRows > 0;
    }
}