<?php

class Car
{
    private $id;
    private $model;
    private $brand;

    public function __construct($id, $model, $brand)
    {
        $this->id = $id;
        $this->model = $model;
        $this->brand = $brand;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getBrand()
    {
        return $this->brand;
    }
}

class CarManager
{
    private $carsDb;
    public function __construct()
    {
        $this->carsDb = [
            new Car("1", "Golf III", "Volkswagen"),
            new Car("2", "Multipla", "Fiat"),
            new Car("3", "Megane", "Renault"),
        ];
    }
    public function getFromDb($carId)
    {
        foreach ($this->carsDb as $car) {
            if ($car->getId() == $carId) {
                return $car;
            }
        }
        return null;
    }

    public function getCarsNames()
    {
        $sb = "";
        foreach ($this->carsDb as $car) {
            $sb .= $car->getBrand() . " ";
            $sb .= $car->getModel() . ", ";
            $sb .= "<br>";
        }
        return substr($sb, 0, -2);
    }

    public function getBestCar()
    {
        $bestCar = null;
        foreach ($this->carsDb as $car) {
            if ($bestCar == null || $car->getModel() > $bestCar->getModel()) {
                $bestCar = $car;
            }
        }
        return $bestCar;
    }
}
