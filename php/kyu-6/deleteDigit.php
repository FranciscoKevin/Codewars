<?php

/*
    DESCRIPTION

    Given an integer n, find the maximal number you can obtain by deleting exactly one digit of the given number.

    Example:
    For n = 152, the output should be 52;
    For n = 1001, the output should be 101.

    Input/Output
    [input] integer n

    Constraints: 10 ≤ n ≤ 1000000.

    [output] an integer
*/

function deleteDigit(int $n): int
{
    $result = [];
    for($i = 0; $i < strlen($n); $i++) {
        array_push($result, substr_replace($n, "", $i, 1));
    }
    return max($result);
}