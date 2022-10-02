<?php

/*
    DESCRIPTION
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