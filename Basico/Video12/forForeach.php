<?php

    $base = 5;
    $exp = 4;

    $resultado = 1;

    //     while ($i <= $exp) {
    //     $resultado = $resultado * $base;
    //     $i ++;
    // }

    for ($i=0; $i <= $exp ; $i++) { 
        $resultado = $resultado * $base;
    }
    
    echo "El valor de $base elevado a $exp es: $resultado"; 
?>
