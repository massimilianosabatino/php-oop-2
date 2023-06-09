<?php

require_once __DIR__. '/Product.php';

class Food extends Product
{
    /**
     * @var string $ingredients Recipe ingredients
     * @var int $weight Product weight
     */
    private $ingredients;
    private $weight;
    
    /**
     * Constructor
     *
     * @param string $_ingredient 
     * @param int $_weight
     */
    public function __construct($_name, $_img, $_animal, $_price, $_ean, array $_ingredient, int $_weight)
    {
        parent::__construct($_name, $_img, $_animal, $_price, $_ean);
        $this->ingredients = $_ingredient;
        $this->weight = $_weight;
    }

    /**
     * Get ingredients
     *
     * @return array
     */
    public function get_ingredients()
    {
        return $this->ingredients;
    }

    public function get_weight()
    {
        return $this->weight;
    }
}