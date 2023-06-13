<?php
 $palabra = readline("Ingrese la palabara:");
 $inversa = strrev($palabra);

    if ($inversa === $palabra) {
        echo ("La palabra es palindromo");
    }else {
        echo("La palabra no es palindromo");
    }
 
?>