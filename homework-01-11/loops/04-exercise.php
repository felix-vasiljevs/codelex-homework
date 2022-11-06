<?php
class FizzBuzz
{
    public static function getFizzBuzz(int $number): int
    {
        for ($i = 1; $i <= $number; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz ";
            } elseif ($i % 3 === 0) {
                echo "Fizz ";
            } elseif ($i % 5 === 0) {
                echo "Buzz ";
            } else {
                echo "{$i} ";
            }
            if ($i % 20 === 0) {
                echo PHP_EOL;
            }
        }
        return $number . PHP_EOL;
    }
}
$selection = (int)readline("Please, type a number: \n");
    if ($selection > 0 && $selection <= 100) {
        echo FizzBuzz::getFizzBuzz($selection);
    } else {
        echo "Error: Max value = 100\n";
    }
