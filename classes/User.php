<?php

require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Kart.php';
require_once __DIR__ . '/CreditCard.php';

class User{

    protected $id;
    protected $name;


    function __construct($_id, $_name)
    {
        $this->setId($_id);
        $this->setName($_name);
    }


    private function setId($_id){
        $this->id = $_id;
    }

    private function setName($_name){
        $this->name = $_name;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

}

// ordine - utente e carta di credito