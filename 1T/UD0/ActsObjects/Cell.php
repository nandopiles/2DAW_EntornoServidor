<?php

class Cell
{
    private $text;
    private $colorFont;
    private $colorBackground;

    public function __construct($text, $colorFont, $colorBackground)
    {
        $this->text = $text;
        $this->colorFont = $colorFont;
        $this->colorBackground = $colorBackground;
    }

    public function printCell()
    {
        return "<span style=\"color: {$this->getColorFont()}; background-color: {$this->getColorBackground()}\">{$this->getText()}</span>";
    }

    /**
     * Get the value of text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of colorFont
     */
    public function getColorFont()
    {
        return $this->colorFont;
    }

    /**
     * Set the value of colorFont
     *
     * @return  self
     */
    public function setColorFont($colorFont)
    {
        $this->colorFont = $colorFont;

        return $this;
    }

    /**
     * Get the value of colorBackground
     */
    public function getColorBackground()
    {
        return $this->colorBackground;
    }

    /**
     * Set the value of colorBackground
     *
     * @return  self
     */
    public function setColorBackground($colorBackground)
    {
        $this->colorBackground = $colorBackground;

        return $this;
    }
}
