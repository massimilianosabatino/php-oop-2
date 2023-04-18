<?php
require_once __DIR__. '/../Trait/Image.php';
class Animal
{
    use Image;
    /**
     * @var string $type Type of animal
     * @var string $img Image type of animal
     */
    private $type;
    
    /**
     * Constructor
     *
     * @param string $_type 
     * @param string $_image
     */
    public function __construct(string $_type, string $_img)
    {
        $this->type = $_type;
        $this->img = 'src/img/'.  $_img;
    }

    public function get_type()
    {
        return $this->type;
    }
}