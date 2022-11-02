<?php

function guessTheNumber ($number)
{
    $randomNumber = rand(1, 100);

    if ($number < $randomNumber) {
        echo "Sorry, you're too low. I was thinking of $randomNumber\n";
    } elseif ($number > $randomNumber) {
        echo "Sorry, you're too high. I was thinking of $randomNumber\n";
    } elseif ($number == $randomNumber) {
        echo "You guessed it! The number was $randomNumber What are the odds?!?\n";
    }
}

guessTheNumber(70);

