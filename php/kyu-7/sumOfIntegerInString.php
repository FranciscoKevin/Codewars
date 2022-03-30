<?php

/*
    DESCRIPTION

    Your task in this kata is to implement a function that calculates the sum of the integers inside a string. 
    
    For example, in the string "The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog", the sum of the integers is 3635.
*/

function sum_of_integers_in_string(string $string): int {
    // Break the string with only numbers, i use regex ("/[^d]/" only numbers) and make the Sum of numbers
    return array_sum(preg_split("/[^\d]/", $string));
}