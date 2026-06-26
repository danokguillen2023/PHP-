<?php
    class Persona{
    // Atributos de la clase 
    public $nombre;
    public $apellido;
    public $color_favorito;

    //Constructor para inicializar el objeto con datos
    public function __construct($nombre,$apellido, $color_favorito){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->color_favorito = $color_favorito; 
    }

    // Metodo estatico para guardar la persona en la base de datos
    public static function guardar($persona){
        // usamos el metodo estatico que arreglamos antes para conectar
        $db = CConexion::ConexionBD();

        if ($db ==null) {
            echo "No se puede guardar: No hay conexion a la base de datros.";
            return false;
        }

        try{
            //Preparamos la consulta sql usando marcadores (nombre, apellido, etc) para evitar inyecciones sql

            $sql = "INSERT INTO personas (nombre, apellido, color_favorito) VALUES (:nombre, :apellido, :color)";
            $stmt = $db->prepare($sql);

            // Unimos los datos del objeto Persona con la consulta 

            $stmt->bindParam(':nombre', $persona->nombre);
            $stmt->bindParam(':apellido', $persona->apellido);
            $stmt->bindParam(':color', $persona->color_favorito);

            // Ejecutamos la consulta
            $stmt->execute();
            echo"<br>!Datos guardados con exito en la base de datos!!";
            return true;
        }
        catch(PDOException $e){
        echo"<br>Error al guardar los datos: " . $e->getMessage();

        }
    }

    //Metodo estatico para obtener todas las personas de la base de datos

    public static function obtenerTodos(){
        //nos conectamos a la base de datos
        $db = CConexion::ConexionBD();

        if($db == null){
            echo "Error: No hay conexion a la base de datos";
            return[]; //retornamos un arreglo vacio si falla
        }

        try {
            //Preparamos la consulta para traer todos lo sregistros
            $sql = "SELECT * FROM personas";
            $stmt = $db->prepare($sql);
            $stmt->execute();

            //Devuelve todos los resultados como un arreglo asociativo
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;

        } catch (PDOException $e) {
            echo "<br>Error al obtener los datos: " . $e->getMessage();
            return [];
        }
    }

    }

?>