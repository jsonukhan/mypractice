<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT.DS.'app'.DS.'views');

require_once (ROOT.DS.'core'.DS.'init.php');

//$router = new Router($_SERVER['REQUEST_URI']);
//echo "<pre>";
//print_r("Route: ". $router->getRoute().PHP_EOL);
//print_r("Controller: ". $router->getController().PHP_EOL);
//print_r("Action: ". $router->getMethod_prefix.$router->getAction().PHP_EOL);
//echo "Param:";
//print_r($router->getParams());

App::run($_SERVER['REQUEST_URI']);

