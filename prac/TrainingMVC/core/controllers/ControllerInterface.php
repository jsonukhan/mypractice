<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author junaid.tariq
 */
interface ControllerInterface {
    //put your code here
    public function model($model);
    public function view($view, $data);
    
}
