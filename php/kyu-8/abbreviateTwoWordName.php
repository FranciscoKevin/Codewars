<?php

/*
    DESCRIPTION

    Write a function to convert a name into initials. This kata strictly takes two words with one space in between them.
    The output should be two capital letters with a dot separating them.

    It should look like this:
    Sam Harris => S.H
    patrick feeney => P.F
*/

function abbrevName(string $name): string
{
    // Transform string => array
    $array = explode(' ', $name);

    // Return the new string with the first two elements firstname + lastname in uppercase
    return strtoupper($array[0][0]) .'.'. strtoupper($array[1][0]);
}