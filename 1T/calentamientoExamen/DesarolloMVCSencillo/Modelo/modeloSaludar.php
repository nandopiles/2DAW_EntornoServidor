<?php

class ModeloSaludar{
    private $hora;

    public function __construct() {
        date_default_timezone_set('Europe/Madrid');
        $horaLocal = date('H:i:s');
        $this->hora = $horaLocal;
}


    /**
     * Get the value of hora
     */ 
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set the value of hora
     *
     * @return  self
     */ 
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }
}
