<?php

/*
    DESCRIPTION

    Groups of characters decided to make a battle. Help them to figure out which group is more powerful.
    Create a function that will accept 2 strings and return the one who's stronger.

    Rules:
    Each character have its own power: A = 1, B = 2, ... Y = 25, Z = 26
    Strings will consist of uppercase letters only
    Only two groups to a fight.
    Group whose total power (A + B + C + ...) is bigger wins.
    If the powers are equal, it's a tie.

    Examples:
    battle("ONE", "TWO"); // => "TWO"`
    battle("ONE", "NEO"); // => "Tie!"
*/

function battle(string $x, string $y): string
{
    $alphabet = [" ","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $valueX = 0;
    $valueY = 0;

    $arrayX = str_split($x);
    $arrayY = str_split($y);

    foreach ($arrayX as $value) {
        $valueX += array_search($value, $alphabet);
    }

    foreach ($arrayY as $value) {
        $valueY += array_search($value, $alphabet);
    }

    if ($valueX > $valueY) {
        return $x;
    } else if($valueX == $valueY) {
        return "Tie!";
    } else {
        return $y;
    }
}