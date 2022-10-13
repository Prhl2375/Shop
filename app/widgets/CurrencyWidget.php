<?php


namespace app\widgets;


class CurrencyWidget{



    public function getCurrency(){
        if(isset($_COOKIE['currency'])){
            return $_COOKIE['currency'];
        }else{
            return false;
        }
    }


    public function getCurrencyRate($currency){
        $url = 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?';
        //  Initiate curl
        $json = json_decode(file_get_contents($url . 'valcode=USD&json'), true);
        if ($json == null) {
            return null;
        }
        $coreRate = $json[0]['rate'];
        if ($currency == 'USD') {
            return 1;
        } elseif ($currency == 'UAH') {
            return $coreRate;
        } else {
            $json = json_decode(file_get_contents($url . 'valcode=' . $currency . '&json'), true)[0];
            return $coreRate / $json['rate'];
        }
}
}