<?php
    $num = floatval(readline("Ingrese el factorial:"));
    $resultado=1;

    for ($i=1; $i <=$num ; $i++) { 
        $resultado= $resultado*$i;
    }
    echo("$resultado");
?>