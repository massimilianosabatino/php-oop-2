<?php

class Animal
{
    /**
     * @var string $type Type of animal
     * @var string $img Image type of animal
     */
    private $type;
    private $image;
    
    /**
     * Constructor
     *
     * @param string $_type 
     * @param string $_image
     */
    public function __construct(string $_type, string $_image)
    {
        $this->type = $_type;
        $this->image = 'src/img/'.  $_image;
    }

    public function get_type()
    {
        return $this->type;
    }

    public function get_image()
    {
        return $this->image;
    }
}