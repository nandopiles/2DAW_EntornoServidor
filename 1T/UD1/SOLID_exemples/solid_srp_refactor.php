<?php

class Vehicle
{
    private $wheels;
    private $speed;

    public function __construct($speed, $wheels)
    {
        $this->speed = $speed;
        $this->wheels = $wheels;
    }
    /**
     * Get the value of wheels
     */ 
    public function getWheels()
    {
        return $this->wheels;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

}

class Information{
    private $vehicle;
    public function __construct($vehicle){
        $this->vehicle = $vehicle;
    }
    public function info(){
        echo "vehículo de ".$this->vehicle->getWheels()." ruedas y ";
        echo $this->vehicle->getSpeed()." km/h de velocidad máxima";
    }
}

$vehicle = new Vehicle(120,4);
$information = new Information($vehicle);
$information->info();