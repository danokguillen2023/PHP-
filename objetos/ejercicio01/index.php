<?php
// Enlazamos de forma obligatoria el arvhico que contiene la clase
// Si el archivo no existe el script se detendra inmediatamente evitando errores
require_once 'Persona.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🙎Verificador de edad-php👩</title>
    <style>
        body{
            font-family: sans-serif;
            margin: 20px;
        }
        .campo{
            margin-bottom: 10px;
        }
        .resultado{
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Registro</h2>

<form action="procesar.php" method="post">

    <div class="campo">
        <label for="">Nombre</label> <br>
        <input type="text" name="nombre" required>
    </div>

    <div class="campo">
        <label for="">Apellidos: </label> <br>
        <input type="text" name="apellidos" required>
    </div>

    <div class="campo">
        <label for="">Edad</label> <br>
        <input type="text" name="edad" required>
    </div>

    <button type="submit">🙎Verificar</button>


</form>
    
</body>
</html>