<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pages
 *
 * @author junaid.tariq
 */
class PagesController extends Controller {
    //put your code here
    /**
     * return the home index page
     */
    public function index() {
        $this->data['test_content'] = "Here will be pages list";
    }
    
    /**
     * returns the view page here
     */
    public function view() {
        $params = App::getRouter()->getParams();
        
        if(isset($params[0])){
            $alias = strtolower($params[0]);
            $this->data['content'] = "Here will be page with '{$alias}' alias";
        }
    }
}
