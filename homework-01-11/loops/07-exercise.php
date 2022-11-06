<?php
//  RollRwoDice

class RollTwoDice {
    public static function rollTwo (int $sum)//: int
    {
        $firstDice = rand(1, 6);
        $secondDice = rand(1, 6);
        $sum = $firstDice + $secondDice;

        if ($sum == 9) {
            return "You won! $firstDice + $secondDice = $sum";
        }
        return "Roll more. $firstDice + $secondDice = $sum";
        }
//        return $sum;
    }


echo "Desired sum: 9\n";
$selection = (int)readline("Roll? \n" .
"1. Yes! \n" .
"2. No.");

if ($selection == 1) {
    echo RollTwoDice::rollTwo($selection) . PHP_EOL;

    $rollMore = (int)readline("Roll more? \n" .
                        "1. Yes! \n" .
                        "2. No.");
    if ($rollMore == 1) {
        echo RollTwoDice::rollTwo($selection) . PHP_EOL;
    }

} else {
    exit;
}