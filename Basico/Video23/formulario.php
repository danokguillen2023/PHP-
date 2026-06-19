<?php

    $nombre = $_REQUEST['name'];
    $edad = $_REQUEST['edad'];
    $sexo = $_REQUEST['sexo'];
    $roles = $_REQUEST['roles'];
    $mensaje =$_REQUEST['mensaje'];

    $imagen = $_FILES['imagen'];
    $patch = $_SERVER['DOCUMENT_ROOT'] . '/PHP-/imagenes' . '/' . $imagen['name'];

    echo "<p>El nombre del usuario es: $nombre</p>";
    // echo"<br>";
    echo "<p>La edad del usuario es: $edad</p>";

    echo "<p>El sexo del usuario es: $sexo</p>";


    echo "<p>Roles: </p>";

    echo "<ul>";
    
    foreach ($roles as $rol) {
        echo "<li>$rol</li>";
    }

    echo"</ul>";

    // echo $patch;


    // var_dump($imagen);

    move_uploaded_file($imagen['tmp_name'], $patch);

    echo "<p>Mensaje enviado 👌📨</p>";
    echo "<p>$mensaje</p>";

?>