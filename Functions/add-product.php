<?php

//Get data from Json database
$get_db_json = file_get_contents(__DIR__ . '/../db.json');
$db = json_decode($get_db_json, true);

try {
    if ($_POST['name'] === '') {
        throw new Exception('Inserire nome prodotto');
    }
    if ($_POST['price'] === '' OR $_POST['price'] <= 0 ) {
        throw new Exception('Il prezzo inserito deve essere superiore a 0');
    }

    //Get data from Admin page
    $name = isset($_POST['name']) ?  $_POST['name'] : null;
    $img = isset($_POST['img']) ?  $_POST['img'] : null;
    $price = isset($_POST['price']) ?  $_POST['price'] : null;
    $ean = isset($_POST['ean']) ?  $_POST['ean'] : null;
    $animal = isset($_POST['animal']) ?  $_POST['animal'] : null;
    $ingredients = isset($_POST['ingredients']) ?  $_POST['ingredients'] : null;
    $weight = isset($_POST['weight']) ?  $_POST['weight'] : null;
    $description = isset($_POST['description']) ?  $_POST['description'] : null;
    $size = isset($_POST['size']) ?  $_POST['size'] : null;
    $material = isset($_POST['material']) ?  $_POST['material'] : null;
    $category = isset($_POST['category']) ?  $_POST['category'] : null;
    
    //Create new product
    $new_product = [];
    if ($name !== null) {
        //Create default array for new product
        $new_product = [
            'name' => $name,
            'img' => $img,
            'animal' => [$animal], //Sistemare array
            'price' => $price,
            'ean' => $ean,
            'category' => $category,
        ];
    
        //Add food attribute
        if ($category !== null && $category === 'food') {
            $new_product['ingredients'] = [$ingredients]; //sistemare array
            $new_product['weight'] = $weight;
        }
    
        //Add game attribute
        if ($category !== null && $category === 'game') {
            $new_product['description'] = $description;
            $new_product['size'] = $size;
        }
        //Add accessory attribute
        if ($category !== null && $category === 'accessory') {
            $new_product['material'] = $material;
            $new_product['size'] = $size;
        }
    
        //Add product to store
        $db[] = $new_product;
    };

} catch (Exception $e) {
    echo $e->getMessage() . ' <a href="/php-oop-2/admin.php">torna alla pagina di inserimento</a>';
    
} 

//Save to Json
$put_db = json_encode($db);
file_put_contents(__DIR__ . '/../db.json', $put_db);
