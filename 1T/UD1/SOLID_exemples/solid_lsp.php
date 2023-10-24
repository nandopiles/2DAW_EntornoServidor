<?php

class Person
{
    protected $teachingTopic;
    protected $learningTopic;

    public function teach()
    {
        echo "Imparto clases";
    }
    public function learn()
    {
        echo "Recibo clases" ;
    }

}

class Student extends Person
{
    public function teach()
    {
        throw new Exception("Necesito aprender más");
    }
}

class Teacher extends Person
{

}

$student = new Student();
$student->teach();