<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Config {
    
    protected static $settings = array();
    
    public static function get($key){
        return isset(self::$settings[$key]) ? self::$settings[$key]: null;
    }
    
    public static function set($key, $value){
        self::$settings[$key] = $value;
    }

}