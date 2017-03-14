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
class Student extends BaseController {

    /**
     * 
     * @param Array $data Data array
     * Contructor that calls parent constructor
     */
    function __construct($data = array()) {
        parent::__construct($data);
    }

    /**
     * Index method to call index view of Student
     */
    function index() {
        $mod = 'studentmod';

        //Constructing model
        $this->model = ModelFactory::constructModel($mod);

        //Getting all students from database
        $this->data['students'] = $this->model->listAll($this->model->table);
        
        //$this->renderFlag = false;
    }

}
