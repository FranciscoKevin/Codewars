<?php
/*
    DESCRIPTION

    You are given an odd-length array of integers, in which all of them are the same, except for one single number.
    Complete the method which accepts such an array, and returns that single different number.

    The input array will always be valid! (odd-length >= 3)

    Examples
    [1, 1, 2] ==> 2
    [17, 17, 3, 17, 17, 17, 17] ==> 3
*/
function stray(array $arr): int
{
  // Read the first key in $arr and compare with the same array
  return array_search(1, array_count_values($arr));
}