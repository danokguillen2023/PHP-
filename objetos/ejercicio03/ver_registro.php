<?php
    //Incluimos las clases necesarias
    include_once("Conexion.php");
    include_once("Persona.php");

    //Llamamos al nuevo metodo para obtener a todas las personas
    $listaPersonas = Persona::obtenerTodos();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Registros</title>
    <style>
        /* Estilos basicos para que la tabla se vea bien */
        table{
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }
        th,td{
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th{
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>


    <h2>Personas Registradas</h2>

    <!-- Enlace para regresar a tu formulario de registro -->
    <a href="index.php">⬅️Volver al formulario de registro</a> 
    
    <!-- Creamos la tabla -->


    <table>
        <thead>
            <tr>
                <!-- nombre de columnas en postgresql se pueden cambiar si la base se modifica -->
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>Color favorito</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // Verificamos si hay registros

            if (count($listaPersonas)>0) {
                # REcorremos el arreglo de personas con un foreach
                foreach ($listaPersonas as $persona) {
                    echo"<tr>";
                    echo"<td>" . $persona['nombre'] . "</td>";
                    echo"<td>" . $persona['apellido'] . "</td>";
                    echo"<td>" . $persona['color_favorito'] . "</td>";
                    echo"</tr>";

                }
            }else{
                //Sino hay personas mostramos un mensaje
                echo "<tr><td colspan='3'>Nohay personas registradas aun. </td></tr>";
            }


?>
    </tbody>
    
    
    
</table>
</body>
</html>