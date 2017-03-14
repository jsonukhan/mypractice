<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Extender
 *
 * @author junaid.tariq
 */
class Extender extends HelloWorld {
    //put your code here
     use Big, Small{
            Big::to insteadof Small;
            Small::from insteadof Big;
     }
    function checkOne(){
        $ext = new Extender();
       return parent::sayHello() . " from " .  $ext->from() . " to " . $ext->to();
    }
    
}
