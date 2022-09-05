<?php 

require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Kart.php';
require_once __DIR__ . '/CreditCard.php';

class Product {

    protected $id;
    protected $name;
    protected $description;

    function __construct($_id, $_name, $_description)
    {
        $this->setId($_id);
        $this->setName($_name);
        $this->setDescription($_description);
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

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getDescription(){
        return $this->description;
    }
}


?>
