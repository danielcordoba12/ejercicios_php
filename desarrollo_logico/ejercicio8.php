<?php
$numero = readline("Ingrese el numero: ");
function esNumeroPerfecto($numero) {
    $sumaDivisores = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $sumaDivisores += $i;
        }
    }
    return $sumaDivisores == $numero;
}

function encontrarNumerosPerfectos($rangoInicial, $rangoFinal) {
    $numerosPerfectos = [];
    for ($numero = $rangoInicial; $numero <= $rangoFinal; $numero++) {
        if (esNumeroPerfecto($numero)) {
            $numerosPerfectos[] = $numero;
        }
    }
    return $numerosPerfectos;
}

// Obtener el rango desde el usuario
$rangoInicial = (int) readline("Ingrese el rango inicial: ");
$rangoFinal = (int) readline("Ingrese el rango final: ");

// Encontrar los números perfectos en el rango especificado
$numerosPerfectos = encontrarNumerosPerfectos($rangoInicial, $rangoFinal);

// Mostrar los números perfectos encontrados
echo "Los números perfectos encontrados en el rango son:\n";
foreach ($numerosPerfectos as $numero) {
    echo $numero . "\n";
}
?>
