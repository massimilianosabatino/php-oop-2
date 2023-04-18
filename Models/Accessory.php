<?php

require_once __DIR__. '/Product.php';

class Accessory extends Product
{
    /**
     * @var string $material Type of animal
     * @var string $size Image type of animal
     * @var array $category Product category
     */
    private $material;
    private $size;
    private $sub_cat;
    
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

    public function get_material()
    {
        return $this->material;
    }

    public function get_size()
    {
        return $this->size;
    }

    public function get_sub_cat()
    {
        return $this->sub_cat;
    }
}