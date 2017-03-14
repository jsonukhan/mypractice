<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of student
 *
 * @author junaid.tariq
 */
class StudentBO {

    //put your code here
//    private $id;
//    private $name;
//    private $age;
//    private $rollno;
//    private $semester;
//    private $email;
    function __construct() {
        
    }

    private $array = ['id' => '', 'name' => '', 'age' => '',
        'rollno' => '', 'semester' => '', 'email' => ''];

    public function __get($name) {
        if (array_key_exists($name, $this->array)) {
            return $this->array[$name];
        }
    }

    public function __set($name, $value) {
        if (array_key_exists($name, $this->array)) {
            $this->array[$name] = $value;
        }
    }

}
