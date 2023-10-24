<?php
class Car
{
    public function __construct()
    {
        echo "Car done<br>";
    }

    //the object will have destroyed when the program finishes or
    //when there are no more references to the object
    public function __destruct()
    {
        echo "Car destroyed<br>";
    }
}
