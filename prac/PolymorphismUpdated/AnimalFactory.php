<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AnimalFactory
 *
 * @author junaid.tariq
 */
class AnimalFactory {
    //put your code here
    function create($type){
           
        if ($type === 'Cat'){
            return new Cat();
        }elseif ($type === 'Dog') {
            return new Dog();
        }else {
            return new Animal();
        }
    
    }
}
