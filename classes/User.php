<?php

require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Cart.php';
require_once __DIR__ . '/CreditCard.php';

class User{

    protected $cart = [];
    protected $creditCard;

    function __construct($_cart, $_creditCard)
    {
        $this->setCart($_cart);
        $this->setCreditCard($_creditCard);
    }

    private function setCart($_cart){
        $this->cart = $_cart;
    }

    private function setCreditCard($_creditCard){
        $this->creditCard = $_creditCard;
    }

    public function getCart(){
        return $this->cart;
    }

    public function getCreditCard(){
        return $this->creditCard;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
}

// ordine - utente e carta di credito