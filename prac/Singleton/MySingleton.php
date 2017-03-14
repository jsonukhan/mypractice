<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySingleton
 *
 * @author junaid.tariq
 */

final class MySingleton {
    //put your code here
    static $singleton = null;
    
    /**
     * Constructor
     */
    private function __construct() {
        
    }

    /**
     * 
     * @return MySingleton object
     */
    static public function getInstance() {
        if(MySingleton::$singleton == null) {
            MySingleton::$singleton = new MySingleton();
        }
        return MySingleton::$singleton;
    }
    
    
}
