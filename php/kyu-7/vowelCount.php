<?php

/*
    DESCRIPTION

    Return the number (count) of vowels in the given string.
    We will consider a, e, i, o, u as vowels for this Kata (but not y).

    The input string will only consist of lower case letters and/or spaces.
*/

function getCount(string $str): int {
    //Create array vowels
    $arrayVowels = ["a", "e", "i", "o", "u"];
    $vowelsCount = 0;
    //Loop on string
    for ($i = 0; $i < strlen($str); $i++) {
        //Check if in array if vowel exist and increments $vowelsCount
        if(in_array($str[$i], $arrayVowels)) {
            $vowelsCount++;
        } 
    }
    return $vowelsCount;
}