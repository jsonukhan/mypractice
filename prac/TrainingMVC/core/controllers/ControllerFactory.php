<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerFactory
 *
 * @author junaid.tariq
 */
class ControllerFactory {
    //put your code here
    public function constructController($cont) {
        if($cont == 'home'){
            return new Home();
        }
        if($cont == 'student'){
            return new Student();
        }
    }
}
