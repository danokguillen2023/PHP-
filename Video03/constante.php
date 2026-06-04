<?php
    //valores que nunca cambian 
    define('CURSO', 'PHP 8 desde cero');

    define('USUARIO_1', 'DANIEL');

    // arrays con constantes 
    define('ANIMALES',[
    'perro',
    'gato',
    'tortuga'
    
    ]);

    // metodos saber si esta definido 

    if(defined('CURSO')){
        echo "si se ha definido";
        echo "<br>";
    }


    echo CURSO;
    echo "<br>";
    echo USUARIO_1;
    echo "<br>";
    echo ANIMALES[0];
    echo "<br>";
    echo "Mi version de php 🐘 es: " . PHP_VERSION;
    echo "<br>";
    echo "Mi sistema operativo 💽 es: " . PHP_OS;
    echo "<br>";
    echo PHP_EXTENSION_DIR;
    echo "<br>";
    echo PHP_SAPI;
    echo "<br>";
    echo __line__;
    echo "<br>";
    echo __file__;
    



?>