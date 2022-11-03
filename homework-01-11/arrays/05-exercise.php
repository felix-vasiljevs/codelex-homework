<?php

function display_board($playGround)
{
    $playGround = [
        ['1', '-', '-'],  //  0
        ['-', '-', '-'],  //  1
        ['-', '-', '-']   //  2
//        1    2    3
    ];

    foreach ($playGround as $key => $value) {
        echo implode("| ", $value) . "\n";
//       echo "{$key} => {$value}";
//       print_r($playGround);
    }

    $row = $key;

    $playerX = "X";

    $playGround []= $playerX;

//    return $playGround. "\n";
//    $playGround[1][2] = "O";

//    if ()

//    echo "   |   |   \n";
//    echo "---+---+---\n";
//    echo "   |   |   \n";
//    echo "---+---+---\n";
//    echo "   |   |   \n";
}

display_board(1, 0);


