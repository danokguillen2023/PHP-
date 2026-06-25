<?php
    class CConexion {

        public static function  ConexionBD(){
        $host = "localhost";
        $dbname = "dbphp";
        $username = "postgres";
        $password   ="root";
        
        try{
            $conn = new PDO("pgsql:host= $host; dbname=$dbname", $username, $password);
            echo "Se conecto correctamente a la base de datos";
        }
        catch(PDOException $exp){
            echo("NO SE PUDO CONECTAR A LA BASE DE DATOS, $exp");
        }
        return $conn;
        }
    }
?>