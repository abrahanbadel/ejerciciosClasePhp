<?php

# guardar notas en un array y sacar el promedio de esas notas
# posdata: FACILITOOOO!!!

$notas = array("5","5","5","5","5");
$sum = 0;

for ($i=0; $i < count($notas); $i++) { 

    $sum = ($sum + $notas[$i]); 
    echo "las notas fueron ". $notas[$i] ."<br>";
}

$prom = ($sum) / count($notas); 

echo"el promedio de las notas es: ". $prom ."<br>";
?>


