<?php

$start = 1;
$end = 100;

$sum= 0;

for ($i = $start; $i <= $end; $i++) {
    $sum += $i;
}
echo "The sum of 1 to 100 is $sum" . "\n";

$average = ($start + $end) / 2;
echo "The average is $average" . "\n";
