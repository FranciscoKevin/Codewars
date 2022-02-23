<?php

/*
    DESCRIPTION

    Task
    Note: The lesson provided in this Kata is designed to teach you most, if not all, of the key concepts required to complete the Task in this Kata.
    However, if in doubt, you are strongly encouraged to conduct your own research.

    - Define a class called President using the syntax taught above.
    - Inside the curly braces of the class definition, add a public property called $name and set it equal to the string "Barack Obama".
    - Then, define a public method inside the President class called greet which accepts one argument $name and returns something to the effect of "Hello INSERT_NAME_HERE, my name is Barack Obama, nice to meet you!"
    - Now that you have defined your class, create an instance of that class (called an object) and store it in a variable called $us_president.
    - Store the name of the $us_president into another variable called $president_name.
    - Store the result of calling the greet method of $us_president with the argument "Donald" into the variable $greetings_from_president.
*/

class President 
{
    public string $name = "Barack Obama";

    public function greet(string $name): string
    {
        return "Hello " . $name . ", my name is Barack Obama, nice to meet you!";
    }
}

$us_president = new President;
$president_name = $us_president->name;
$greetings_from_president = $us_president->greet("Donald");