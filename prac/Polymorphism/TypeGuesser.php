<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TypeGuesser
 *
 * @author junaid.tariq
 */
class TypeGuesser {
    //put your code here
    
    public function doStuff(Animal $animal){
        echo $animal->intro() . "<br>";
    }


    public function guess(Animal $type) {
        if($type instanceof Dog){
            echo "Dog <br>";
            $this->doStuff($type);
        }elseif ($type instanceof Cat) {
            echo "Cat <br>";
            $this->doStuff($type);
        }elseif($type instanceof Animal){
            echo "Animal <br>";
            $this->doStuff($type);
        }
    }
}
