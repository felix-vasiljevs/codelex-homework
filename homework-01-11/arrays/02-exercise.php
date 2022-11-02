<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers

$average = array_sum($numbers) / count($numbers);

echo $average . PHP_EOL;
