<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author junaid.tariq
 */
class StudentModel extends BaseModel {
    //put your code here
    public $table = 'Student';
    
    /**
     * Contructor that calls parent constructorS
     */
    function __construct() {
        parent::__construct();
    }

}
