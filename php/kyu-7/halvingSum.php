<?php

/*
    DESCRIPTION

    Task
    Given a positive integer n, calculate the following sum:
    n + n/2 + n/4 + n/8 + ...
    All elements of the sum are the results of integer division.

    Example:
    25  =>  25 + 12 + 6 + 3 + 1 = 47
*/

function halvingSum(int $n): int
{
    $somme = $n;

    while($n >= 1) {
        $n = floor($n / 2);
        $somme += $n;
    }
    return intval($somme);
}