<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controller
 *
 * @author junaid.tariq
 */
class Controller {
    //put your code here
    protected $data;
    
    protected $model;
    
    protected $params;
    
    /**
     * 
     * @param array $data Data array 
     */
    public function __construct($data = array()) {
        $this->data = $data;
        $this->params = App::getRouter()->getParams();
    }
    
    /**
     * 
     * @return array Returns data
     */
    public function getData() {
        return $this->data;
    }

    /**
     * 
     * @return string Returns model
     */
    public function getModel() {
        return $this->model;
    }

    /**
     * 
     * @return array Array of parameters
     */
    public function getParams() {
        return $this->params;
    }


}
