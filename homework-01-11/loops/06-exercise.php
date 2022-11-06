<?php

class AsciiFigure
{
    const CONST_INT = 5;
    public static function pyramid (int $number): int
    {
        $sideCount = 20;
        $stars = 8;
        $sideLength = 4;

        for ($i = 1; $i <= $number; $i++) {

            for ($j = 1; $j <= $sideCount - $sideLength * $i; $j++) {
                echo "/";
            }

            for ($t = 1; $t <= $sideCount - $sideLength * $i; $t++) {
                echo "\\";
            }

            for ($k = 1; $k <= $stars * $i - $stars; $k++) {
                echo "*";
            }
            echo PHP_EOL;
        }
        return $number;
    }
}

$selection = (int)readline("Enter number of rows: ");
echo AsciiFigure::pyramid($selection) . PHP_EOL;

