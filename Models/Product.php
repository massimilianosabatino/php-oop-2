<?php 
require_once __DIR__. '/Animal.php';

class Product
{
    private $name;
    private $img;
    private $animal;
    private $price;
    private $ean;
    private $stock = true;

    /**
     * Constructor
     *
     * @param string $_name Product name
     * @param string $_img Image url
     * @param array $_animal Class animal
     * @param integer $_price Product price
     * @param integer $_ean Product code
     * 
     * @return mixed
     */
    function __construct(string $_name, string $_img, array $_animal, int $_price, int $_ean)
    {
        $this->name = $_name;
        $this->img = $_img;
        $this->animal = $_animal;
        $this->price = $_price;
        $this->ean = $_ean;
    }
}
