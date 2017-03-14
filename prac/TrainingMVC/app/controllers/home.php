<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author junaid.tariq
 */
class Home extends BaseController{
    //put your code here
    public function index() {  
        
//        $home = new Home();
//        $this->view('layout/default', ['index' => $home->view('home/index')]);
        $this->view('layout/default');
        $this->view('home/index');
    }

}
