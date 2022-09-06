<?php
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/CreditCard.php';

class Kart {

    protected $id;
    protected $products=[];
    protected $user;

    function __construct($_id, $_user ,$_products)
    {   
        $this->setId($_id);
        $this->setUser($_user);
        $this->setProducts($_products);
    }

    protected function setId($_id){
        $this->id=$_id;
    }

    protected function setUser($_user){
        $this->user=$_user;
    }
    protected function setProducts($_products){
        $this->products=$_products;
    }
    
    public function getId(){
        return $this->id;
    }

    public function getUser(){
        return $this->user;
    }
    public function getProducts(){
        return $this->products;
    }

}


?>