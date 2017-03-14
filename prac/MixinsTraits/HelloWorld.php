<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HelloWorld
 *
 * @author junaid.tariq
 */
class HelloWorld {
    //put your code here
    public function sayHello(){
        return "Hello World!";
    }
}

trait Big{
    public function from() {
        return "Big City";
    }
    
    public function to() {
        return "Poor World";
    }
}

trait Small{
    public function from() {
        return "Small City";
    }
    public function to() {
        return "Rich World";
    }
}