<?php

/*
    DESCRIPTION

    Given a string of digits, you should replace any digit below 5 with '0' 
    and any digit 5 and above with '1'. Return the resulting string.

    Note: input will never be an empty string
*/

function fake_bin(string $s): string {
  
    $array1 = [5, 6, 7, 8, 9];
    $array2 = [1, 2, 3, 4];
    
    return str_replace($array1, 1, str_replace($array2, 0, $s));
    
}