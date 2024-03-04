<?php
#arrays asociativos
$registro = array("isbn"=> "12345","nombre"=> "La Divina Comedia","editorial"=> "Alianza Editorial","fecha_p"=> "1314","autor"=> "Dante Alighieri", "ventas" => 100000);

#mostrar todo el array
foreach ($registro as $clave => $valor) {
    echo "$clave : $valor <br>";
}
echo "<br>". "<br>". "<br>";

#crear un arraay asociativo llamado biblioteca con 5 libros(incluyendo el anterior) y obtener:
#a) nombre de todos los autores,  b) titulo del libro #5  c) la cantidad de ventas de todos los libros 

$biblioteca = array(
    array("isbn"=> "12345","nombre"=> "La Divina Comedia","editorial"=> "Alianza Editorial","fecha_p"=> "1314","autor"=> "Dante Alighieri", "ventas" => 10000000),

    array("isbn"=> "978-84-9900-000-0","nombre"=> "El libro de la vida","editorial"=> "Editorial Planeta","fecha_p"=> "2018","autor"=> "Carlos Ruiz Zafón", "ventas" => 3000000),

    array("isbn"=> "978-84-9900-000-0","nombre"=> "El príncipe de las tinieblas","editorial"=> "Editorial Planeta","fecha_p"=> "2001","autor"=> "Carlos Ruiz Zafón", "ventas" => 2000000),

    array("isbn"=> "978-84-9900-000-0","nombre"=> "El juego del ajedrez","editorial"=> "Editorial Planeta","fecha_p"=> "2015","autor"=> "Carlos Ruiz Zafón", "ventas" => 1500000),

    array("isbn"=> "978-84-9900-000-0","nombre"=> "El laberinto de los fantasmas","editorial"=> "Editorial Planeta","fecha_p"=> "2004","autor"=> "Carlos Ruiz Zafón", "ventas" => 1200000),
);

#a)
echo "a) todos los autores del array<br>";
for ($i=0; $i < count($biblioteca) ; $i++) { 
    echo $biblioteca[$i]["autor"] . "<br>";
}
echo "<br>". "<br>";

#b)
echo "b) titulo del libro #5<br>";
echo $biblioteca[4]["nombre"] . "<br>";
echo "<br>". "<br>";

#c
echo "c) la cantidad de ventas de todos los libros"; 

$total_ventas = 0;
foreach ($biblioteca as $libro) {
    $total_ventas += $libro['ventas'];
}

echo 'Total de ventas en la biblioteca: ' . number_format($total_ventas, 0, ",", ".")  . " unidades";