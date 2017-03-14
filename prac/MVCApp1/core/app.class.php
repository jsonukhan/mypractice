<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class App {

    protected static $router;

    public static function getRouter() {
        return self::$router;
    }

    public static function run($uri) {
        self::$router = new Router($uri);

        $controller_class = ucfirst(self::$router->getController()) . 'Controller';
        $controller_method = strtolower(self::$router->getMethod_prefix()
                . self::$router->getAction());

        $controller_object = new $controller_class();
        if (method_exists($controller_object, $controller_method)) {
            $result = $controller_object->$controller_method();
        } else {
            print_r('Method ' . $controller_method . ' of class '
            . $controller_class . ' do not exist');
        }
    }

}
