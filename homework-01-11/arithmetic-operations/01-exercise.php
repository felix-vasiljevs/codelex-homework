<?php

function  numbers ($a, $b)
{
    if ($a == 15 || $b == 15 || $a + $b == 15 || $a - $b == 15) {
        return "It's true";
    } else {
        return "It's false";
    }
}

echo numbers(6, 9) . "\n";
echo numbers(7, 10) . "\n";
echo numbers(11, 1) . "\n";
echo numbers(1, 16) . "\n";
echo numbers(20, 5) . "\n";
echo numbers(21, 7) . "\n";
echo numbers(32, 17) . "\n";
echo numbers(0, 15) . "\n";
