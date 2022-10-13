<?php


namespace app\controllers;


class SingleController extends AppController
{
    public function indexAction(){
        $this->setMeta($this->data['product']['name']);
    }
}