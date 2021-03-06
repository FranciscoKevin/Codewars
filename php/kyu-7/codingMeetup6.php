<?php

/*
    DESCRIPTION

    You will be given an array of objects (associative arrays in PHP) representing data about developers who have signed up to attend the next coding meetup that you are organising.

    Your task is to return either:
    true if all developers in the list code in the same language; or
    false otherwise.

    For example, given the following input array:
    $list1 = [
    [
        "first_name" => "Daniel",
        "last_name" => "J.",
        "country" => "Aruba",
        "continent" => "Americas",
        "age" => 42,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Kseniya",
        "last_name" => "T.",
        "country" => "Belarus",
        "continent" => "Europe",
        "age" => 22,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Hanna",
        "last_name" => "L.",
        "country" => "Hungary",
        "continent" => "Europe",
        "age" => 65,
        "language" => "JavaScript"
    ]
    ];
    your function should return true.

    Notes:
    The strings representing a given language will always be formatted in the same way (e.g. 'JavaScript' will always be formatted will upper-case 'J' and 'S'
    The input array will always be valid and formatted as in the example above.
*/

function is_same_language(array $arr): bool 
{
    $language = $arr[0]["language"];
    foreach ($arr as $value) {
        if ($value["language"] !== $language) {
            return false;
        }
    }
    return true;
}