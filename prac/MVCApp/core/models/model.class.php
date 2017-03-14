<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model
 *
 * @author junaid.tariq
 */
class Model {
    //put your code here
    protected $db;
    
    /**
     * Initializes database object
     */
    function __construct() {
        $this->db = App::$db;
    }

    
}
