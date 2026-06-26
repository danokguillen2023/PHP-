<?php
    // Incluimos las clases necesarias
    include_once("Conexion.php"); //tu clase de conexion 
    include_once("Persona.php"); //la nueva clase Persona
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 03 - Guardar Persona</title>
</head>
<body>

    <h2>Registro de Personas</h2>


    <a href="ver_registro.php">Ver todas las personas registradas</a>
    <br>
    <br>

    
    <form action="index.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="color">Color Favorito:</label><br>
        <input type="text" id="color" name="color" required><br><br>

        <input type="submit" name="btn_guardar" value="Guardar Datos">
    </form>

    <?php
    // Detectamos si el usuario presionó el botón de enviar
    if (isset($_POST['btn_guardar'])) {
        
        // Recogemos los datos enviados por el formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $color = $_POST['color'];

        // 1. Instanciamos (creamos) el objeto Persona pasándole los datos al constructor
        $nuevaPersona = new Persona($nombre, $apellido, $color);

        // 2. Llamamos al método ESTÁTICO de la clase Persona para guardarlo.
        // Fíjate cómo pasamos el objeto entero ($nuevaPersona) como parámetro.
        Persona::guardar($nuevaPersona);
    }
    ?>

</body>
</html>