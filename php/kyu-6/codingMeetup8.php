<?php

/*
    DESCRIPTION
    You will be given a sequence of objects (associative arrays in PHP) representing data about developers who have signed up to attend the next coding meetup that you are organising.

    Your task is to return:
    true if all of the following continents / geographic zones will be represented by at least one developer: 'Africa', 'Americas', 'Asia', 'Europe', 'Oceania'.
    false otherwise.

    For example, given the following input array:
    $list1 = [
    [
        "first_name" => "Fatima",
        "last_name" => "A.",
        "country" => "Algeria",
        "continent" => "Africa",
        "age" => 25,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Agustin",
        "last_name" => "M.",
        "country" => "Chile",
        "continent" => "Americas",
        "age" => 37,
        "language" => "C"
    ],
    [
        "first_name" => "Jing",
        "last_name" => "X",
        "country" => "China",
        "continent" => "Asia",
        "age" => 39,
        "language" => "Ruby"
    ],
    [
        "first_name" => "Laia",
        "last_name" => "P.",
        "country" => "Andorra",
        "continent" => "Europe",
        "age" => 55,
        "language" => "Ruby"
    ],
    [
        "first_name" => "Oliver",
        "last_name" => "Q.",
        "country" => "Australia",
        "continent" => "Oceania",
        "age" => 65,
        "language" => "PHP"
    ]
    ];
    your function should return true as there is at least one developer from the required 5 geographic zones.

    Notes:
    The input array and continent names will always be valid and formatted as in the list above for example 'Africa' will always start with upper-case 'A'.
*/

function all_continents(array $a): bool 
{
    return count(array_unique(array_column($a, "continent"))) == 5;
}