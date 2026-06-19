<?php


// Clase Persona

// Se encarga exclisivamente de modelar los datos de una persona y resolver la logica asociada a su edad y nombre completo

class Persona{
    // string Nombre completo de la persona
    private $nombre;
    // string Apellidos de la persona
    private $apellidos;
    // int Edad de la persona 
    private $edad;

    // Constructor de la clase 

    public function __construct($nombre, $apellidos, $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;

    }

    // Determina si la persona cumple con la mayoria de edad de forma legal +18
    //bool True si es mayor de edad, False en caso contrario

    public function mayorEdad(){
        return $this->edad >= 18;
    }

    // Formato estetico al nombre completo del individuo 

    // string Nombre y apellidos con iniciales en mayuscula.

    public function nombreCompleto(){
        return ucfirst($this->nombre). " " . ucfirst($this->apellidos);
    }


}
