<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once (ROOT.DS.'app'.DS.'config.php');

function __autoload($class_name){
    
    $lib_path = ROOT.DS.'core'.DS.$class_name.'.php';
    
    $viewManager = ROOT.DS.'core'.DS.'views'.DS.$class_name.'.php';
    $coreControl = ROOT.DS.'core'.DS.'controllers'.DS.$class_name.'.php';
    $database = ROOT.DS.'core'.DS.'models'.DS.'database'.DS.$class_name.'.php';
    $coreModels = ROOT.DS.'core'.DS.'models'.DS.$class_name.'.php';
    $controller_path = ROOT.DS.'app'.DS.'controllers'.DS.$class_name.'.php';
    $model_path = ROOT.DS.'app'.DS.'models'.DS.$class_name.'.php';
    
    
    if(file_exists($lib_path)) {
       
        require_once($lib_path);
    }elseif(file_exists($viewManager)) {
        require_once($viewManager);
    }elseif(file_exists($coreModels)) {
        require_once($coreModels);
    }elseif(file_exists($coreControl)) {
        require_once($coreControl);
    }elseif(file_exists($database)) {
        require_once($database);
    }elseif(file_exists($controller_path)) {
        require_once($controller_path);
    }elseif(file_exists($model_path)) {
        require_once($model_path);
    }else{
        throw new Exception('Failed to include class: '.$class_name);
    }
}