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
class Student extends Person {

    //put your code here
    private $rollNo;
    private $semester;

    /**
     * 
     * @param string $name Name of Person
     * @param integer $age Age of Person
     * @param string $rollNo RollNo of Student
     * @param integer $semester Semester of Student
     */
    function __construct($name, $age, $rollNo, $semester) {
        parent::__construct($name, $age);
        $this->setRollNo($rollNo);
        $this->setSemester($semester);
    }

    /**
     * 
     * @return string RollNo
     */
    function getRollNo() {
        return $this->rollNo;
    }

    /**
     * 
     * @return integer Semester
     */
    function getSemester() {
        return $this->semester;
    }

    /**
     * 
     * @param string $rollNo RollNo of Student
     */
    function setRollNo($rollNo) {
        $this->rollNo = $rollNo;
    }

    /**
     * 
     * @param integer $semester Semster of Student
     */
    function setSemester($semester) {
        $this->semester = $semester;
    }

    public function intro() {
        return "I am a Student with name: " . parent::getName() . " Age: " 
                . parent::getAge() . " RollNo: " . $this->getRollNo() 
                . " Semester: " . $this->getSemester() . "";
    }

}
