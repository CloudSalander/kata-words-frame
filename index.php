<?php

define('FRAME_CHAR','#');
define('BORDER_PADDING',4);

//TODO: Remember, we should validate EVERY input entry. Not the main purpose of the exercise.
$text_to_print = readline();
printFrame($text_to_print);

function printFrame(string $text_to_print): void {
    $words = explode(" ",$text_to_print);
    $longest_word_length = getLongestWordLength($words);
 }

function getLongestWordLength(array $words): int {
    $size = 0;
    foreach($words as $word) {
        if(strlen($word) > $size) $size = strlen($word);
    }
    return $size;
}


?>