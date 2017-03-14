<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of students
 *
 * @author junaid.tariq
 */
class StudentsController extends Controller {

    //put your code here
    /**
     * 
     * @param array $data Data array
     */
    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new Student();
    }

    /**
     * Calls index view
     */
    public function index() {
        $this->data['students'] = $this->model->getStudents();
    }

    /**
     * Calls index view and edits the Student information and redirects back 
     * to Students index
     */
    public function edit() {
        if ($_POST) {

            $student = new StudentBO();

            $student->id = isset($_POST['id']) ? $_POST['id'] : null;
            $student->name = $_POST['name'];
            $student->age = $_POST['age'];
            $student->rollno = $_POST['rollno'];
            $student->semester = $_POST['semester'];
            $student->email = $_POST['email'];

            //$id = isset($_POST['id']) ? $_POST['id'] : null;
            $result = $this->model->save($student, $student->id);
            

            if ($result) {
                Session::setFlash("Student was saved");
            } else {
                Session::setFlash("Error");
            }
            Router::redirect(Config::get('baseURL') . DS . 'students');
        }
        if (isset($this->params[0])) {
            $this->data['student'] = $this->model->getById($this->params[0]);
        } else {
            Session::setFlash("Wrong page id");
            Router::redirect(Config::get('baseURL') . DS . 'students');
        }
    }

    /**
     * Calls add view and Adds a Student and redirects back to Students index
     */
    public function add() {
        if ($_POST) {

            $result = $this->model->save($_POST);

            if ($result) {
                Session::setFlash("Student was saved");
            } else {
                Session::setFlash("Error");
            }
            Router::redirect(Config::get('baseURL') . DS . 'students');
        }
    }

    /**
     * Deletes a specific Student and redirects back to Students index
     */
    public function delete() {
        if (isset($this->params[0])) {
            $result = $this->model->delete($this->params[0]);
            if ($result) {
                Session::setFlash("Page was deleted");
            } else {
                Session::setFlash("Error");
            }
        }
        Router::redirect(Config::get('baseURL') . DS . 'students');
    }

}
