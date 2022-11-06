<?php

function countingLetters (string $first, string  $second): string
{
    $sentence = $first . "." . $second;
    $sentenceLength = strlen($sentence);
    $output = 0;

    if ($sentenceLength <= 30) {
        $output = 30 - $sentenceLength;
    }

    $dots = "";
    for ($i = 0; $i <= $output; $i++) {
        $dots .= ".";
    }
    return $first . $dots . $second;
}

$firstWord = (string)readline("Enter first word: \n");
echo $firstWord . PHP_EOL;
$secondWord = (string)readline("Enter second word: \n");
echo $secondWord . PHP_EOL;
echo countingLetters($firstWord, $secondWord);
