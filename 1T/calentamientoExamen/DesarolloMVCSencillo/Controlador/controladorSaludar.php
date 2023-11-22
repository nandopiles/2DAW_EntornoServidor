<?php
//creamos controlador que vincule clases
class ControladorSaludar{
//controlador saludar
    private $model;
    private $view;

    public function __construct($model, $view){
        $this->model = $model;
        $this->view = $view;


    }

    public function obtenerSaludo(){
        $saludo=$this->model->getHora();
        $this->view->saludar($saludo);
}
}



?>