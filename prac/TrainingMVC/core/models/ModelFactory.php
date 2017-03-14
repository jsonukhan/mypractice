<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelFactory
 *
 * @author junaid.tariq
 */
class ModelFactory {
    //put your code here
    public function constructModel($model) {
        require_once '../app/models/'.$model.'.php';
        if($model == 'Student'){
            return new Student();
        }
    }
}
