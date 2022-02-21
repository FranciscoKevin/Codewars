<?php

/*
    DESCRIPTION
*/

function all_continents(array $a): bool 
{
    return count(array_unique(array_column($a, "continent"))) == 5;
}