<?php


namespace shop\base;


use app\widgets\CurrencyWidget;
use shop\App;

abstract class Model
{
    public $data;
    public $query;
    public $currencyObject;
    public function __construct($query)
    {
        $this->currencyObject = new CurrencyWidget();
        $this->query = $query;
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup( 'mysql:host=127.0.0.1;dbname=Shop', 'root', 'root' );
        \R::freeze(true);
        $this->currencyRefresh();
        $coockieCurrency = $this->currencyObject->getCurrency();
        $this->data['currencies'] = \R::getAll('SELECT * FROM `currency`');
        if($coockieCurrency == true){
            $this->data['currency'] = \R::getAll('SELECT * FROM `currency` WHERE name=' . '\'' . $coockieCurrency . '\'' . ' limit 1')[0];
        }else{
            $this->data['currency'] = \R::getAll('SELECT * FROM `currency` WHERE main=1 limit 1')[0];
        }
    }


    public function currencyRefresh(){
        $currencies = \R::findAll('currency');
        foreach ($currencies as &$c){
            if(time() - $c->refreshDate >= 24*60*60){
                $cr = $this->currencyObject->getCurrencyRate($c->name);
                if (isset($cr)){
                    $c->refreshDate = time();
                    $c->rate = $cr;
                }
            }
        }
        \R::storeAll($currencies);
    }

    public function pagination(){
        $this->data['totalPages'] = ceil(count($this->data['products']) / App::$app::getProperty('pagination'));
        if(!isset($this->query['page'])){
            $this->query['page'] = 1;
        }
        $page = $this->query['page'];
        $paginNum = App::$app->getProperty('pagination');
        $this->data['products'] = array_slice($this->data['products'], ($page-1)*$paginNum, $paginNum);
        $this->data['page'] = $page;
    }
}