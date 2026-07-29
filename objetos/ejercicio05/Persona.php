<?php

/**
 * Clase principal que representa a una persona generica
 * Sirve como base para otras clases mas especificas (nacionalidades)
 */

    class Persona{

        // Atributos publicos de la persona
        public $nombre, $edad;
        public $apellido1,$apellido2;


        /**
         * Asigna el nombre de la persona 
         * Convierte el texto a minusculas antes de guardarlo para mantener consistencia 
         */
    
        public function setNombre($nombre){
            $this->nombre = strtolower($nombre);
        }

        /**Obtiene el nombre de la persona 
         * Capitaliza la primera letra de cada palabra al devolverlo
         */

        public function getNombre(){
            return ucwords($this->nombre);
        }

        /**
         * Asigna ambos apellidos a la persona
         */
        public function setApellidos($apellido1, $apellido2){
            $this->apellido1 = $apellido1;
            $this->apellido2 = $apellido2;
        }
        /**Obtiene el nombre completo uniendo ambos apellidos */
        public function getApellidos(){
            return $this->apellido1 . " " . $this->apellido2;
        }


    }


    /**Clase que representra a un aperson ad enacionalidad peruana 
     * Hereda de la clase Persona
     */
    class Peruano extends Persona{

    //Atributos geograficos especificos de peru
        public $departemento, $ciudad;

        /**Sobrescribe el metodo seApellidos de la clase padre (Persona)
         * Ejecuta l alogica original del padre y luego imprime un mensaje d econfirmacion
         */
     
        public function setApellidos($apellido1, $apellido2)
        {
            //Ejecuta el metodo setApellidos d el aclase Persona
            parent::setApellidos($apellido1,$apellido2);

            echo "los apellidos se asignaron con exito";
        }
    }


    //Clase qeu representa a una persona d enacionalidad chilena
    //Hereda de la clase persona 

    class Chileno extends Persona{
        //atributos geograficos especificos de chile
        public $comuna, $region;

        /**Sobrescribe el metodo setApellidos de la clase padre (Persona)
         * Modifica el comportamiento original invirtiendo el orden de los apellidos
         */

                public function setApellidos($apellido1, $apellido2){
            $this->apellido1 = $apellido2;
            $this->apellido2 = $apellido1;
        }

    }



?>