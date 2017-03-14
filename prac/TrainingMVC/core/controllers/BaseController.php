<?php

class BaseController implements ControllerInterface {

    function __construct() {
        
    }

    public function model($model) {
        $modFac = new ModelFactory();
        //require_once '../app/models/'.$model.'.php';
        return $modFac->constructModel($model);
    }

    public function view($view, $data = []) {
        require_once '../app/views/'. $view . '.php';
    }

}