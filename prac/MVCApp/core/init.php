<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once (ROOT.DS.'app'.DS.'config.php');

/**
 * 
 * @param string $class_name Name of class
 * @throws Exception Class Include Fail
 */
function __autoload($class_name){
    $lib_path = ROOT.DS.'core'.DS.strtolower($class_name).'.class.php';
    $lib_path1 = ROOT.DS.'core'.DS.'controllers'.DS.strtolower($class_name).'.class.php';
    $lib_path2 = ROOT.DS.'core'.DS.'models'.DS.strtolower($class_name).'.class.php';
    $viewManager = ROOT.DS.'core'.DS.'views'.DS.strtolower($class_name).'.class.php';
    $database = ROOT.DS.'core'.DS.'models'.DS.'database'.DS.strtolower($class_name).'.class.php';
    $controller_path = ROOT.DS.'app'.DS.'controllers'.DS.str_replace('controller', '', strtolower($class_name)).'.controller.php';
    $model_path = ROOT.DS.'app'.DS.'models'.DS.strtolower($class_name).'.php';
    $model_path1 = ROOT.DS.'app'.DS.'models'.DS.strtolower($class_name).'.class.php';
    
    if(file_exists($lib_path)) {
        require_once($lib_path);
    }elseif(file_exists($lib_path1)) {
        require_once($lib_path1);
    }elseif(file_exists($lib_path2)) {
        require_once($lib_path2);
    }elseif(file_exists($viewManager)) {
        require_once($viewManager);
    }elseif(file_exists($database)) {
        require_once($database);
    }elseif(file_exists($controller_path)) {
        require_once($controller_path);
    }elseif(file_exists($model_path)) {
        require_once($model_path);
    }elseif(file_exists($model_path1)) {
        require_once($model_path1);
    }else{
        throw new Exception('Failed to include class: '.$class_name);
    }
}