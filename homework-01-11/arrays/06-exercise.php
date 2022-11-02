<?php

$words = [
    'coding',
    'codelex',
    'programming',
    'index',
    'function',
    'variable',
    'loops'
];

$word = $words[array_rand($words)];
$letters = str_split($word);
$correctWord = str_split(str_repeat('_', strlen($word)));

echo implode('_', $correctWord);
echo PHP_EOL;

$guesses = 0;
$maxGuesses = strlen($word) + 3;
$missedLetters = [];

while ($guesses <= $maxGuesses && in_array('_', $correctWord)) {
    $letter = readline('Enter letter: ');
    $letterPositions = array_keys($letters, $letter);

    if (count($letterPositions) > 0) {
        foreach ($letterPositions as $position) {
            $correctWord[$position] = $letter;
        }
    } elseif ($letterPositions == null) {
        $missedLetters []= $letter;
    }
    echo "Misses: " . implode(", ", $missedLetters) . PHP_EOL;
    $guesses++;

    echo implode('', $correctWord);
    echo PHP_EOL;
}

echo in_array('_', $correctWord) ? "You loose! The correct word was: ". $word : "You win!";
?>