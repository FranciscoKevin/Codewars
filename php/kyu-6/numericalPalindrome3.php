<?php

/*
    DESCRIPTION

    A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward as forward.
    Examples of numerical palindromes are:
    2332
    110011
    54322345

    For a given number num, write a function which returns the number of numerical palindromes within each number.
    For this kata, single digit numbers will NOT be considered numerical palindromes.

    Return "Not valid" if the input is not an integer or is less than 0.
*/

function palindrome($num)
{
    if(!is_int($num) || $num < 0) return'Not valid';

    $palindromes = [];
    for($i = 0; $i < strlen($num); $i++) {
        for($j = $i+2; $j <= strlen($num); $j++) {
                $str = substr($num, $i, $j - $i);
            if($str == strrev($str)) array_push($palindromes, $str);
        }
    }
    return count($palindromes);
}