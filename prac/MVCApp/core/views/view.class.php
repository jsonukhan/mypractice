<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class View {
    
    protected $data;
    protected $path;
    
    /**
     * 
     * @return string Default value path
     */
    public static function getDefaultValuePath() {
        $router = App::getRouter();
        
        if(!$router){
            return false;
        }
        $controller_dir = $router->getController();
        $template_name = $router->getMethod_prefix().$router->getAction().'.html';
        return VIEWS_PATH.DS.$controller_dir.DS.$template_name;
    }
    
    /**
     * 
     * @param array $data
     * @param string $path
     * @throws Exception Template not found
     */
    function __construct($data = array(), $path = null) {
        if(! $path){
            $path = self::getDefaultValuePath();
        }
        if(!file_exists($path)){
            throw new Exception('Template is not found in path: ' . $path);
        }
        $this->path = $path;
        $this->data = $data;
    }
    
    /**
     * 
     * @return View
     */
    public function render() {
        $data = $this->data;
        
        ob_start();
        include ($this->path);
        $content = ob_get_clean();
        return $content;
    }

}