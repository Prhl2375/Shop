<?php


namespace app\controllers;


class CurrencyController extends AppController
{


    public function changeAction(){
        if(isset($_GET['curr'])) {
            setcookie('currency', $_GET['curr'], 0, '/');
            header('location:' . $_SERVER['HTTP_REFERER']);
        }

    }
}