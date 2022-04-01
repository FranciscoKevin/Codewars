<?php

/*
    DESCRIPTION

    Let's create some scrolling text!
    Your task is to complete the function which takes a string, and returns an array with all possible rotations of the given string, in uppercase.

    Example
    scrollingText("codewars") should return:

    [ "CODEWARS",
    "ODEWARSC",
    "DEWARSCO",
    "EWARSCOD",
    "WARSCODE",
    "ARSCODEW"
    "RSCODEWA",
    "SCODEWAR" ]
*/

function scrollingText(string $text): array 
{
    for ($i = 0; $i < strlen($text); $i++) {
        //Concat string : first => ABC, secondth => BC + A, third => C + AB
        $arrayText[] = strtoupper(substr($text, $i) . substr($text, 0, $i));
    }
    return $arrayText;
}