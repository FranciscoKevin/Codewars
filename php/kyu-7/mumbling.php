<?php

/*
    DESCRIPTION
    This time no story, no theory. The examples below show you how to write function accum:

    Examples:
    accum("abcd") -> "A-Bb-Ccc-Dddd"
    accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
    accum("cwAt") -> "C-Ww-Aaa-Tttt"
    The parameter of accum is a string which includes only letters from a..z and A..Z.
*/

function accum(string $s): string {

    //Transform string in an array
    $splitString = str_split($s);
    foreach ($splitString as $key => $value) {
        //Push Uppercase value and repeat the value in Lowercase
        $array[] = strtoupper($value) . str_repeat(strtolower($value), $key);
    }
    //Transform array[] to string with separator
    return implode('-', $array);
}