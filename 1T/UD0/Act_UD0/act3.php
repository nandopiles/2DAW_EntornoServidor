<?php

$namesArray = array("Ismael", "Manuel", "Elena", "Sebastián", "Marisol",);
printf("Num elements in the Array => %s<br>", count($namesArray));
printf("Elements of the array => %s<br>", implode(" ", $namesArray));

$sortedArray = $namesArray;
print("Sorted alphabetical => ");
asort($sortedArray);
foreach ($sortedArray as $name)
    print($name . " ");
print("<br>");

$reverseArray = array_reverse($namesArray);
printf("Elements in reverse => %s<br>", implode(" ", $reverseArray));

printf("Manuel's position in the array => %d", array_search("Manuel", $namesArray));

$students = [
    [
        "id" => 00,
        "name" => "Nando",
        "age" => 21
    ],
    [
        "id" => 01,
        "name" => "Ana",
        "age" => 18
    ],
    [
        "id" => 02,
        "name" => "Sara",
        "age" => 22
    ]
];

/**
 * Used to print an array inside another array in a table style
 *
 * @param  Array $array => the array to print
 * @return string returns the string with the html code for print in a table style
 */
function printTable($array)
{
    $initTable = "
    <table border = 1>
        <tr>
            <td><b>Id<b></td>
            <td><b>Name</b></td>
            <td><b>Age</b></td>
        </tr>
        <tr>
    ";

    //concat ALWAYS with => .
    foreach ($array as $student) {
        foreach ($student as $data => $val) {
            $initTable .= "
            <td>$val</td>
            ";
        }
        $initTable .= "</tr>";
    }
    $initTable .= "</tr></table>";

    return $initTable;
}
print(printTable($students));

print_r(array_column($students, "name"). "<br>"); //prints the values of a specific column of an array

$sumArray = [3, 6, 11, 33, 23, 12, 34, 2, 9, 41];
print(array_sum($sumArray));
