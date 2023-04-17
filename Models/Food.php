<?php

class Food extends Product
{
    /**
     * @var string $ingredients Recipe ingredients
     * @var string $weight Product weight
     */
    private $ingredients;
    private $weight;
    
    /**
     * Constructor
     *
     * @param string $_ingredient 
     * @param string $_weight
     */
    public function __construct($_name, $_img, $_animal, $_price, $_ean, string $_ingredient, string $_weight)
    {
        parent::__construct($_name, $_img, $_animal, $_price, $_ean);
        $this->ingredients = $_ingredient;
        $this->weight = $_weight;
    }
}