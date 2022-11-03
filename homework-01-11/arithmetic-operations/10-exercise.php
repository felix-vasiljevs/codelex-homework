<?php

$selection = (int) readline("Choose a number for calculation: \n".
    "1. Calculate the Area of a Circle: \n".
    "2. Calculate the Area of a Rectangle:\n".
    "3. Calculate the Area of a Triangle:\n" .
    "3. Calculate the Area of a Triangle:\n".
    "4. Quit.\n".
    "Enter your choice (1-4) : ");
echo PHP_EOL;

if ($selection == 1) {
    $radius = (int) readline("Radius: ");
    if ($radius < 0) {
        echo "Error: Enter a positive number.\n";
        exit;
    }
    echo circle($radius) . PHP_EOL;

} elseif ($selection == 2) {
    $length = (int) readline("Enter length: ");
    $width = (int) readline("Enter width: ");

    if ($length < 0 || $width < 0) {
        echo "Error: Enter a positive number.\n";
    }
    echo rectangle($length, $width) . PHP_EOL;

} elseif ($selection == 3) {
    $base = (int) readline("Base: ");
    $height = (int) readline("Height: ");
    if ($base < 0 || $height < 0) {
        echo "Error: Enter a positive number.\n";
    }
    echo triangle($base, $height) . PHP_EOL;

} elseif ($selection == 4) {
    echo "Quit\n";
} else {
    echo "Error: Choose a number 1-4.";
}

function circle (int $radius): int
{
    return $radius * pi() * 2;
}

function rectangle(int $width, int $length): int
{
  return $width * $length;
}

function triangle (int $base, int $height, float $coefficient =0.5):int
{
    return $base * $height * $coefficient;
}
