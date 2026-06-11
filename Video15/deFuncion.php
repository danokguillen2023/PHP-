<?php


// for ($i=1; $i <=9 ; $i++) { 
    //    $resultado = $resultado * $i;
    // }
    
    // echo "El factorial de 9 es: " .  $resultado;
    
    function  factorial($n){
        $resultado = 1;
        for ($i=1; $i <=$n ; $i++) { 
           $resultado = $resultado * $i;
        }
        
        // echo "El factorial de $n es: $resultado" ;
        return $resultado;
        
        }
        
        $resultado = factorial(6);
        echo "El factorial de 6 es: $resultado" ;


?>