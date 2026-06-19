<?php
// CONTROLADOR : procesar.php
//Recibe los datos de la peticion, interactura con el modelo y genera el resultado


//1. Enlasamos de forma obligatoria el modelo, y aque este archivo usara la clase Persona.

require_once 'Persona.php';

//2. Filtro de seguridad: Evaluamos si realmente los datos llegaron porel metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //3. Captura y extraccion de las variables enviadas por la Vista (index.php)
    $nombre = $_POST['nombre'];
    $apellidos =$_POST['apellidos'];
    $edad = (int)$_POST['edad'];

    //4. Instanciacion del modelo usando los parametros dinamicos 
    $usuario = new Persona($nombre, $apellidos, $edad);

    //5. Construccion de la respuesta visual basada en la evaluacion del objeto 

    echo"<!DOCTYPE html>";
    echo"<html lang='es'>";
    echo "<head><meta charset='UTF-8'><title>Resultado</title></head>";
    echo "<body style='font-family: sans-serif; margin: 20px;'>";
    echo "<h2>Resultado del Procesamiento</h2>";
    
    if ($usuario->mayorEdad()) {
        echo "<p><strong>" . $usuario->nombreCompleto() . "</strong>  es mayor de edad.</p>";
    }else {
            echo "<p><strong>" . $usuario->nombreCompleto() . "</strong> es menor de edad.</p>";   
         }

    //Enlace simple para regresar al formulario original de la manera mas comoda

    echo "<br><a href='index.php'>← Volver al formulario</a>";
    echo "</body>";
    echo "</html>";
    } else {
    // Si alguien intenta entrar a procesar.php directamente desde la URL sin enviar el formulario,
    // se le redirige automáticamente a la pantalla de registro por seguridad.
    header("Location: index.php");
    exit();
}
