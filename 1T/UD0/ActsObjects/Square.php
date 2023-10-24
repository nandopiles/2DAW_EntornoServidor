<?php

class Square
{
    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    /**
     * Calcs the perimeter of the Square
     *
     * @return void
     */
    public function calcPerimeter()
    {
        return $this->getSide() * 4;
    }

    /**
     * Calcs the Area of the Square
     *
     * @return void
     */
    public function calcArea()
    {
        return pow($this->getSide(), 2);
    }

    /**
     * Get the value of side
     */
    public function getSide()
    {
        return $this->side;
    }

    /**
     * Set the value of side
     *
     * @return  self
     */
    public function setSide($side)
    {
        $this->side = $side;

        return $this;
    }
}
