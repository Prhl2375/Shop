<?php


namespace app\models;


use app\widgets\CurrencyWidget;

class CatalogModel extends AppModel
{
    public function getData(){
        $currencyObject = new CurrencyWidget();
        $this->data['products'] = \R::getAll('SELECT * FROM `product`');
        $this->data['banners'] = \R::getAll('SELECT * FROM `banners`');
        foreach ($this->data['products'] as &$product){
            $product['price'] = ceil($product['price'] * $this->data['currency']['rate']);
        }
        $this->pagination();
        return $this->data;
}
}