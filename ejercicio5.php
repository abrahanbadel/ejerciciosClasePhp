<?php

$grupoAdmin = 1000000;
$grupoDiagramador = 1200000;
$grupoVendedor = 1500000;

$salarioFinal = 0;

$a = 0;
while ($a < 5) {
    $a++;
    $salarioFinalA = $grupoAdmin * 0.05 + $grupoAdmin;
    $salarioFinalD = $grupoDiagramador * 0.10 + $grupoDiagramador;
    $salarioFinalV = $grupoVendedor * 0.12 + $grupoVendedor;
}

echo "<br> el sueldo aumentado x5 de los administradores es: $salarioFinalA ";
echo "<br> el sueldo aumentado x5 de los administradores es: $salarioFinalD ";
echo "<br> el sueldo aumentado x5 de los administradores es: $salarioFinalV ";

$nomina = $salarioFinalA + $salarioFinalD + $salarioFinalV;
echo "<br>la nomina de los 15 empleados es de: $nomina";
?>