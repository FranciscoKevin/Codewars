<?php

/*
    DESCRIPTION
*/

function generate(int $length): string 
{
    $binary = "";
    for ($i = 0; $i < $length; $i++) {
        $binary .= rand(0, 1);
    }
    return $binary;
}