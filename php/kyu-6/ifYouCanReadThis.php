<?php

/*
    DESCRIPTION

    Task
    You'll have to translate a string to Pilot's alphabet (NATO phonetic alphabet).

    Input:
    If, you can read?

    Output:
    India Foxtrot , Yankee Oscar Uniform Charlie Alfa November Romeo Echo Alfa Delta ?

    Note:
    There are preloaded dictionary you can use, named NATO
    The set of used punctuation is ,.!?.
    Punctuation should be kept in your return string, but spaces should not.
    Xray should not have a dash within.
    Every word and punctuation mark should be seperated by a space ' '.
    There should be no trailing whitespace
    Although the proper alphabet for j is Juliett you have to use Juliet here
*/


function to_nato(string $words): string
{
    $nato = [
    'a' => 'Alfa ',
    'b' => 'Bravo ',
    'c' => 'Charlie ',
    'd' => 'Delta ',
    'e' => 'Echo ',
    'f' => 'Foxtrot ',
    'g' => 'Golf ',
    'h' => 'Hotel ',
    'i' => 'India ',
    'j' => 'Juliet ',
    'k' => 'Kilo ',
    'l' => 'Lima ',
    'm' => 'Mike ',
    'n' => 'November ',
    'o' => 'Oscar ',
    'p' => 'Papa ',
    'q' => 'Quebec ',
    'r' => 'Romeo ',
    's' => 'Sierra ',
    't' => 'Tango ',
    'u' => 'Uniform ',
    'v' => 'Victor ',
    'w' => 'Whiskey ',
    'x' => 'Xray ',
    'y' => 'Yankee ',
    'z' => 'Zulu ',
    ' ' => '',
    '!' => '! ',
    '.' => '. ',
    ',' => ', ',
    '?' => '? '
    ];

    $words = strtolower($words);
    return trim(strtr($words, $nato));
}