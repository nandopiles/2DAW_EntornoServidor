<?php

abstract class Shape
{
    protected ShapeType $shapeType;

    abstract public function getArea();
}

abstract class ShapeType
{
    const CIRCLE = 0;
    const SQUARE = 1;
}

class Circle extends Shape
{
    private $radius;

    public function Circle($radius)
    {
        $this->shapeType = ShapeType::CIRCLE;
        $this->radius = $radius;
    }

    /**
     * Get the value of radius
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Used for calculate the circle's area
     *
     * @return void
     */
    public function getArea()
    {
        return pi() * $this->getRadius() * $this->getRadius();
    }
}

class Square extends Shape
{
    private $side;

    function __construct($side)
    {
        $this->shapeType = ShapeType::SQUARE;
        $this->side = $side;
    }

    /**
     * Get the value of side
     */
    public function getSide()
    {
        return $this->side;
    }

    /**
     * Used for calculate the Area of a Square
     *
     * @return void
     */
    public function getArea()
    {
        return $this->getSide() * $this->getSide();
    }
}
