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
    $temp_product = new Food($product['name'], $product['img'], $product['animal'], $product['price'], $product['ean'], $product['ingredients'], $product['weight']);
    var_dump($temp_product);
    die();
    // $products[] = $temp_product;
}
var_dump($products);