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
class Student extends BaseModel{
    //put your code here
    private $name;
    private $age;
    private $rollNo;
    private $semester;
    private $email;
    
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getRollNo() {
        return $this->rollNo;
    }

    public function getSemester() {
        return $this->semester;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }
 
    public function setRollNo($rollNo) {
        $this->rollNo = $rollNo;
    }

    public function setSemester($semester) {
        $this->semester = $semester;
    }

    public function setEmail($email) {
        $this->email = $email;
    }    
    
    public function toString() {
        return $this->getName() . ' ' . $this->getAge()  . ' ' . $this->getRollNo()
                 . ' ' . $this->getSemester()  . ' ' . $this->getEmail();
    }
    
}
