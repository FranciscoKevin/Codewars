<?php

/*
    DESCRIPTION

    Simple, given a string of words, return the length of the shortest word(s).

    String will never be empty and you do not need to account for different data types.
*/

function findShort(string $str): int
{
    // Transform string to array
    $str = explode(" ", $str);
    // Take first key in array
    $firstWord = $str[0];

    foreach ($str as $value) {
    // Compares the length of the words in the array with first key
        if (strlen($value) < strlen($firstWord)) {
            $firstWord = $value;
        }
    } 
    return strlen($firstWord);
}