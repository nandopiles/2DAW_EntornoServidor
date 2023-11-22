
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
class BddControllerList{
//controlador de la lista
private $modelo;
private $view;

public function __construct($modelo,$view){
    $this->modelo=$modelo;
    $this->view=$view;
    
}

public function mostrarLista(){
    $mostrarTodaLista = $this->modelo->obtenerTodosLosDatos();
    $this->view->mostrarDatos($mostrarTodaLista);
    
}

}

?>