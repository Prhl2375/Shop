<?php


namespace app\models;


use app\widgets\CurrencyWidget;

class CatalogModel extends AppModel
{
    public function getData(){
        $currencyObject = new CurrencyWidget();
        $this->data['products'] = \R::getAll('SELECT * FROM `product`');
        $this->data['banners'] = \R::getAll('SELECT * FROM `banners`');
        $this->data['adImg'] = \R::getAll('SELECT * FROM `ad_img`');
        foreach ($this->data['products'] as &$product){
            $product['price'] = ceil($product['price'] * $this->data['currency']['rate']);
        }
        $this->updateProductsForSearch();
        $this->pagination();
        return $this->data;
}
}