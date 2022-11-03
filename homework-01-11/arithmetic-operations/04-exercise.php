<?php

function factional ($number)
{
    $result = 1;

    for ($i = 1; $i <= $number; $i++) {
        $result = $result * $i;
    }
    return $result;
}
$number = 5;
echo factional($number) . "\n";

