<?php

class Circulo extends Figura implements Forma
{
    private $radio;

    public function __construct($color, $radio)
    {
        parent::__construct($color);
        $this->radio = $radio;
    }

    public function calcularArea()
    {
        return round(pi() * pow($this->getRadio(), 2), 2);
    }

    /**
     * Get the value of radio
     */
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * Set the value of radio
     *
     * @return  self
     */
    public function setRadio($radio)
    {
        $this->radio = $radio;

        return $this;
    }
}
