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

    /**
     * getId
     *
     * @return void
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * getModel
     *
     * @return void
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * getBrand
     *
     * @return void
     */
    public function getBrand()
    {
        return $this->brand;
    }
}

class CarDao
{
    private $carsDb;

    public function __construct()
    {
        $this->carsDb = [
            new Car("1", "Golf III", "Volkswagen"),
            new Car("2", "Multipla", "Fiat"),
            new Car("3", "Megane", "Renault")
        ];
    }

    /**
     * Gets a specific car depending on the Id
     *
     * @param  mixed $carId
     * @return void
     */
    public function findById($carId)
    {
        foreach ($this->carsDb as $car) {
            if ($car->getId() == $carId) {
                return $car;
            }
        }
        return null;
    }

    /**
     * Returns all the cars
     *
     * @return void
     */
    public function findAll()
    {
        return $this->carsDb;
    }
}

class CarFormatting
{
    private $carList;

    public function __construct($carList)
    {
        $this->carList = $carList;
    }
    /**
     *  Used to return the info of the cars 
     *
     * @return void
     */
    public function getCarsNames()
    {
        $sb = "";
        foreach ($this->getCarList() as $car) {
            $sb .= $car->getBrand() . " ";
            $sb .= $car->getModel() . ", ";
            $sb .= "<br>";
        }
        return substr($sb, 0, -2);
    }

    /**
     * Get the value of carList
     */
    public function getCarList()
    {
        return $this->carList;
    }

    /**
     * Set the value of carList
     *
     * @return  self
     */
    public function setCarList($carList)
    {
        $this->carList = $carList;

        return $this;
    }
}

class CarComparator
{
    private $carList;

    public function __construct($carList)
    {
        $this->carList = $carList;
    }

    /**
     * Checks the best car depending on the model
     *
     * @return void
     */
    public function getBestCar()
    {
        $bestCar = null;
        foreach ($this->getCarList() as $car) {
            if ($bestCar == null || $car->getModel() > $bestCar->getModel()) {
                $bestCar = $car;
            }
        }
        return $bestCar;
    }

    /**
     * Get the value of carList
     */
    public function getCarList()
    {
        return $this->carList;
    }

    /**
     * Set the value of carList
     *
     * @return  self
     */
    public function setCarList($carList)
    {
        $this->carList = $carList;

        return $this;
    }
}

class CarManager
{
    private $carsDb;
    private CarDao $carDao;
    private CarFormatting $carFormatting;
    private CarComparator $carComparator;

    public function __construct(CarDao $carDao, CarFormatting $carFormatting, CarComparator $carComparator)
    {
        $this->carDao = $carDao;
        $this->carComparator = $carComparator;
        $this->carFormatting = $carFormatting;
    }
}
