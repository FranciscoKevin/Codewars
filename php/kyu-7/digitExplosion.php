<?php

/*
    DESCRIPTION

    Given a string made of digits [0-9], return a string where each digit is repeated a number of times equals to its value.

    Examples
    explode("312")

    should return :
    "333122"

    explode("102269")

    should return :
    "12222666666999999999"
*/

function digits_explode(string $str): string 
{
    return str_replace([0,1,2,3,4,5,6,7,8,9], ["",1,22,333,4444,55555,666666,7777777,88888888,999999999], $str);
}