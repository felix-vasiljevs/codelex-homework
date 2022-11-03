<?php

$input = (int) readline("Enter number: ");

switch ($input) {
    case 0:
        echo "Sunday" . "\n";
        break;
    case 1:
        echo "Monday" . "\n";
        break;
    case 2:
        echo "Tuesday" . "\n";
        break;
    case 3:
        echo "Wednesay" . "\n";
        break;
    case 4:
        echo "Thursday" . "\n";
        break;
    case 5:
        echo "Friday" . "\n";
        break;
    case 6:
        echo "Saturday" . "\n";
        break;
    default:
        echo "Not a valid day" . "\n";
}