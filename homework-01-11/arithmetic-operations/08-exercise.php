<?php

function payDay ($basePay, $hoursWorked)
{
    if ($hoursWorked <= 40) {
        echo  $hoursWorked * $basePay . "$" . "\n";
    } elseif ($hoursWorked > 40 && $hoursWorked <= 60)  {
        echo 40 * $basePay + (($hoursWorked - 40) * ($basePay * 1.5)) . "$". "\n";
    } else {
        echo "Error" . "\n";
    }
    return $basePay;
}
$employee1 = payDay(7.5,35);
$employee2 = payDay(8.2, 47);
$employee3 = payDay(10.00, 72);


/**
function employees ($name, $basePay, $hoursWorked)
{
    $employee = new stdClass();
    $employee->name = $name;
    $employee->basePay = $basePay;
    $employee->hoursWorked = $hoursWorked;
    return $employee;
}



$employees = [
    employees('Employee 1', 7.50, 35),
    employees('Employee 2', 8.20, 47),
    employees('Employee 3', 10.00, 73)
];

foreach ($employees as $key => $employee)
{
    echo "{$employee->name}: Base Pay: {$employee->basePay}$ - Hours Worked: {$employee->hoursWorked}h.\n";
}

if ($employee->hoursWorked <= 40) {
    echo $employee->hoursWorked * $employee->basePay;
} elseif ($employee->hoursWorked > 40 && $employee->hoursWorked <= 60)  {
         echo 40 * $employee->basePay + (($employee->hoursWorked - 40) * ($employee->basePay * 1.5)) . "$". "\n";
    } else {
        echo "Error" . "\n";
    }
return $employee;
*/


