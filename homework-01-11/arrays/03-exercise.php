<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$integer = 2035;

echo "Enter the value to search for: " . $integer . "\n";

if (in_array($integer, $numbers)) {
    echo "We found it :D \n";
} else {
    echo "Sorry, there is not the number you're searching for :( \n";
}

//todo check if an array contains a value user entered