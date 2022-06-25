<?php

/*
    DESCRIPTION

    Build a pyramid-shaped tower given a positive integer number of floors. A tower block is represented with "*" character.

    For example, a tower with 3 floors looks like this:
    [
    "  *  ",
    " *** ", 
    "*****"
    ]

    And a tower with 6 floors looks like this:
    [
    "     *     ", 
    "    ***    ", 
    "   *****   ", 
    "  *******  ", 
    " ********* ", 
    "***********"
    ]
*/

function tower_builder(int $n): array 
{
    $pyramid = [];

    for($i = 1; $i <= $n; $i++){
        $pyramid[] = str_repeat(" ", $n - $i) . str_repeat("*", ($i - 1) * 2 + 1) . str_repeat(" ", $n - $i);
    }
    return $pyramid;
}
