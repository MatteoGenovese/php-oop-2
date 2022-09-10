<?php
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/CreditCard.php';

class Cart {

    protected $id;
    protected $products=[];
    protected $user;

    function __construct($_id, $_user , ...$_products)
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
    protected function setProducts($cart_products_arrays){
        // var_dump($cart_products_arrays);
        foreach ($cart_products_arrays as $key => $cart_products_array) {

            if (is_a($cart_products_array, 'Product')) {
                $this->products[]=$cart_products_array;
            } else {
                foreach ($cart_products_array as $key => $product) {
                    $this->products[]=$product;
                }
            }
            
        }
        // var_dump($this->products);

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


    public function getCartTotal (){
        $total=0;
        foreach ($this->cart as $key => $cartElement) {
            $total += $cartElement->getPrice();
        }
        return $total;
    }

    public function addProductToCart(...$_products){
        foreach ($_products as $key => $product) {
            if(!is_a($product,"Product", true)){
                throw new Exception("One or many object aren't products");
            };
        }
        $this->cart=array_merge($this->cart, $_products);
    }

    public function removeProductToCart(...$_products){
        foreach ($_products as $key => $product) {
            array_search($product, $this->cart);
            
        }
    }

}


?>