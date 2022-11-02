<?php

$input = (string) readline("Enter your text: ");
$text = strtolower($input);
$output = '';

$digits = [];

//foreach ($digits as $digit){
//    echo $digit;
//}

for ($i = 0; $i < strlen($input); $i++)
{
//    $text .= $digit;
    if ($input == 'a') {
        echo 2;
    } elseif ($input == 'b') {
        echo 22;
    } elseif ($input = 'c') {
        echo 222;
    } elseif ($input = 'd') {
        echo 3;
    } elseif ($input = 'e') {
        echo 33;
    } elseif ($input = 'f') {
        echo 333;
    } elseif ($input = 'g') {
        echo 4;
    } elseif ($input = 'h') {
        echo 44;
    } elseif ($input = 'i') {
        echo 444;
    } elseif ($input = 'j') {
        echo 5;
    } elseif ($input = 'k') {
        echo 55;
    } elseif ($input = 'l') {
        echo 555;
    } elseif ($input = 'm') {
        echo 6;
    } elseif ($input = 'n') {
        echo 66;
    } elseif ($input = 'o') {
        echo 666;
    } elseif ($input = 'p') {
        echo 7;
    } elseif ($input = 'r') {
        echo 77;
    } elseif ($input = 's') {
        echo 777;
    } elseif ($input = 'q') {
        echo 7777;
    } elseif ($input = 't') {
        echo 8;
    } elseif ($input = 'u') {
        echo 88;
    } elseif ($input = 'v') {
        echo 888;
    } elseif ($input = 'w') {
        echo 9;
    } elseif ($input = 'x') {
        echo 99;
    } elseif ($input = 'y') {
        echo 999;
    } elseif ($input = 'z') {
        echo 9999;
    } else {
        echo "Invalid";
    }
//    $i++;
    $output .= $text;
}
//echo explode('', $text);
//var_dump($output);
echo $output;

//echo implode('', $digits);
//echo implode(' ',$output);
/**
 * switch (strtoupper($input)) {
case 'A':case 'B':case 'C':
$digit =  2;
break;
case 'D':case 'E':case 'F':
$digit =  3;
break;
case 'G':case 'H':case 'I':
$digit =  4;
break;
case 'J':case 'K':case 'L':
$digit =  5;
break;
case 'M':case 'N':case 'O':
$digit =  6;
break;
case 'P':case 'R':case 'S':case 'Q':
$digit =  7;
break;
case 'T':case 'U':case 'V':
$digit =  8;
break;
case 'W':case 'X':case 'Y':case 'Z':
$digit =  9;
break;
default:
echo 'Invalid';
}
 */
/**
 *     $alphabet = $text[$i];
if ($alphabet == 'a' || $alphabet == 'b' || $alphabet == 'c') {
$digit = 2;
} elseif ($alphabet == 'd' || $alphabet == 'e' || $alphabet == 'f') {
$digit = 3;
} elseif ($alphabet == 'g' || $alphabet == 'h' || $alphabet == 'i') {
$digit = 4;
} elseif ($alphabet == 'j' || $alphabet == 'k' || $alphabet == 'l') {
$digit = 5;
} elseif ($alphabet == 'm' || $alphabet == 'n' || $alphabet == 'o') {
$digit = 6;
} elseif ($alphabet == 'p' || $alphabet == 'r' || $alphabet == 's' || $alphabet == 'Q') {
$digit = 7;
} elseif ($alphabet == 't' || $alphabet == 'u' || $alphabet == 'v') {
$digit = 8;
} elseif ($alphabet == 'w' || $alphabet == 'x' || $alphabet == 'y' || $alphabet == 'Z'){
$digit = 9;
} else {
 */