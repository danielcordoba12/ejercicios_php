<?php
  $n = floatval(readline("Ingrese el numero:"));
   
  function esprimo($numero){
    if($numero < 2){
        return false;
    }
    for ($i=2; $i < sqrt($numero) ; $i++) { 
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
  }
  if (esprimo($n)) {
    echo "$n es un  numero primo";
  }else {
    echo "$n no es un numero primo";
  }
?>