<?php

/*
    DESCRIPTION

    Given an array of integers.

    Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers. 0 is neither positive nor negative.
    If the input array is empty or null, return an empty array.

    Example
    For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65].
*/

function countPositivesSumNegatives($input) {
  
    // Initialize new array with values 0
    $newArray = [0, 0];
    // Variable count positive numbers
    $countPositif = 0;
    
    if (empty($input)) {
        return [];
    }
    // Loop in input[]
    foreach ($input as $value) {
        if ($value > 0) {
            // Increments if positive value 
            $countPositif++;
            $newArray[0] = $countPositif;
        } else {
            // Sums negative value
            $newArray[1] += $value;
        }
    }
    return $newArray;
}