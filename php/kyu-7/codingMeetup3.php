<?php

/*
    DESCRIPTION

    You will be given an array of objects (associative arrays in PHP) representing data about developers who have signed up to attend the next coding meetup that you are organising.

    Your task is to return:
    true if at least one Ruby developer has signed up; or
    false if there will be no Ruby developers.

    For example, given the following input array:
    $list1 = [
    [
        "first_name" => "Emma",
        "last_name" => "Z.",
        "country" => "Netherlands",
        "continent" => "Europe",
        "age" => 29,
        "language" => "Ruby"
    ],
    [
        "first_name" => "Piotr",
        "last_name" => "B.",
        "country" => "Poland",
        "continent" => "Europe",
        "age" => 128,
        "language" => "JavaScript"
    ],
    ];
    your function should return true.

    Notes:
    The input array will always be valid and formatted as in the example above.
*/

function is_ruby_coming(array $list): bool 
{
    foreach ($list as $value) {
        if($value["language"] == "Ruby") {
            return true;
        }
    }
    return false;
}