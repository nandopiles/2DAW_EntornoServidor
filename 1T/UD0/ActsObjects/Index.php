<?php

include("./Menu.php");
include("./TopPage.php");
include("./Table.php");
include("./Person.php");
include("./Person2.php");
include("./Person3.php");
include("./Person4.php");
include("./AbstractPerson.php");
include("./Worker.php");
include("./Worker2.php");
include("./Manager.php");
include("./Manager2.php");
include("./Employee.php");
include("./Employee2.php");
include("./Employee3.php");
include("./Employee4.php");
include("./Employee5.php");
include("./Employee6.php");
include("./Employee7.php");
include("./Employee8.php");
include("./Square.php");
include("./Car.php");
include("./Calculator.php");


//ej1
$employee1 = new Employee();
$employee1->initializeEmployee("Leo", 2500);
$employee1->welcome();

//ej2
echo "<br>";
$menu = new Menu();
$menu->setOption(strtolower("vertical"));

//ej3
$menu->checkOption($menu->getOption());
echo "<br>";
$topPage = new TopPage("THE NEW TITTLE", "center", "red", "orange");
print($topPage->showTopPage());
echo "<br>";

//ej7
$table1 = new Table(5, 3);
$table1->printSpecificField(1, 2, "red", "Monospace");
echo "<br>";

//ej8
$table1->createCells();
//var_dump($table1->createCells());
echo "<br>";

//ej9
$employee2 = new Employee("Steven");
$employee3 = new Employee("Dona", 2500);
print($employee2->__toString());
print($employee3->__toString());
echo "<br>";

//ej10
$person = new Person();
$person->pushInfo("River", 21);
print($person->__toString());
echo "<br>";
$employeeType2 = new Employee2(1552);
$employeeType2->pushInfo("Nando", 21);
echo $employeeType2->__toString();
echo $employeeType2->printSalary();

//ej11
$e2 = new Employee2(3);
$e2->pushInfo("Nandito", 1);
print("<br>" . $e2->__toString());

//ej12
$e3 = new Employee3(5000);
$e3->pushInfo("Juan", 33);
echo $e3->__toString();

//ej13
$p1 = new Person2("Juan José", 31);
echo $p1->__toString();
$e4 = new Employee4("Ferdinand", 38, 400);
echo $e4->__toString();

//ej14
try {
    //$pAbs = new AbstractPerson();
} catch (Exception $e) {
    echo "EXCEPTION => " . $e->getMessage();
}
$e5 = new Employee5();
$e5->pushInfo("Saeees", 89);
$e5->setSalary(4500);
echo $e5->printInfo();

//ej15
$e6 = new Employee6(6);
$e6->setNameWorker("Safaera");
$e6->setSalary($e6->calcSalary());
echo "<br>" . $e6->printWorkerInfo();
$manager = new Manager(6);
$manager->setNameWorker("Safafa");
$manager->setSalary($manager->calcSalary());
echo $manager->printWorkerInfo();


//ej16
// $p3 = new Person3();
// $p3->pushInfo("Aurelio", 3);
// echo $p3->__toString();
// $e7 = new Employee7();
// $e7->pushInfo("Mal", 333); //final method
// $e7->setSalary(33);
// echo $e7->__toString();
// echo $e7->printSalary();

//ej17
$realSquare = new Square(3);
$referenceSquare = &$realSquare; //reference
echo "<br>Perimeter: {$referenceSquare->calcPerimeter()}m<br>";
echo "Area: {$referenceSquare->calcArea()}m^2<br>";

//ej18
$realPerson = new Person4();
$realPerson->setAge(10);
$newPerson = clone $realPerson; //clone
$newPerson->setAge($newPerson->getAge() + 1);
echo "<br>Real Person: {$realPerson->getAge()}<br>";
echo "New Person: {$newPerson->getAge()}<br>";

//ej19
$we1 = new Employee8();
$we1->setNameWorker("wEmployee1");
$we1->setSalaryWorker(23);
$we2 = new Employee8();
$we2->setNameWorker("wEmployee2");
$we2->setSalaryWorker(11);
$we3 = new Employee8();
$we3->setNameWorker("wEmployee3");
$we3->setSalaryWorker(13);

$wm1 = new Manager2();
$wm1->setNameWorker("wManager1");
$wm1->setSalaryWorker(23);
$wm2 = new Manager2();
$wm2->setNameWorker("wManager2");
$wm2->setSalaryWorker(50);

$arrayWorkers = [$we1, $we2, $we3, $wm1, $wm2];
foreach ($arrayWorkers as $worker) {
    if (get_class($worker) === "Manager2") {
        if ($higherSalaryManager === null || $worker->getSalaryWorker() > $higherSalaryManager->getSalaryWorker()) {
            $higherSalaryManager = clone $worker;
        }
    }
}
echo "{$higherSalaryManager->getNameWorker()} is the manager who has the highest salary with {$higherSalaryManager->getSalaryWorker()}€<br><br>";

//ej20
$car = new Car();

//ej21
$calculator = new Calculator();
echo "<br>Addition: " . $calculator->adding(8, 3);
echo "<br>Subtraction: " . $calculator->subtracting(10, 4);
echo "<br>Multiplication: " . $calculator->multiplying(5, 4);
echo "<br>Division: " . $calculator->dividing(25, 5) . "<br><br>";
