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
class Student extends Person{
    //put your code here
    private $semester;
    private $rollNo;
    /**
     * 
     * @param string $name
     * @param integer $age
     * @param integer $semester
     * @param string $rollNo
     */
    function __construct($name, $age, $semester, $rollNo) {
        super($name, $age);
        $this->semester = $semester;
        $this->rollNo = $rollNo;
    }
    
    /**
     * 
     * @return integer Semester of Student
     */
    function getSemester() {
        return $this->semester;
    }

    /**
     * 
     * @return string Roll no of Student
     */
    function getRollNo() {
        return $this->rollNo;
    }

    /**
     * 
     * @param integer $semester Semester of Student
     */
    function setSemester($semester) {
        $this->semester = $semester;
    }

    /**
     * 
     * @param string $rollNo Roll no of Student
     */
    function setRollNo($rollNo) {
        $this->rollNo = $rollNo;
    }

    function intro() {
        echo "I am a Student";
    }

}
