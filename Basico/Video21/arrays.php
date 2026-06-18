<?php

$data = [

[
    'nombre' => 'daniel ortega guillen',
    'email' => 'daniel@gmial.com',
    'celular' => '24444548785',
    'direccion' => [
        'pais'=> 'Peru',
        'Ciudad' => 'Lima'
    ]
],

[
    'nombre' => 'alexis ortega guillen',
    'email' => 'alexis@gmial.com',
    'celular' => '312789656'
],

[
    'nombre' => 'guiselle ortega guillen',
    'email' => 'gislelles@gmial.com',
    'celular' => '3124'
],

];

foreach ($data as $item) {
    echo $item['nombre'] . "<br>" ;
    echo $item['email'] . "<br>";
    echo $item['celular'] . "<br>" . "<br>";

    echo "<hr>";

}