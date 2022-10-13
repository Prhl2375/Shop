<?php

namespace shop;

class App
{
public static $app;

 public function __construct(){
     $query = trim(explode('&', $_SERVER['QUERY_STRING'])[0], '/');
     session_start();
     self::$app=Registry::instance();
     $this->getParams();
     new ErrorHandler();
     new Router();
     Router::dispatch($query);
 }
protected function getParams(){
     $params = require_once CONF . '/params.php';
     if(!empty($params)){
         foreach ($params as $k => $v){
             self::$app->setProperty($k, $v);
         }
     }
}
}