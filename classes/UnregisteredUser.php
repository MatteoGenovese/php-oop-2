<?php

require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Kart.php';
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/User.php';

class UnregisteredUser extends User{

    protected $id;
    protected $username;

    function __construct($_kart, $_creditCard, $_id, $_username)
    {
        parent::__construct($_kart, $_creditCard);
        $this->setId($_id);
        $this->setUsername($_username);
    }

    private function setId($_id){
        $this->id = $_id;
    }

    private function setUsername($_username){
        $this->username = $_username;
    }

    public function getId(){
        return $this->id;
    }

    public function getusername(){
        return $this->username;
    }
}

// ordine - utente e carta di credito