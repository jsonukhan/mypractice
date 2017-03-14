<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Router {

    protected $uri;
    protected $controller;
    protected $action;
    protected $params;
    protected $route;
    protected $method_prefix;

    /**
     * 
     * @param string $uri request URL call
     */
    public function __construct($uri) {

        $this->uri = urldecode(trim($uri, '/'));

        // get defaults

        $routes = Config::get('routes');
        $this->route = Config::get('default_route');
        $this->method_prefix = isset($routes[$this->route]) ? $routes[$this->route] : '';
        $this->controller = Config::get('default_controller');
        $this->action = Config::get('default_action');

        $uri_parts = explode('?', $this->uri);

        $path = $uri_parts[0];

        $path_parts = explode('/', $path);



        array_shift($path_parts);
        array_shift($path_parts);

        if (count($path_parts)) {
            //get route
            if (in_array(strtolower(current($path_parts)), array_keys($routes))) {
                $this->route = strtolower(current($path_parts));
                $this->method_prefix = isset($routes[$this->route]) ? $routes[$this->route] : '';
                array_shift($path_parts);
            }

            // get controller
            if (current($path_parts)) {

                if (file_exists(ROOT . DS . 'app/controllers/' . current($path_parts) . '.controller.php')) {
                    $this->controller = strtolower(current($path_parts));
                }
                array_shift($path_parts);
            }

            //get action
            if (current($path_parts)) {


                $this->action = strtolower(current($path_parts));

                array_shift($path_parts);
            }

            //get params

            $this->params = $path_parts;
        }
    }

    /**
     * 
     * @return string URI
     */
    public function getUri() {
        return $this->uri;
    }

    /**
     * 
     * @return string Controller name
     */
    public function getController() {
        return $this->controller;
    }

    /**
     * 
     * @return string Action name
     */
    public function getAction() {
        return $this->action;
    }

    /**
     * 
     * @return String List of paramaters
     */
    public function getParams() {
        return $this->params;
    }

    /**
     * 
     * @return string Route
     */
    public function getRoute() {
        return $this->route;
    }

    /**
     * 
     * @return string Method's prefix
     */
    public function getMethod_prefix() {
        return $this->method_prefix;
    }

    public static function redirect($location) {
        header("Location: $location");
    }

}
