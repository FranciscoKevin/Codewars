<?php

/*
    DESCRIPTION

    Task
    
    Note: The lesson provided in this Kata is designed to teach you most, if not all, of the key concepts required to complete the Task in this Kata.
    However, if in doubt, you are strongly encouraged to conduct your own research.

    Copy and paste a working solution from Kata #4 of this Series
    Since all humans greet extraterrestrials in the exact same way, declare the greet_extraterrestrials static method as final.
    Since all people also describe their jobs in the same way, make the describe_job method final too.
    Declare and define a new class, ComputerProgrammer, which "is a" Person ;)
    In the ComputerProgrammer class, override the introduce method such that it returns a string of the format "Hello, my name is NAME_HERE and I am a OCCUPATION_HERE"
*/

class Person
{
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

    final public function describe_job(): string
    {
        return "I am currently working as a(n) " . $this->occupation;
    }

    final public static function greet_extraterrestrials(string $species): string
    {
        return "Welcome to Planet Earth " . $species ."!";
    }
}

class ComputerProgrammer extends Person
{
    public function introduce(): string
    {
        return parent::introduce() . " and I am a " .$this->occupation;
    }
}