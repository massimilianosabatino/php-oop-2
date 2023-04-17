<?php

require_once __DIR__. '/Models/Product.php';
require_once __DIR__. '/Models/Food.php';
require_once __DIR__. '/Models/Game.php';
require_once __DIR__. '/Models/Accessory.php';
require_once __DIR__. '/db.php';

//Animal instance
$dog = new Animal('Cane', 'dog.png');
$cat = new Animal('Gatto', 'cat.png');
$bird = new Animal('Uccello', 'bird.png');
$fish = new Animal('Pesce', 'fish.png');


$products = [];
foreach ($store as $product)
{
    switch ($product['category'])
    {
        case 'food':
            $temp_product = new Food ($product['name'], $product['img'], $product['animal'], $product['price'], $product['ean'], $product['ingredients'], $product['weight']);
            break;
        case 'game':
            $temp_product = new Game ($product['name'], $product['img'], $product['animal'], $product['price'], $product['ean'], $product['description'], $product['size']);
            break;
        case 'accessory':
            $temp_product = new Accessory ($product['name'], $product['img'], $product['animal'], $product['price'], $product['ean'], $product['mateerial'], $product['size'], $product['category']);
            break;
    } 
    $products[] = $temp_product;
}




