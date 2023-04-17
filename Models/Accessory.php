<?php

require_once __DIR__. '/Product.php';

class Accessory extends Product
{
    /**
     * @var string $material Type of animal
     * @var string $size Image type of animal
     * @var array $category Product category
     */
    public $material;
    public $size;
    public $sub_cat;
    
    /**
     * Constructor
     *
     * @param string $_material 
     * @param string $_size
     * @param array $_category
     */
    public function __construct($_name, $_img, $_animal, $_price, $_ean, string $_material, string $_size, string $_category)
    {
        parent::__construct($_name, $_img, $_animal, $_price, $_ean);
        $this->material = $_material;
        $this->size = $_size;
        $this->sub_cat = $_category;
    }
}