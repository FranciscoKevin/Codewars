<?php

/*
    DESCRIPTION

    There is an array with some numbers. All numbers are equal except for one. Try to find it!

    findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
    findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55
    It’s guaranteed that array contains at least 3 numbers.

    The tests contain some very huge arrays, so think about performance.
*/

function find_uniq(array $a)
{
    sort($a);
    // If first and second element are equals return the last value of array
    if ($a[0] === $a[1]) {
        return array_pop($a);
    } // Else return the first value
    return $a[0];
}