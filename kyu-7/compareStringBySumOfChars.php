<?php

/*
    DESCRIPTION

    Compare two strings by comparing the sum of their values (ASCII character code).
    For comparing treat all letters as UpperCase
    null/NULL/Nil/None should be treated as empty strings.

    If the string contains other characters than letters, treat the whole string as it would be empty
    Your method should return true, if the strings are equal and false if they are not equal.

    Examples:
    "AD", "BC"  -> equal
    "AD", "DD"  -> not equal
    "gf", "FG"  -> equal
    "zz1", ""   -> equal (both are considered empty)
    "ZzZz", "ffPFF" -> equal
    "kl", "lz"  -> not equal
    null, ""    -> equal
*/

function compare(?string $str1, ?string $str2): bool 
{
    // Checks if the string is alphabetical
    if (ctype_alpha($str1) && ctype_alpha($str2)) {
        // True => return a string uppercase
        $str1 = strtoupper($str1);
        $str2 = strtoupper($str2);
    } else {
        // False => return an empty string 
        $str1 = "";
        $str2 = "";
    }
    // Return true if the sums of array ($str1, $str2) are equals
    return array_sum(array_map("ord", str_split($str1))) == array_sum(array_map("ord", str_split($str2)));
}