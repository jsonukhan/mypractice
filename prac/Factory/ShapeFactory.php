<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShapeFactory
 *
 * @author junaid.tariq
 */
class ShapeFactory {

    //put your code here
    public function create($type) {
        if($type === "Circle") {
            return new Circle();
        }elseif ($type === "Triangle") {
            return new Triangle();
        }
    }

    
}
