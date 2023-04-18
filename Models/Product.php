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
    function __construct(string $_name, string $_img, array $_animal, float $_price, int $_ean)
    {
        $this->name = $_name;
        $this->img = $_img;
        $this->animal = $this->setAnimal($_animal);
        $this->price = $_price;
        $this->ean = $_ean;
    }

    private function setAnimal($animal)
    {
        $animal_temp = [];
        foreach ($animal as $el)
        {
            switch ($el) {
                case 'cane':
                    $animal_temp[] = new Animal('Cane', 'dog.png');
                    break;
                case 'gatto':
                    $animal_temp[] = new Animal('Gatto', 'cat.png');
                    break;
                case 'uccello':
                    $animal_temp[] = new Animal('Uccello', 'bird.png');
                    break;
                case 'pesce':
                    $animal_temp[] = new Animal('Pesce', 'fish.png');
                    break;
                default:
                    $animal_temp = [];
                    break;
            }
        }
        return $animal_temp;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_img()
    {
        return $this->img;
    }

    public function get_animal()
    {
        return $this->animal;
    }

    public function get_price()
    {
        return $this->price;
    }

    public function get_ean()
    {
        return $this->ean;
    }

    public function get_stock()
    {
        return $this->stock;
    }
}
