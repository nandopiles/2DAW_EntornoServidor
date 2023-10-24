<?php

class Menu
{
    private $option;
    private $values = ["See smth", "Change smth", "Calc smth", "Accurate smth"];
    
    /**
     * Prints the Menu with a Horizontal Formatting
     *
     * @return void
     */
    private function printHorizontalMenu()
    {
        foreach ($this->values as $option) {
            print($option . "&nbsp");
        }
    }
    
    /**
     * Prints a Menu with a Vertical Formatting
     *
     * @return void
     */
    private function printVerticalMenu()
    {
        foreach ($this->values as $option) {
            print($option . "<br>");
        }
    }

    /**
     * Checks the separator's type and calls to the Print's function
     *
     * @param  int $option
     * @return void
     */
    public function checkOption($option)
    {
        if ($option === "horizontal")
            $this->printHorizontalMenu();
        else if ($option === "vertical")
            $this->printVerticalMenu();
    }

    /**
     * Get the value of option
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * Set the value of option
     *
     * @return  self
     */
    public function setOption($option)
    {
        $this->option = $option;

        return $this;
    }

    /**
     * Get the value of values
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Set the value of values
     *
     * @return  self
     */
    public function setValues($values)
    {
        $this->values = $values;

        return $this;
    }
}
