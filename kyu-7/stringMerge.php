<?php

/*
    DESCRIPTION

    Given two words and a letter, return a single word that's a combination of both words, merged at the point where the given letter first appears in each word. The returned word should have the beginning of the first word and the ending of the second, with the dividing letter in the middle. You can assume both words will contain the dividing letter.

    Examples
    ("hello", "world", "l")       ==>  "held"
    ("coding", "anywhere", "n")   ==>  "codinywhere"
    ("jason", "samson", "s")      ==>  "jasamson"
    ("wonderful", "people", "e")  ==>  "wondeople"
*/

function stringMerge(string $string1, string $string2, string $letter): string
{
    // Returns a substring, ranging from the first occurrence to the end of the string.
    // With true option delete all letters after the first occurrence.
    return stristr($string1, $letter, true) . stristr($string2, $letter);
}