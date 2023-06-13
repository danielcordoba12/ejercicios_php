<?php
$num1 = readline("Ingrese el primer numero: ");
$num2 = readline("Ingrese el segundo numero numero: ");

if ($num1 > 10 or $num2 > 10 ){
        if ($num1 > 10 and $num2 > 10){
            echo "Los dos numero son mayores a 10";
        }else{
            echo "Uno de los numeros es mayor a 10";
        };
};

if ($num1 <= 10 and $num2 <= 10){
    echo "Ninguno de los numeros es mayor a 10"; 
};