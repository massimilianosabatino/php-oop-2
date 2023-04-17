<?php

class Food
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
    public function __construct(string $_ingredient, string $_weight)
    {
        $this->ingredients = $_ingredient;
        $this->weight = $_weight;
    }
}