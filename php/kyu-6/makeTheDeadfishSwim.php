<?php

/*
    DESCRIPTION

    Write a simple parser that will parse and run Deadfish.

    Deadfish has 4 commands, each 1 character long:

    i increments the value (initially 0)
    d decrements the value
    s squares the value
    o outputs the value into the return array
    Invalid characters should be ignored.

    parse("iiisdoso") => [ 8, 64 ]
*/

function parse(string $data): array
{
  $result = [];
  $number = 0;
  
  for($i = 0; $i < strlen($data); $i++) {
    switch($data[$i]) {
        case "i":
        $number++;
        break;
    case "s":
        $number = pow($number, 2);
        break;
    case "d":
        $number--;
        break;
    case "o":
        array_push($result, $number);
        break;
    default:
        break;
    }
  }
  return $result;
}