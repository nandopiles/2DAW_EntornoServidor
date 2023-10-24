<?php

class Cuadrado extends Figura
{
    private $b;
    private $h;

    public function __construct($color, $b, $h)
    {
        parent::__construct($color);
        $this->b = $b;
        $this->h = $h;
    }

    public function calcularArea()
    {
        return $this->getB() * $this->getH();
    }

    /**
     * Get the value of b
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * Set the value of b
     *
     * @return  self
     */
    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }

    /**
     * Get the value of h
     */
    public function getH()
    {
        return $this->h;
    }

    /**
     * Set the value of h
     *
     * @return  self
     */
    public function setH($h)
    {
        $this->h = $h;

        return $this;
    }
}
