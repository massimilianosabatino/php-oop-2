<?php

class Accessory extends Product
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
    public function __construct($_name, $_img, $_animal, $_price, $_ean, string $_ingredient, string $_size, array $_category)
    {
        parent::__construct($_name, $_img, $_animal, $_price, $_ean);
        $this->material = $_ingredient;
        $this->size = $_size;
        $this->category = $_category;
    }
}