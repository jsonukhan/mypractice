<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author junaid.tariq
 */

  
class Database {
	private $_connection;
	private static $_instance; //The single instance
	private $_host = "localhost";
	private $_username = "root";
	private $_password = "123";
	private $_database = "db_mvc";
	/*
	Get an instance of the Database
	@return Instance
	*/
	public static function getInstance() {
           
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	// Constructor
	private function __construct() {
		$this->_connection = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
	
		// Error handling
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
	}
	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }
	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}
        
        public function getRows($table,$conditions = array()){
              
		$sql = 'SELECT ';
		$sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
		$sql .= ' FROM '.$table;
		if(array_key_exists("where",$conditions)){
			$sql .= ' WHERE ';
			$i = 0;
			foreach($conditions['where'] as $key => $value){
				$pre = ($i > 0)?' AND ':'';
				$sql .= $pre.$key." = '".$value."'";
				$i++;
			}
		}
		
		if(array_key_exists("order_by",$conditions)){
			$sql .= ' ORDER BY '.$conditions['order_by']; 
		}
		
		if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
			$sql .= ' LIMIT '.$conditions['start'].','.$conditions['limit']; 
		}elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
			$sql .= ' LIMIT '.$conditions['limit']; 
		}
		
		$result = mysqli_query($this->getConnection(),$sql);
		
		if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
			switch($conditions['return_type']){
				case 'count':
					$data = $result->num_rows;
					break;
				case 'single':
					$data = $result->fetch_assoc();
					break;
				default:
					$data = '';
			}
		}else{
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$data[] = $row;
				}
			}
		}
               
		return !empty($data)?$data:false;
	}
	
	/*
	 * Insert data into the database
	 * @param string name of the table
	 * @param array the data for inserting into the table
	 */
	public function insert($table,$data){
            
		if(!empty($data) && is_array($data)){
			$columns = '';
			$values  = '';
			$i = 0;
			if(!array_key_exists('created',$data)){
				$data['created'] = date("Y-m-d H:i:s");
			}
			if(!array_key_exists('modified',$data)){
				$data['modified'] = date("Y-m-d H:i:s");
			}
			foreach($data as $key=>$val){
				$pre = ($i > 0)?', ':'';
				$columns .= $pre.$key;
				$values  .= $pre."'".$val."'";
				$i++;
			}
			$query = "INSERT INTO ".$table." (".$columns.") VALUES (".$values.")";
                       
			$insert = mysqli_query($this->getConnection(),$query);
			//return $insert?mysqli_insert_id($this->getConnection()):false;
                        return true;
		}else{
			return false;
		}
	}
	
	/*
	 * Update data into the database
	 * @param string name of the table
	 * @param array the data for updating into the table
	 * @param array where condition on updating data
	 */
	public function update($table,$data,$conditions){
		if(!empty($data) && is_array($data)){
			$colvalSet = '';
			$whereSql = '';
			$i = 0;
			if(!array_key_exists('modified',$data)){
				$data['modified'] = date("Y-m-d H:i:s");
			}
			foreach($data as $key=>$val){
				$pre = ($i > 0)?', ':'';
				$colvalSet .= $pre.$key."='".$val."'";
				$i++;
			}
			if(!empty($conditions)&& is_array($conditions)){
				$whereSql .= ' WHERE ';
				$i = 0;
				foreach($conditions as $key => $value){
					$pre = ($i > 0)?' AND ':'';
					$whereSql .= $pre.$key." = '".$value."'";
					$i++;
				}
			}
			$query = "UPDATE ".$table." SET ".$colvalSet.$whereSql;
			$update = $this->db->query($query);
			return $update?$this->db->affected_rows:false;
		}else{
			return false;
		}
	}
	
	/*
	 * Delete data from the database
	 * @param string name of the table
	 * @param array where condition on deleting data
	 */
	public function delete($table,$conditions){
		$whereSql = '';
		if(!empty($conditions)&& is_array($conditions)){
			$whereSql .= ' WHERE ';
			$i = 0;
			foreach($conditions as $key => $value){
				$pre = ($i > 0)?' AND ':'';
				$whereSql .= $pre.$key." = '".$value."'";
				$i++;
			}
		}
		$query = "DELETE FROM ".$table.$whereSql;
		$delete = mysqli_query($this->getConnection(),$query);
		return $delete?true:false;
	}
}