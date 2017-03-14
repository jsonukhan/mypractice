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
     * @param string $name Name of Person
     * @param integer $age Age of Person
     */
    function __construct($name, $age) {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * 
     * @return string Name
     */
    function getName() {
        return $this->name;
    }

    /**
     * 
     * @return integer Age
     */
    function getAge() {
        return $this->age;
    }

    /**
     * 
     * @param string $name Name of Person
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

    public function intro() {
        return "I am a Person with name: " . $this->getName() . " Age: " 
                .  $this->getAge() . "";
    }

}
