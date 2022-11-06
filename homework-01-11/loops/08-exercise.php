<?php

class NumberSquare
{
    public static function printSquare(int $min, int $max): int
    {
        for ($row = $min; $row <= $max; $row++) {
            for ($columns = $row; $columns <= $max; $columns++) {
                echo $columns;
            }
            for ($columns = $min; $columns < $row; $columns++) {
                echo $columns;
            }
            echo PHP_EOL;
        }
        return $max;
    }
}

$firstNumber = (int)readline("Enter first number: ");
$secondNumber = (int)readline("Enter second number: ");

echo NumberSquare::printSquare($firstNumber, $secondNumber) . PHP_EOL;

