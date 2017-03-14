<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of session
 *
 * @author junaid.tariq
 */
class Session {
    //put your code here
    protected static $flash_message;
    
    /**
     * 
     * @param string $message Sets a flash message
     */
    public static function setFlash($message){
        self::$flash_message = $message;
    }
    
    /**
     * 
     * @return string Returns flash message if not null
     */
    public static function hasFlash(){
        return !is_null(self::$flash_message);
    }
    
    /**
     * Displays flash message
     */
    public static function flash(){
        echo self::$flash_message;
        $this->setFlash(null);
    }
}
