<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author junaid.tariq
 */
class Config {
    //put your code here
   protected static $settings = array();
    
   /**
    * 
    * @param string $key Key to get value
    * @return string Value returned against that key
    */
    public static function get($key){
        return isset(self::$settings[$key]) ? self::$settings[$key]: null;
    }
    
    /**
     * 
     * @param string $key Key 
     * @param string $value Value against that key
     */
    public static function set($key, $value){
        self::$settings[$key] = $value;
    }
}
