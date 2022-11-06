<?php

function multiplied (int $base, int $exponent ):int
{
    if ($exponent == 0) {
        echo 1 . PHP_EOL;
    } elseif ($base > 0) {
        $result = 1;
        for ($i = 1; $i <= $exponent; $i++) {
            $result *= $base;
        }
        echo $result . PHP_EOL;
    }
    return $base;
}

$base = (int)readline("Type base: ");
$exponent = (int)readline("Type exponent: ");

echo multiplied($base, $exponent) . PHP_EOL;

