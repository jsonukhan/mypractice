<?php


class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    
    function __construct() {
        $url = $this->parseURL();
        
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            
            $this->controller = $url[0];
            unset($url[0]);
            
        }
        
        require_once '../app/controllers/' . $this->controller . '.php';
        
        $conFactory = new ControllerFactory();
        $this->controller = $conFactory->constructController($this->controller);
        
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                
                $this->method = $url[1];
                unset($url[1]);
                
            }
        }
        //echo $this->controller .' '. $this->method;
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
        
    }

    public function parseURL(){
        if(isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}