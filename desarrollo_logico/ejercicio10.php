<?php
// $lista = readline("Ingrese unna lista de numero;");
function ordenamientoBurbuja(&$lista) {
    $n = count($lista);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if ($lista[$j] > $lista[$j + 1]) {
                $temp = $lista[$j];
                $lista[$j] = $lista[$j + 1];
                $lista[$j + 1] = $temp;
            }
        }
    }
}

// Obtener la lista de números desde el usuario
$numeros = readline("Ingrese una lista de números separados por espacios: ");
$numeros = explode(" ", $numeros);
$numeros = array_map('intval', $numeros);

// Ordenar la lista utilizando el algoritmo de ordenamiento de burbuja
ordenamientoBurbuja($numeros);

// Mostrar la lista ordenada
echo "La lista ordenada de menor a mayor es:\n";
foreach ($numeros as $numero) {
    echo $numero . "\n";
}
?>
