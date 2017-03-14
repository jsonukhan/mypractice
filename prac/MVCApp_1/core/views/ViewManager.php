<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ViewManager
 *
 * @author junaid.tariq
 */
class ViewManager {
    //put your code here
    function render($data = [], $reqCont, $action){
        include ROOT . DS . 'app/views/' . lcfirst($reqCont) . DS . $action . '.php';
    }
    
    function renderPartial(){
        include ROOT . DS . 'app/views/generic/default.php';
    }
}
