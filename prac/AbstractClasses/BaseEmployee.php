<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseEmployee
 *
 * @author junaid.tariq
 */
abstract class BaseEmployee {
    //put your code here
    protected $firstname;
    protected $lastname;
    
    
    public abstract function getMonthlySalary();
    /**
     * 
     * @param string  $firstname Firstname of Employee
     * @param string  $lastname Lastname of Employee
     */
    function __construct($firstname, $lastname) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    
    /**
     * 
     * @return string Fullname and Lastname
     */
    public function getFullName(){
        return $this->firstname . " " . $this->lastname; 
    }
    
   

}
