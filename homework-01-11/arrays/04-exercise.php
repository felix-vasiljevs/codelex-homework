<?php

$numbers = [];
$copiedNumbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[$i] = rand(1, 100);
    $copiedNumbers = $numbers++;
}

array_pop($numbers);
array_push($numbers, -7);

echo implode(', ', $numbers) . PHP_EOL;
echo implode(', ', $copiedNumbers) . PHP_EOL;