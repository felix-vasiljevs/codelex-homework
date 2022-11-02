<?php

$input1 = (int) readline("Enter first number: ");
$input2 = (int) readline("Enter second number: ");
$input3 = (int) readline("Enter third number: ");

if ($input1 > $input2) {
    echo $input1 . "\n";
} elseif ($input2 > $input3) {
    echo $input2 . "\n";
} elseif ($input3 > $input1) {
    echo $input3 . "\n";
}
