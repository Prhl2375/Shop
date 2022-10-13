<?php


namespace app\models;




class MainModel extends AppModel
{
    public function getData()
    {
        $this->data['products'] = \R::getAll('SELECT * FROM `product` limit 8');
        $this->data['banners'] = \R::getAll('SELECT * FROM `banners`  WHERE display=1');
        foreach ($this->data['products'] as &$product){
            $product['price'] = ceil($product['price'] * $this->data['currency']['rate']);
        }
        return $this->data;
    }
}