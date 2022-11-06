<?php

function naturalNumbers (int $number): int
{
    for ($i = 1; $i < $number; $i++)
    {
        echo $i . PHP_EOL;
    }
    return $i;
}

$input = (int)readline("The first 10 natural numbers are: ");
if ($input > 10) {
    echo "Error: max type is 10";
} else {
    echo naturalNumbers($input);
}