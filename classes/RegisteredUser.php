<?php

require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Cart.php';
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/User.php';

class RegisteredUser extends User{

    protected $id;
    protected $username;

    function __construct($_cart, $_creditCard, $_id, $_username)
    {
        parent::__construct($_cart, $_creditCard);
        $this->setId($_id);
        $this->setUsername($_username);
    }

    public function getCartTotal(){
        $total = parent::getCartTotal();
        $total= $total * (1 - 0.2);
        return $total;
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