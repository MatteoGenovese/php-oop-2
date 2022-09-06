<?php

require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Kart.php';
require_once __DIR__ . '/CreditCard.php';

class User{

    protected $kart;
    protected $creditCard;

    function __construct($_kart, $_creditCard)
    {
        $this->setKart($_kart);
        $this->setCreditCard($_creditCard);
    }

    private function setKart($_kart){
        $this->kart = $_kart;
    }

    private function setCreditCard($_creditCard){
        $this->creditCard = $_creditCard;
    }

    public function getKart(){
        return $this->kart;
    }

    public function getCreditCard(){
        return $this->creditCard;
    }

}

// ordine - utente e carta di credito