<?php


namespace shop\base;


abstract class Model
{
    public function __construct()
    {
        R::setup( 'mysql:host=127.0.0.1;dbname=Shop', 'root', 'root' );
    }
}