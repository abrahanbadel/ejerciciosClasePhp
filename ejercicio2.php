<?php

// desarrolla un programa que calcule el salario semanal de un empleado, considerando las horas trabajadas y el valor
// por hora (con un limite de 40 horas semanales y pago extra por horas extra)

$horasTrabajadas = 20;
$valorHora = 5000;
$valorExtra = 10000;

$salario = ($horasTrabajadas * $valorHora);
echo"horas trabajadas(horas minimas 40): $horasTrabajadas";

if ($horasTrabajadas > 40) {
    $horasTrabajadas = ($horasTrabajadas - 40);
echo"<br>horas extras: $horasTrabajadas";

    $valorExtra = $valorExtra * $horasTrabajadas;
    $salario = $salario + $valorExtra;
}

echo "<br><br>el salario del empleado es: $salario";

?>