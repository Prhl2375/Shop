<?php


namespace shop\base;


use shop\App;

class View
{
    public $route;
    public $model;
    public $view;
    public $controller;
    public $prefix;
    public $data = [];
    public $meta = [];
    public $layout;


    public function __construct($route, $view, $layout, $meta)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->prefix = $route['prefix'];
        $this->view = $route['action'];
        $this->view = $view;
        $this->layout = $layout;
        $this->meta = $meta;
    }

    public function render($data){
        if(isset($this->meta['title'])){
            $meta = '<title>' . $this->meta['title'] . '</title>';
        }
        ob_start();
        require_once dirname(__DIR__, 4) . '/app/views/' . $this->prefix . ucfirst($this->controller) . '/' . $this->view . '.php';
        $content = ob_get_clean();
        require_once dirname(__DIR__, 4) . '/app/views/layouts/' . $this->layout . '.php';
        $url = 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?valcode=EUR&json';
        debug($_GET);
        debug(PATH);
    }
}