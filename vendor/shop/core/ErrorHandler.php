<?php


namespace shop;


class ErrorHandler
{
public function __construct()
{
if (DEBUG){
    error_reporting(-1);
}else{
    error_reporting(0);
}
set_exception_handler([$this, 'exceptionHandler']);
}


public function exceptionHandler($e){
    $this->errorLoger($e->getMessage(), $e->getFile(), $e->getLine());
    $this->displayError($e->getCode());
}

protected function errorLoger($message, $file, $line){
    error_log("[" . date('Y-m-d H:i:s') . "] | Error: " . $message . " | File: " . $file . " | line: " . $line . "\n=========================\n", 3, ROOT . '/tmp/error.log');
}

protected function displayError($res){
    http_response_code($res);
    if(DEBUG){
        require_once WWW . '/error/dev.php';
    }else{
        require_once WWW . '/error/pub.php';
    }
}
}