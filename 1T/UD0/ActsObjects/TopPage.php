<?php
class TopPage
{
    private $tittle;
    private $align;
    private $color;
    private $backgroundColor;

    public function __construct($tittle, $align, $color, $backgroundColor)
    {
        $this->tittle = $tittle;
        $this->align = $align;
        $this->color = $color;
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * Print the Top Page with the user's conf
     *
     * @return String
     */
    public function showTopPage()
    {
        return "
        <header>
            <h1 style=\"color:{$this->getColor()};background-color: {$this->getBackgroundColor()}; text-align:{$this->getAlign()}\">{$this->getTittle()}</h1>
        </header>
        ";
    }

    /**
     * Get the value of tittle
     */
    public function getTittle()
    {
        return $this->tittle;
    }

    /**
     * Set the value of tittle
     *
     * @return  self
     */
    public function setTittle($tittle)
    {
        $this->tittle = $tittle;

        return $this;
    }

    /**
     * Get the value of align
     */
    public function getAlign()
    {
        return $this->align;
    }

    /**
     * Set the value of align
     *
     * @return  self
     */
    public function setAlign($align)
    {
        $this->align = $align;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of backgroundColor
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * Set the value of backgroundColor
     *
     * @return  self
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }
}
