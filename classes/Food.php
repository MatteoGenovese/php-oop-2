<?php

require_once __DIR__ . "/product.php";


class Food extends Product{

    protected $expirationDate;
    protected $vegan;
    protected $ingredients;

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }


    public function getVegan()
    {
        return $this->vegan;
    }

    public function setVegan($vegan)
    {
        $this->vegan = $vegan;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }
}


?>