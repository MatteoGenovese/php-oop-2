<?php 

require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Cart.php';
require_once __DIR__ . '/CreditCard.php';

class Product {

    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $target;

    function __construct($_id, $_name, $_description, $_price, $_target)
    {
        $this->setId($_id);
        $this->setName($_name);
        $this->setDescription($_description);
        $this->setPrice($_price);
        $this->setTarget($_target);
    }

    private function setId($_id){
        $this->id = $_id;
    }

    private function setName($_name){
        $this->name = $_name;
    }

    private function setDescription($_description){
        $this->description = $_description;
    }

    private function setPrice($_price){
        $this->price = $_price;
    }
    
    private function setTarget($_target){
        $this->target = $_target;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPrice(){
        return $this->price;
    }

    private function getTarget(){
        return $this->target;
    }
}


?>
