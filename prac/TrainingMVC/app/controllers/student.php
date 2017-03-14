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
class Student extends BaseController{
    //put your code here
    public function index(){
        
//        $stu = new Student();
//      
//        $this->view('layout/default', ['index' => $stu->view('student/index')]);
        $this->view('layout/default');
        $this->view('student/index');
    }
    
    public function studentAction(){
        $stu = new Student();
        $this->view('layout/default', ['index' => $stu->view('student/studentAction')]);
    }
}
