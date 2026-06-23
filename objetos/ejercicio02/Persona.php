<?php

class Persona {
    private $nombre;
    private $apellidos;
    private $edad;



    //Metodos SET para inyectar datos desde el codigo 

    public function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    public function setApellidos($nuevosApellidos){
        $this->apellidos = $nuevosApellidos;
    }

    public function setEdad($nuevaEdad){
        if($nuevaEdad >= 0) {
            $this->edad = $nuevaEdad;
        }
    }

    // Metodos GET para leer datos hacia el codigo 

    public function getNombre(){
        return ucfirst($this->nombre);
    }

    public function getApellidos(){
        return ucfirst($this->apellidos);
    }

    public function getEdad(){
        return $this->edad;
    }

    // LOGICA DEL PROGRAMA 
    public function mayorEdad() {
        return $this->edad >= 18;
    }

    public function nombreCompleto() {
        return $this->getNombre() . " " . $this->getApellidos();
    }

}