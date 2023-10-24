<?php

interface Area
{
    public function calcArea();
}

class Rectangle implements Area
{
    protected $width;
    protected $height;

    /**
     * Get the value of width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    public function calcArea()
    {
        return $this->width * $this->height;
    }
}

class Square implements Area
{
    protected $side;

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

    public function calcArea()
    {
        return pow($this->getSide(), 2);
    }
}
