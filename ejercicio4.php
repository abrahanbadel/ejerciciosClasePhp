<?php

$grupoAdmin = 1000000;
$grupoDiagramador = 1200000;
$grupoVendedor = 1500000;

$tipo = rand(1,3);
$salarioFinal = 0;

switch ($tipo) {
    case 1:
        $salarioFinal = $grupoAdmin * 0.05 + $grupoAdmin;
        echo "Administrador\n";
        break;
    
    case 2:
        $salarioFinal = $grupoDiagramador * 0.05 + $grupoDiagramador;
        echo "Diagramador\n";
        break;

    case 3:
    $salarioFinal = $grupoVendedor * 0.05 + $grupoVendedor;
        echo "Vendedor\n";
        break;
    

}

echo "el sueldo del trabajador es: $salarioFinal";


?>