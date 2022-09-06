<?php

require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Kart.php';
require_once __DIR__ . '/CreditCard.php';

class User{

    protected $id;
    protected $name;
    protected $creditCard;


    function __construct($_id, $_name, $_creditCard)
    {
        $this->setId($_id);
        $this->setName($_name);
        $this->setCreditCard($_creditCard);
    }


    private function setId($_id){
        $this->id = $_id;
    }

    private function setName($_name){
        $this->name = $_name;
    }

    private function setCreditCard($_creditCard){
        $this->creditCard = $_creditCard;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getCreditCard(){
        return $this->creditCard;
    }

}

// ordine - utente e carta di credito