<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Person
 *
 * @author junaid.tariq
 */


class Person {
    //put your code here
    private $name;
    private $age;
    
    /**
     * 
     * @param string $name
     * @param integer $age
     */
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * 
     * @return string Name of person
     */
    function getName() {
        return $this->name;
    }

    /**
     * 
     * @return integer Age of person
     */
    function getAge() {
        return $this->age;
    }

    /**
     * 
     * @param string $name Name of person
     */
    function setName($name) {
        $this->name = $name;
    }

    /**
     * 
     * @param integer $age Age of Person
     */
    function setAge($age) {
        $this->age = $age;
    }
    
    /**
     * Intro of Person
     */
    function intro() {
        echo "I am a Person";
    }
    
    

    
}
