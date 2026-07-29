<?php

//Importamos el archivo que contiene nuestras clases encapsuladas
require_once('Persona.php');


//Instaciamos el objeto
$peruano = new Peruano;


//Usamos el metodo publico para asignar los apellidos
//Esta es ahora la unica forma permitida de hacerlo
$peruano->setApellidos('ortega', 'guillen');

echo "<br>";



//inspeccionamos el objeto 
 var_dump($peruano);


?>