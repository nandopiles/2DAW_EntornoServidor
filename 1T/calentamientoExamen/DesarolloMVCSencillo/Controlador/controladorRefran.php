<?php

//creamos controlador que vincule clases
class ControladorRefran {
//controlador refran
    private $model;
    private $view;

    public function __construct($model, $view){
        $this->model = $model;
        $this->view = $view;


    }

    public function obtenerrefran(){
        $refran=$this->model->getRefranes();
        $this->view->verRefran($refran);
}

}

?>