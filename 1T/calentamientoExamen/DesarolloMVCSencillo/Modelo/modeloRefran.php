<?php

class ModeloRefran{
    private $refranes;

    //constructor
    public function __construct() {
        $this->refranes = array("A quien madruga, Dios le ayuda",

        "No hay mal que por bien no venga",

        "De tal palo, tal astilla",

        "En casa del herrero cuchara de palo",

        "El que no corre, vuela",

        "A lo hecho, pecho",

        "Ojo por ojo, diente por diente",

        "A rey muerto, rey puesto");

    }




    /**
     * Get the value of refranes
     */ 
    public function getRefranes()
    {
        return $this->refranes;
    }

    /**
     * Set the value of refranes
     *
     * @return  self
     */ 
    public function setRefranes($refranes)
    {
        $this->refranes = $refranes;

        return $this;
    }
}
