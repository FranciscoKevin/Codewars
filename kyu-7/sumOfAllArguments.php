<?php

/*
    DESCRIPTION

    Write a function that finds the sum of all its arguments.

    exemple:
    sum(1, 2, 3) // => 6
    sum(8, 2) // => 10
    sum(1, 2, 3, 4, 5) // => 15
*/

function sum(): int
{
    //func_get_args => Returns the arguments of a function as an array
    return array_sum(func_get_args());
}