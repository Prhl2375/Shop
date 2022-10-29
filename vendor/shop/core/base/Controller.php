<?php


namespace shop\base;

abstract class Controller
{


    public $route;
    public $model;
    public $view;
    public $controller;
    public $prefix;
    public $data = [];
    public $meta = [];
    public $layout;




    public function __construct($route)
    {
        require_once dirname(__DIR__, 4) . '/config/init.php';
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->prefix = $route['prefix'];
        $this->view = $route['action'];
        $this->layout = LAYOUT;
        $model = 'app\models\\' . ucfirst($this->controller) . 'Model';
        if(class_exists($model)){
            $modelObject = new $model(array_merge($_GET, $_POST));
            $this->set($modelObject->getData());
        }
        $this->data['layout'] = true;
    }



    public function getView(){
        $viewObject = new View($this->route, $this->view, $this->layout, $this->meta);
        $viewObject->render($this->data);
    }

    public function set($data){
        $this->data = $data;
    }

    public function setMeta($title = '', $desc = '', $keywords = ''){
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }

}