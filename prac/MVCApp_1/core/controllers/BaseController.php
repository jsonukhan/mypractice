<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseController
 *
 * @author junaid.tariq
 */
class BaseController implements ControllerInterface {

    protected $controller = 'home';
    protected $model;
    protected static $action = 'index';
    protected $data;
    protected $params;
    protected $renderFlag = true;
    private static $reqCont;
    private $view;

    /**
     * 
     * @param Array $data Data array
     * Constructor of base class controller
     */
    function __construct($data = array()) {
        $this->data = $data;
        $this->view = new ViewManager();
    }

    /**
     * 
     * @param Array $data Data array
     * Render method to render the views
     */
    public function render($data = []) {
        $this->view->renderPartial();
        $this->view->render($data,self::$reqCont, self::$action );
    }

    /**
     * 
     * @param Request $request Request class object that holds
     * information about controller, method and params
     */
    public function run($request) {
        self::$reqCont = $request->controller;

        //Checking if controller exists
        if (file_exists(ROOT . DS . 'app/controllers/' . ucfirst($request->controller) . '.php')) {
            $this->controller = new $request->controller();
        }
        
        $controller_method = $request->action;

        //Checking if method exists
        if (method_exists($this->controller, $controller_method)) {
            self::$action = $request->action;
        }

        $this->params = $request->params;

        $this->callMethod($this->controller, self::$action);
        
    }

    /**
     * 
     * @param Controller $cont Controller object
     * @param Action $act Action method
     */
    function callMethod($cont, $act) {
        $cont->$act();
        if ($this->controller->renderFlag == true) {
            $this->render($this->controller->data);
        }
    }

}
