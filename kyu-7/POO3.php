<?php

/*
    DESCRIPTION

    Task

    Note: The lesson provided in this Kata is designed to teach you most, if not all, of the key concepts required to complete the Task in this Kata. 
    However, if in doubt, you are strongly encouraged to conduct your own research.

    - Copy your working solution to the first Kata of this series and paste it here (you may want to complete that first if you haven't already done so).
    - Rename that class to CurrentUSPresident.
    - Convert all of the class properties into class constants and all of the class methods into static methods using the syntax taught in the lesson.
    - You can safely remove the code where an instance of the President class is created.
*/

class CurrentUSPresident 
{
  const name = "Barack Obama";

  public static function greet(string $name): string
  {
      return "Hello " . $name . ", my name is Barack Obama, nice to meet you!";
  }
}
$president_name = CurrentUSPresident::name;
$greetings_from_president = CurrentUSPresident::greet("Donald");