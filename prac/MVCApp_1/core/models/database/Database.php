<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author junaid.tariq
 */
class Database {
    //put your code here
    private $_connection;
    private static $_instance; //The single instance

    /**
     * 
     * @return DB Instance of DB object
     */
    public static function getInstance() {

        if (!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
             
        }
        
        return self::$_instance;
    }

    /**
     *  Constructor
     */
    private function __construct() {
        $this->_connection = new mysqli(Config::get('db.host'), Config::get('db.username'),
                Config::get('db.password'), Config::get('db.db_name'));

        // Error handling
        if (mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(), E_USER_ERROR);
        }
    }

    /**
     * 
     * @param string $sql Query sql
     * @return array $data Result set of query
     * @throws Exception Connection error
     */
    public function query($sql) {
   
        if (!$this->_connection) {
            return false;
        }

        $result = $this->_connection->query($sql);

        if (mysqli_error($this->_connection)) {
            throw new Exception(mysqli_error($this->_connection));
        }
        
        if(is_bool($result)){
            return $result;
        }
        
        $data = array();
        
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
       
        return $data;
 
    }
}
