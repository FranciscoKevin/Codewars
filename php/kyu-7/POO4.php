<?php

/*
    DESCRIPTION

    Task
    
    Note: If in doubt, please refer to the first 3 Kata in this Series.
    In the unlikely case that a certain topic in this Task is not covered by any of the first 3 Kata in this Series, you are strongly encouraged to conduct your own research.

    - Define a class called Person.
    - Since all Persons are of the species "Homo Sapiens", make that a class constant
    - Declare (but do not define yet) the 3 class properties $name, $age and $occupation. *They should all be *public.
    - Define a class constructor which accepts exactly three arguments in the following order: $name, $age, $occupation and store them in their respective properties.
    - Define a method called introduce which accepts no arguments and returns a string of the format "Hello, my name is NAME_HERE"
    - Define another method called describe_job which accepts no arguments and returns a string of the format "I am currently working as a(n) OCCUPATION_HERE" (NOTE: The "a(n)" part of the string is literal which means you do not have to create conditionals to check whether "a" or "an" should be used.)
    - When extraterrestrials arrive on Earth, all Persons are expected to greet them in exactly the same way. Therefore, define a static class method called greet_extraterrestrials which accepts an argument $species and returns a string of the format "Welcome to Planet Earth SPECIES_NAME_HERE!"
*/

class Person
{
    const species = 'Homo Sapiens';

    public function __construct(public string $name, public string $age, public string $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function introduce(): string
    {
        return "Hello, my name is " . $this->name;
    }

    public function describe_job(): string
    {
        return "I am currently working as a(n) " . $this->occupation;
    }

    public static function greet_extraterrestrials(string $species): string
    {
        return "Welcome to Planet Earth " . $species ."!";
    }
}