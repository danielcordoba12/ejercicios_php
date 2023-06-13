<?php
$lista = readline("Ingrese la lista de elementos separados por coma:");

$elementoBuscado = readline("Ingrese el elemento a buscar:") ;

$elementos = explode(",", $lista);

$posicion = array_search($elementoBuscado, $elementos);

if ($posicion !== false) {
    echo "El elemento '$elementoBuscado' se encuentra en la posición $posicion.";
} else {
    echo "El elemento '$elementoBuscado' no se encuentra en la lista.";
}
?>
