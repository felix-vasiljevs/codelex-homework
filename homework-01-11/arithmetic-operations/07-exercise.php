<?php

function getPosition ($fallingTime)
{
    $gravity = -9.81;
    $velocity = 0;
    $x = 0; //initial position

    $position = (0.5 * ($gravity * $fallingTime) * $fallingTime + ($velocity * $fallingTime) + $x);
    return $position . "m";
}

echo getPosition(10). "\n";
