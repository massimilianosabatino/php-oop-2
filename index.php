<?php
require_once __DIR__. '/Models/Store.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>Boolshop</header>
    <ul class="products">
        <?php foreach (Store::$products as $product): ?>
        <li>
            <div class="card">
                <div class="image">
                    <img src="<?php echo $product->img; ?>" alt="<?php echo $product->name; ?>">
                </div>
                <div class="info">
                    <h2>
                        <?php echo $product->name; ?>
                    </h2>
                    <div class="category">
                        <?php foreach ($product->animal as $animal): ?>
                            <div class="icon">
                                <img src="<?php echo $animal->image ?>" alt="Icona <?php echo $animal->type ?>">
                            </div>
                            <h3>
                                <?php echo $animal->type ?>
                            </h3>
                        <?php endforeach; ?>
                    </div>
                    <div class="details">
                        <div>Prezzo: € <?php echo $product->price; ?></div>
                        <?php if ($product instanceof Food): ?>
                            <div>Peso netto: <?php echo $product->weight; ?> gr</div>
                            <div>Ingredienti: <?php echo implode(', ', $product->ingredients); ?></div>
                        <?php elseif ($product instanceof Game): ?>
                            <div>Caratteristiche: <?php echo $product->description; ?> gr</div>
                            <div>Dimensioni: <?php echo $product->size; ?> gr</div>
                        <?php elseif ($product instanceof Accessory): ?>
                            <div>Materiale: <?php echo $product->material; ?> gr</div>
                            <div>Dimensione: <?php echo $product->size; ?> gr</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach; ?> 
    </ul>
</body>
</html>


