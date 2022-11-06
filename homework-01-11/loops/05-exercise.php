<?php

class Piglet {
//    public int $points = 0;
    public static function rollDice (int $sum): int
    {
//        $points = 0;
//        $this->points = $points;
        $sum = 0;
        $randomNumber = rand(1, 6);
        if ($randomNumber == 1) {
            echo "You lost! You got 0 points.\n";
            exit;

        } elseif ($randomNumber > 1) {
            for ($i = 0; $i <= $randomNumber ; $i++){
                $sum += $i;
            }
            echo "You got {$sum} points.\n";
        }
        return true;
    }
}

$rolling = (int)readline("\nWelcome to Piglet!\n" .
"\n     1. Yes!\n" .
"\n     2. No.\n");

if ($rolling == 1) {
    echo Piglet::rollDice($rolling);
        $rollAgain = (int)readline("Roll again?\n" .
        "1. Yes!\n" .
        "2. No\n");
            if ($rollAgain == 1) {
                echo Piglet::rollDice($rolling);
//                continue;
//                echo "You got {$points} points.\n";
            } elseif ($rollAgain == 2) {
                echo "See you soon!";
                exit;
            }
} else {
    echo "See you soon!";
    exit;
}