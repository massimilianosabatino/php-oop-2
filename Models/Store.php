<?php
require_once __DIR__ . '/../db.php';
require_once __DIR__. '/Food.php';
require_once __DIR__. '/Game.php';
require_once __DIR__. '/Accessory.php';

class Store
{
    private $store;
    private $products;
    function __construct(array $_store)
    {
        $this->store = $_store;
        $this->setStore();
    }

    private function setStore()
    {
        foreach ($this->store as $product) {
            switch ($product['category']) {
                case 'food':
                    $temp_product = new Food($product['name'], $product['img'], $product['animal'], $product['price'], $product['ean'], $product['ingredients'], $product['weight']);
                    break;
                case 'game':
                    $temp_product = new Game($product['name'], $product['img'], $product['animal'], $product['price'], $product['ean'], $product['description'], $product['size']);
                    break;
                case 'accessory':
                    $temp_product = new Accessory($product['name'], $product['img'], $product['animal'], $product['price'], $product['ean'], $product['material'], $product['size'], $product['sub_cat']);
                    break;
            }
            $this->products[] = $temp_product;
        }
    }

    public function get_store(){
        return $this->products;
    }
}

$products = new Store($store);