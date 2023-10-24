<?php

class Shape
{
    protected $type;
    public function __construct($type)
    {
        $this->type = $type;
    }
    public function draw()
    {
        echo "no se que es...";
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }
}

class ShapeSquare extends Shape
{
    public function __construct()
    {
        parent::__construct("square");
    }
    public function draw()
    {
        echo "es un cuadrado";
    }
}
class ShapeTriangle extends Shape
{
    public function __construct()
    {
        parent::__construct("triangle");
    }
    public function draw()
    {
        echo "es un triangulo";
    }
}
class ShapeCircle extends Shape
{
    public function __construct()
    {
        parent::__construct("circle");
    }
    public function draw()
    {
        echo "es un circulo";
    }
}

$shape = new ShapeCircle();
$shape = $shape->draw();
