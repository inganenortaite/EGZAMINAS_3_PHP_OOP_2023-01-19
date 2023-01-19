<?php

include_once 'Employee.php';

$employee1 = new Employee('Inga Nenortaitė', 2410);
echo $employee1 . PHP_EOL;
$employee1->calculateSalary() . PHP_EOL;
echo Employee::getTypeDescription() . PHP_EOL;

