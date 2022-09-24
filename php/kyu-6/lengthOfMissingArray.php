<?php
/*
    DESCRIPTION

    You get an array of arrays.
    If you sort the arrays by their length, you will see, that their length-values are consecutive.
    But one array is missing!

    You have to write a method, that return the length of the missing array.

    Example:
    [[1, 2], [4, 5, 1, 1], [1], [5, 6, 7, 8, 9]] --> 3

    If the array of arrays is null/nil or empty, the method should return 0.

    When an array in the array is null or empty, the method should return 0 too!
    There will always be a missing element and its length will be always between the given arrays.

    Have fun coding it and please don't forget to vote and rank this kata! :-)
*/

function getLengthOfMissingArray(array $arrayOfArrays): int 
{
    if (!$arrayOfArrays || $arrayOfArrays === 0) return 0;

    $arrayLength = array_map("count", $arrayOfArrays);
    $compareArray = range(min($arrayLength), max($arrayLength));

    return current(array_values(array_diff($compareArray, $arrayLength)));
}
