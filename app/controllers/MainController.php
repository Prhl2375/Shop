<?php


namespace app\controllers;


use shop\App;

class MainController extends AppController
{
    public function indexAction(){
        $this->setMeta('Store: Home');
    }
}