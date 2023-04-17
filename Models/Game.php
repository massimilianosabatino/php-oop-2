<?php

class Game
{
    /**
     * @var string $description Product short description
     * @var string $size Product size
     */
    private $description;
    private $size;
    
    /**
     * Constructor
     *
     * @param string $_ingredient 
     * @param string $_size
     */
    public function __construct(string $_ingredient, string $_size)
    {
        $this->description = $_ingredient;
        $this->size = $_size;
    }
}