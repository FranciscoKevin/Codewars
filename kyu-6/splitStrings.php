<?php

/*
    DESCRIPTION

    Complete the solution so that it splits the string into pairs of two characters.
    If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').

    Examples:

    * 'abc' =>  ['ab', 'c_']
    * 'abcdef' => ['ab', 'cd', 'ef']
*/

function solution(string $str): array
{
    if (strlen($str) === 0) {
        return [];
    } else if (strlen($str)%2 === 1) {
        $str = $str . '_';
        $str = str_split($str, 2);
    } else {
        $str = str_split($str, 2);
    }
    return $str;
}