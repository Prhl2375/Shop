<?php


namespace app\controllers;


use shop\App;

class CatalogController extends AppController
{
    public function indexAction(){
        $this->setMeta('Shop: Catalog');
    }
}