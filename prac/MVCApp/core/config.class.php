<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Config {
    
    protected static $settings = array();
    
    /**
     * 
     * @param string $key Key as index
     * @return string value stored against that key
     */
    public static function get($key){
        return isset(self::$settings[$key]) ? self::$settings[$key]: null;
    }
    
    /**
     * 
     * @param string $key Key
     * @param string $value Value
     */
    public static function set($key, $value){
        self::$settings[$key] = $value;
    }

}