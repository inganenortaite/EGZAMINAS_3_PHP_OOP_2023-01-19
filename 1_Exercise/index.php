<?php

include_once "Employee.php";
include_once "Intern.php";
include_once "Manager.php";

$intern = new Intern("Inga Nenortaitė", 1410); 
echo $intern . PHP_EOL;
echo "Priskaičiuotas darbuotojo atlyginimas - " . $intern->calculateSalary() . " " . "EUR" . PHP_EOL;
echo Intern::getTypeDescription() . PHP_EOL;

$manager = new Manager("Mantautas Valiulis", 2150, 16);
echo $manager . PHP_EOL;
echo "Priskaičiuotas darbuotojo atlyginimas - " . $manager->calculateSalary(). " " . "EUR" . PHP_EOL;
echo Manager::getTypeDescription() . PHP_EOL;

$interClone = clone $intern;
echo $interClone . PHP_EOL;
echo "Priskaičiuotas darbuotojo atlyginimas - " . $interClone->calculateSalary() . " " . "EUR" . PHP_EOL;
echo Intern::getTypeDescription() . PHP_EOL;