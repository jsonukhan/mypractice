<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseModel
 *
 * @author junaid.tariq
 */
class BaseModel implements ModelInterface {

    protected $db;
    
    /**
     * Contructor
     */
    function __construct() {    
        $this->db = Database::getInstance();
    }

    /**
     * 
     * @param String $table table name
     * @param Array $data Data array
     */
    public function add($table, $data) {
        
    }

    /**
     * 
     * @param String $table table name
     * @param Array $conditions array of required conditions
     */
    public function delete($table, $conditions) {
        
    }

    /**
     * 
     * @param String $table table name
     * @param Array $data Data array
     * @param Array $conditions array of required conditions
     */
    public function edit($table, $data, $conditions) {
        
    }

    /**
     * 
     * @param String $table table name
     * @return Query data
     */
    public function listAll($table) {
        $sql = "select * from {$table}";
        
        return $this->db->query($sql);
    }

}
