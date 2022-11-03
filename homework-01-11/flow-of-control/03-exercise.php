<?php

function positiveNumbers ($number)
{
    $numberOfDigits = strlen($number);
    if($number > 0)
    {
        echo "$number \n";
        echo "This number has $numberOfDigits digits. \n";
    }
    return $number;
}

$input = (int) readline("Enter the number: " );
positiveNumbers($input) . PHP_EOL;

/**
 2nd option

$input = (int) readline("Enter the number: " );

$numberOfDigits = strlen($input);

if ($input > 0) {
    echo $input . "\n";
    echo "This number has $numberOfDigits digits. \n";
}
*/
