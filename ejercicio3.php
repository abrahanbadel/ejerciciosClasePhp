<?php
//crea un script en php que determine el dia de la semana correspondiente a una fecha ingresada por el usuario
//quedo mocho (terminar)
$time = time();
echo date("d-m-Y (D)", $time); 
echo "<br><br>february 19, 2024 cae " . date("l", mktime(0, 0, 0, 7, 1, 2000));
?>