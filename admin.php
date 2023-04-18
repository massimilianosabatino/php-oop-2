<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="Functions/add-product.php" method="post">
            <fieldset>
                <legend>Categoria prodotto</legend>
                <label for="category">Cibo
                    <input type="radio" name="category" id="category" value="food" checked>
                </label>
                <label for="category">Giochi
                    <input type="radio" name="category" id="category" value="game">
                </label>
                <label for="category">Accessori
                    <input type="radio" name="category" id="category" value="accessory">
                </label>
            </fieldset>
            <label for="name"> Nome prodotto
                <input type="text" name="name" id="name">
            </label>
            <label for="img">Url immagine
                <input type="text" name="img" id="img">
            </label>
            <label for="animal">Seleziona per che animale
                <select name="animal" id="animal">
                    <option value="cane" selected>Cane</option>
                    <option value="gatto">Gatto</option>
                    <option value="uccello">Uccello</option>
                    <option value="pesce">Pesce</option>
                </select>
            </label>
            <label for="price">Prezzo
                <input type="number" name="price" id="price">
            </label>
            <label for="ean">Codice EAN
                <input type="number" name="ean" id="ean">
            </label>
            <label for="ingredients">Lista ingredienti - Solo cibo -
                <input type="text" name="ingredients" id="ingredients">
            </label>
            <label for="weight">Peso - Solo cibo -
                <input type="number" name="weight" id="weight">
            </label>
            <label for="description">Descrizione - Solo giochi -
                <input type="text" name="description" id="description">
            </label>
            <label for="size">Dimensioni - Solo giochi e accessori-
                <input type="text" name="size" id="size">
            </label>
            <label for="material">Materiale - Solo accessori -
                <input type="text" name="material" id="material">
            </label>
            <button type="submit">Invia</button>
        </form>
        <a href="/php-oop-2">Torna alla home</a>
    </main>
</body>
</html>