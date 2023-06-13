<?php
function fibonacciSequence($n) {
    $sequence = [];
    for ($i = 0; $i < $n; $i++) {
        if ($i == 0 || $i == 1) {
            $sequence[] = $i;
        } else {
            $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
        }
    }
    return $sequence;
}

// Obtener el número ingresado por el usuario
echo "Ingrese un número para generar la secuencia de Fibonacci: ";
$n = intval(trim(fgets(STDIN)));

// Generar la secuencia de Fibonacci
$secuencia = fibonacciSequence($n);

// Mostrar la secuencia generada
echo "Secuencia de Fibonacci hasta el número $n:\n";
foreach ($secuencia as $numero) {
    echo $numero . " ";
}
?>
