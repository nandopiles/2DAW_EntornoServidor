<?php

/**
 * Calcs the factorial of the number passed by parameter
 *
 * @param  number $num => number to do the factorial
 * @return number $factorial => the $num factorial
 */
function calcFactorial($num)
{
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

/**
 * Compares all the numbers passed by parameter and returns the maximum value
 *
 * @param  list $numsList => all the nums to compare
 * @return number $maxNum => the maximum value
 */
function miMax(...$numsList)
{
    $maxNum = $numsList[0];
    foreach ($numsList as $num) {
        if ($maxNum < $num)
            $maxNum = $num;
    }
    return $maxNum;
}

/**
 * Compares all the numbers passed by parameter and returns the minimum value
 *
 * @param  list $numsList => all the nums to compare
 * @return number $minNum => the minimum value
 */
function miMin(...$numsList)
{
    $minNum = $numsList[0];
    foreach ($numsList as $num) {
        if ($minNum > $num)
            $minNum = $num;
    }
    return $minNum;
}

$num1 = 4;
$num2 = 8;
$num3 = 11;

$fact1 = calcFactorial($num1);
$fact2 = calcFactorial($num2);
$fact3 = calcFactorial($num3);

printf("Fact 1 => %d<br>Fact 2 => %d<br>Fact 3 => %d<br><br>", $fact1, $fact2, $fact3);

$maxNum = miMax($num1, $num2, $num3, $num);
$minNum = miMin($num1, $num2, $num3);
printf("Maximum value => %d <br> Minimum value => %d", $maxNum, $minNum);
