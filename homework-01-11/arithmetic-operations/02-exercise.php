<?php

function CheckOddEven ($number)
{
    if ($number === 1) {
        echo "Odd number" . "\n";
    } elseif ($number % 2 === 0) {
        echo "Even number" . "\n";
    } else {
        echo "Odd Number" . "\n";
    }
    echo "Bye!" . PHP_EOL;
}

$number = rand(1, 100);
echo $number . PHP_EOL;

CheckOddEven($number);

