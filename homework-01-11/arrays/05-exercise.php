<?php

$playGround = [
    [' ', ' ', ' '],  //  0
    [' ', ' ', ' '],  //  1
    [' ', ' ', ' ']   //  2
//        0    1    2
];

$combinations = [
//  horizontal
    [[0, 0], [0, 1], [0, 2]],
    [[1, 0], [1, 1], [1, 2]],
    [[2, 0], [2, 1], [2, 2]],
//  vertical
    [[0, 0], [1, 0], [2, 0]],
    [[0, 1], [1, 1], [2, 1]],
    [[0, 2], [1, 2], [2, 2]],
//  diagonal
    [[0, 0], [1, 1], [2, 2]],
    [[0, 2], [1, 1], [2, 0]]
];

function displayBoard(array $board)
{
    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]}  \n";
    echo "---+---+---\n";
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]}  \n";
    echo "---+---+---\n";
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]}  \n";
}

echo "Let the game begin!\n";

displayBoard($playGround);

$playerA = 'X';
$playerB = 'O';
$turns = 0;

$currentPlayer = $playerA;

while (true)
{
    $playerChoice = readline("\n '{$currentPlayer}', choose your location (row, column).\n");
    [$x, $y] = explode(' ', $playerChoice);

    if ($x == null || $y == null) {
        displayBoard($playGround);
        echo "\nInvalid input. Enter your location with numbers with spaces. (0 2)\n";
        continue;
    }

    if ($playGround[$x][$y]  == ' '){
        $playGround[$x][$y] = $currentPlayer;
    } else {
        displayBoard($playGround);
        echo "\nThis cell is already filled. Please, choose another cell.\n";
        continue;
    }

    $turns++;

    echo PHP_EOL;
    displayBoard($playGround);

    foreach ($combinations as $combination) {
        $conditionCounter = 0;

        foreach ($combination as $position) {
            [$x, $y] = $position;
            if ($playGround[$x][$y] !== $currentPlayer) {
                break;
            }
            $conditionCounter++;
        }

        if ($conditionCounter == 3) {
            echo "\n Player {$currentPlayer} wins!\n";
            exit;
        }
    }

//    Game is a tie, exit the game
    if ($turns === 9) {
        echo "Tie!";
        exit;
    }

//    Change player turns
    $currentPlayer = $currentPlayer === $playerA ? $playerB : $playerA;
}
?>