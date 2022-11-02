<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: " . implode(', ', $numbers) . PHP_EOL;

$sortedNumbers = sort($numbers);

//todo
echo "Sorted numeric array: " . implode(', ', $numbers) . PHP_EOL;

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

$implodedWord = implode(', ', $words);
//todo
echo "Original string array: " . $implodedWord. PHP_EOL;
;
$sortedWords = sort($words);

//todo
echo "Sorted string array: " . implode(', ', $words). PHP_EOL;
;