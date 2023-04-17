<?php

class Food
{
    /**
     * @var string $material Type of animal
     * @var string $size Image type of animal
     * @var array $category Product category
     */
    private $material;
    private $size;
    private $category;
    
    /**
     * Constructor
     *
     * @param string $_ingredient 
     * @param string $_size
     * @param array $_category
     */
    public function __construct(string $_ingredient, string $_size, array $_category)
    {
        $this->material = $_ingredient;
        $this->size = $_size;
        $this->category = $_category;
    }
}