<?php

abstract class Shape
{
    protected ShapeType $shapeType;

    public function getType()
    {
        return $this->shapeType;
    }
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

    public function getRadius()
    {
        return $this->radius;
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

    public function getSide()
    {
        return $this->side;
    }
}

class AreaCalculator
{
    public function calculateArea(array $shapes)
    {
        $area = 0;
        foreach ($shapes as $shape) {
            if ($shape->getType() == ShapeType::SQUARE) {
                $area += $this->calculateSquareArea($shape);
            } else if ($shape->getType() == ShapeType::CIRCLE) {
                $area += $this->calculateCircleArea($shape);
            }
        }
        echo "total area = " . $area;
    }

    public function calculateSquareArea(Square $square)
    {
        return $square->getSide() * $square->getSide();
    }

    public function calculateCircleArea(Circle $circle)
    {
        return pi() * $circle->getRadius() * $circle->getRadius();
    }
}