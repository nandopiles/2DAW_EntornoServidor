<?php

class Vehicle
{
    private $ruedas;
    private $velocidad;

    public function __construct($velocidad, $ruedas)
    {
        $this->velocidad = $velocidad;
        $this->ruedas = $ruedas;
    }

    public function info(){
        echo "vehículo de ".$this->ruedas." ruedas y ";
        echo $this->velocidad." km/h de velocidad máxima";
    }

}

$vehiculo = new Vehicle(120,4);
$vehiculo->info();
