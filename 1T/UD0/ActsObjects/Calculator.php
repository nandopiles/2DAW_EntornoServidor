<?php

class Calculator
{
    /**
     * Does an "addition" with the two numbers passed by parameter 
     *
     * @param  double $num1
     * @param  double $num2
     * @return double
     */
    public function adding($num1, $num2)
    {
        return $num1 + $num2;
    }

    /**
     * Does an "subtraction" with the two numbers passed by parameter 
     *
     * @param  double $num1
     * @param  double $num2
     * @return double
     */
    public function subtracting($num1, $num2)
    {
        return $num1 - $num2;
    }

    /**
     * Does an "multiplication" with the two numbers passed by parameter 
     *
     * @param  double $num1
     * @param  double $num2
     * @return double
     */
    public function multiplying($num1, $num2)
    {
        return $num1 * $num2;
    }

    /**
     * Does an "division" with the two numbers passed by parameter 
     *
     * @param  double $num1
     * @param  double $num2
     * @return double
     */
    public function dividing($num1, $num2)
    {
        return $num1 / $num2;
    }
}
