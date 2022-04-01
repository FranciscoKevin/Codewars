<?php

/*
    DESCRIPTION

    Task:
    You will be given an array of numbers. 
    You have to sort the odd numbers in ascending order while leaving the even numbers at their original positions.

    Examples:
    - [7, 1]  =>  [1, 7]
    - [5, 8, 6, 3, 4]  =>  [3, 8, 6, 5, 4]
    - [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]  =>  [1, 8, 3, 6, 5, 4, 7, 2, 9, 0]
*/

function sortArray(array $arr): array 
{
    // Retrieve the odd values and sort in ascending order
    $odd = array_filter($arr, function($value){return $value & 1;});
    sort($odd);

    foreach ($arr as $key => $value) {
        if ($value & 1) {
        // replace array values with the first element of $odd
        $arr[$key] = array_shift($odd);
        }
    }
    return $arr;
}