<?php

/*
    DESCRIPTION

    Debug the functions
    Should be easy, begin by looking at the code. Debug the code and the functions should work.

    There are three functions: Multiplication (x) Addition (+) and Reverse (!esreveR)
*/

function multi(array $arrayMulti): int {
    return array_product($arrayMulti);
}

function add($arrayAdd): int {
    return array_sum($arrayAdd);
}

function reverse(string $str): string {
    return strrev($str);
}