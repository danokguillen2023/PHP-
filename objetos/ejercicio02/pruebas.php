<?php
  require_once 'Persona.php';

  //1.Instanciamos el objeto en blanco (ya no pasamos parametros aqui)
    $miembroEquipo = new Persona();

  //2. Rellenamos las variables desde el codigo usando los setters
  $miembroEquipo->setNombre("Daniel");
  $miembroEquipo->setApellidos("Ortega");
  $miembroEquipo->setEdad(24);

  //3. Obtenemos los resultados o procesamos la logica
  echo "<h2>Perfil del Usuario</h2>";

  //Usamos lso getters para mostrar piezas individuales de informacion 
  echo "<p><strong>Nombre registrado:</strong>" . $miembroEquipo->getNombre() . "</p>";
  echo "<p><strong>Edad registrada:</strong>" . $miembroEquipo->getEdad() . " años</p>";

  //Ejecutamos la logica de negocio

  echo "<hr>";
  if ($miembroEquipo->mayorEdad()) {
    echo"<p>El sistema autoriza a <strong>" . $miembroEquipo->nombreCompleto() . "</strong> (Mayor de edad).</p>";
  }else{
    echo "<p>Acceso denegado para <strong>" . $miembroEquipo->nombreCompleto() . "</strong> (Menor de edad).</p>";
  }


  //Reutilizacion del mismo objeto 
  //si quisiereas puedes limpiar o cambiar los datos del mismo objeto

  echo "<h3>Actualizacion de Datos en Memorias:</h3>";

  $miembroEquipo->setNombre("Guillen");
  $miembroEquipo->setEdad(17);
  echo "<p>Ahora el objeto contiene a: " . $miembroEquipo->nombreCompleto() . " con " . $miembroEquipo->getEdad() . " años.</p>";
?>