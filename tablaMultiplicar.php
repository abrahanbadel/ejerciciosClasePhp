<?php
echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) { // Iteramos hasta 10 para obtener todos los números de la fila principal
    echo "<tr>";

    for ($j = 1; $j <= 10; $j++) { // Iteramos hasta 10 para cada número de la columna secundaria
        $result = $i * $j;
        echo "<td>$i x $j  = $result</td>";
    }
    echo "</tr> ";
}
echo "</table>";
?>