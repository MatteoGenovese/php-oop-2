<?php

require_once __DIR__ . "/product.php";
    class Toy extends Product{
        
        protected $dimensions;

        function __construct($_dimensions)
        {
            $this->setDimensions($_dimensions);
        }

        public function getDimensions()
        {
                return $this->dimensions;
        }

        public function setDimensions($dimensions)
        {
                $this->dimensions = $dimensions;
        }
    }


?>