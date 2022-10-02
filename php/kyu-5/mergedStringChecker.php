<?php

/*
    DESCRIPTION

    t a job interview, you are challenged to write an algorithm to check if a given string, s, can be formed from two other strings, part1 and part2.

    The restriction is that the characters in part1 and part2 should be in the same order as in s.

    The interviewer gives you the following example and tells you to figure out the rest from the given test cases.

    For example

    'codewars' is a merge from 'cdw' and 'oears':
    s:  c o d e w a r s   = codewars
    part1:  c   d   w         = cdw
    part2:    o   e   a r s   = oears
*/

function isMerge(string $word, string $part1, string $part2): bool 
{
    if (sortTheString($word) !== sortTheString($part1 . $part2)) return false;

    if (canBeMerged($word, $part1) && canBeMerged($word, $part2)) return true;
    return false;
}

  /**
   * Trie la chaine de caractère dans l'ordre alphabétique
   *
   * @param string $string
   * @return string
   */
  function sortTheString(string $string): string {
      $sortString = str_split($string);
      sort($sortString);
      return implode($sortString);
  }

  /**
   * Cherche si la la position numérique de l'occurrence est existante
   *
   * @param string $s
   * @param string $part
   * @return boolean
   */
  function canBeMerged(string $s, string $part): bool {
      $number = 0;
      foreach (str_split($part) as $value) {
          $number = strpos($s, $value, $number);
          if ($number === false) return false;
      }
      return true;
  }