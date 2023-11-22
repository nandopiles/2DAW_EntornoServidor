<?php
//creamos controlador que vincule clases
class ControladorDespedir{
//controlador despedir
    private $model;
    private $view;

    public function __construct($model, $view){
        $this->model = $model;
        $this->view = $view;


    }

    public function obtenerDespedida(){
        $despedida=$this->model->getHora();
        $this->view->despedirse($despedida);
}
}



?>