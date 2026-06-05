<?php

    $a = 5;
    $b = 5;
    
    // if($a > $b){
    //     echo "El valor de a es mayor qeu el valor de b";
    // }elseif($a < $b){
    //     echo "El valor de a es menor que el valor de b";
    // }else{
    //     echo "El valor de a es igual que el valor de b";
    // }

    $valor = $a > $b ? 'mayor': ( $a < $b ? 'menor' : 'igual');

    echo "El valor de a es <strong>$valor</strong> . que el valor de b";

?>