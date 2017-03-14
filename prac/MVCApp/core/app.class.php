<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class App {

    protected static $router;
    public static $db;

    /**
     * 
     * @return Router Router Object
     */
    public static function getRouter() {
        return self::$router;
    }

    /**
     * 
     * @param string $uri URL call request
     * @throws Exception Method of class do not exist
     */
    public static function run($uri) {
        self::$router = new Router($uri);

        self::$db = DB::getInstance();
        
        
        $controller_class = ucfirst(self::$router->getController()) . 'Controller';
        $controller_method = strtolower(self::$router->getMethod_prefix()
                . self::$router->getAction());

        $controller_object = new $controller_class();
        
        if (method_exists($controller_object, $controller_method)) {
            
            //Controller's action may reurn a view path
            
            $view_path = $controller_object->$controller_method();
            $view_object = new View($controller_object->getData(), $$view_path);
            $content = $view_object->render();
        } else {
            throw new Exception('Method ' . $controller_method . ' of class '
            . $controller_class . ' do not exist');
        }
        $layout = self::$router->getRoute();
        
        $layout_path = VIEWS_PATH.DS.'generic'.DS.$layout.'.html';
        
        $layout_view_object = new View(compact('content'),$layout_path);
        echo $layout_view_object->render();
    }

}
