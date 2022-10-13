<?php


namespace app\models;


use app\widgets\CurrencyWidget;

class SingleModel extends AppModel
{
    public function getData()
    {
        $this->data['product'] = \R::getAll('SELECT * FROM `product` WHERE name=' . '\'' . $this->query['product'] . '\'' . ' limit 1')[0];
        $this->data['singleProductGallery'] = \R::getAll('SELECT * FROM `single_product_gallery` WHERE product_id=' . $this->data['product']['id']);
        $this->data['adImg'] = \R::getAll('SELECT * FROM `ad_img`');
        if(isset($this->data['currency']['rate'])){
            $this->data['product']['price'] = ceil($this->data['product']['price'] * $this->data['currency']['rate']);
        }
        return $this->data;
    }
}