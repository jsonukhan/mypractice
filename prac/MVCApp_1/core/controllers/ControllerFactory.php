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

    /**
     * 
     * @param String $name key to get value and return by making 
     * object of that controller
     * @return \obj
     */
    public static function constructController($name){
        if(Config::get($name)){
            $obj =  Config::get($name);            
            return new $obj();
        }
        return null;
    }
    
}
