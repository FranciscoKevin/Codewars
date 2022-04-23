<?php
/*
    DESCRIPTION

    A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward as forward.
    Examples of numerical palindromes are:
    2332
    110011
    54322345

    For this kata, single digit numbers will not be considered numerical palindromes.
    For a given number num, write a function to test if the number contains a numerical palindrome or not and return a boolean (true if it does and false if does not).
    Return "Not valid" if the input is not an integer or is less than 0.

    Note: Palindromes should be found without permutating num.
*/

function palindrome($num) 
{
  return is_int($num) && $num > 0 ? boolval(preg_match('/(.).?\1/', $num)) : 'Not valid';
}