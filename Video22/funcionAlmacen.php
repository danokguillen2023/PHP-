<?php

$array = ['Victor', 'Pamela', 'Elizabeth', 'daniel'];

unset($array[2]);


// var_dump($array);

// echo $array[5];

// echo count($array);

if (in_array('Elizabeth', $array)) {
    echo "true el valor se encontro";
}else {
    echo "false no se encontro";
}