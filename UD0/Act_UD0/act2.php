<?php

/**
 * Sorts all the variables passed by parameter max to min
 *
 * @param  list $list => all the numbers to sort
 * @return list $sortedList => the list sorted
 */
function sortList(...$list)
{
    $length = count($list);
    $sortedList = $list;

    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length - 1; $j++) {
            if ($sortedList[$j] < $sortedList[$j + 1]) {
                $temporal = $sortedList[$j];
                $sortedList[$j] = $sortedList[$j + 1];
                $sortedList[$j + 1] = $temporal;
            }
        }
    }
    return $sortedList;
}

/**
 * Prints the list passed by parameter
 *
 * @param  list $list
 * @return void
 */
function printList($list)
{
    foreach ($list as $num) {
        printf("%d ", $num);
    }
}

$num1 = 3;
$num2 = 33;
$num3 = 11;

$sortedList = sortList($num1, $num2, $num3);
printList($sortedList);
