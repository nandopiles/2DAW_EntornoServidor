<?php

class Controller{

    private $modelo;
    private $vista;

    public function __construct($modelo, $vista){

        $this->modelo = $modelo;
        $this->vista = $vista;

    }

    public function mostrarTodo(){
        $nombre = $this->modelo->getName();
        $apellido = $this->modelo->getSurname();
        $this->vista->mostrar($nombre, $apellido);
    }


}



?>