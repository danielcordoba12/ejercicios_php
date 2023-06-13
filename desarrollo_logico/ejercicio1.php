<?php
$listaNumero = readline("Ingrese la cantidad de numeros que va a trabajar:");
$nota = [];
$suma = 0;
for ($i=1; $i <= $listaNumero ; $i++) { 
    $notas[$i-1] = floatval(readline("Ingrese la nota $i:"));
    $suma += $notas[$i-1];
}
$promedio = $suma/$listaNumero;
echo ("El promedio  de las notas ingresadas es $promedio");
?>