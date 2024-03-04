<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $nota = rand(1, 50) / 10;
    echo "la nota obtenida es: " . $nota . "<br>";

    if ($nota >= 4 && $nota <= 5) {

        echo "la nota es exelente";
    } else if ($nota >= 3 && $nota < 4) {

        echo "la nota es buena";
    } elseif ($nota >= 2 && $nota < 3) {

        echo "la nota es aceptable";
    } elseif ($nota >= 1 && $nota < 2) {

        echo "la nota es aceptable";
    } elseif ($nota >= 0 && $nota < 1) {
        echo "la nota es insuficiente";
    } else {
        echo "la nota no es valida";
    }
    ?>


    
    

</body>

</html>