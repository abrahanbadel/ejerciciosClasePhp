<?php

$tabla = rand(0, 10);

for ($i=1; $i<=10 ; $i++) { 
    $result = $tabla * $i;
    echo"<br>$tabla x $i = $result";
}
?>