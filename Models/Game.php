<?php

require_once __DIR__. '/Product.php';

class Game extends Product
{
    /**
     * @var string $description Product short description
     * @var string $size Product size
     */
    public $description;
    public $size;
    
    /**
     * Constructor
     *
     * @param string $_description 
     * @param string $_size
     */
    public function __construct($_name, $_img, $_animal, $_price, $_ean, string $_description, string $_size)
    {
        parent::__construct($_name, $_img, $_animal, $_price, $_ean);
        $this->description = $_description;
        $this->size = $_size;
    }
}