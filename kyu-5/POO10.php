<?php

/*
    DESCRIPTION

    Task

    Note: The lesson provided in this Kata is designed to teach you most, if not all, of the key concepts required to complete the Task in this Kata. However, if in doubt, you are strongly encouraged to conduct your own research.

    Since there are severe limitations when using Methods #1 and #2 for creating objects on the fly, we will be using Method #3 (Anonymous Classes) in this exercise.

    Using Method #3 (Anonymous Classes), define an object $object_oriented_php with the properties, methods and additional behaviour (N.B. You may have to conduct your own research on how to implement the additional behaviour ;) ) as specified below. Your anonymous class may extend any class you wish and/or implement as many interfaces as you wish, as long as the object $object_oriented_php itself is an instance of an anonymous class. You may also define a class constructor for the anonymous class if necessary.

    Properties
    $description - This should be equal to the string "An amazing PHP Kata Series, complete with 10 top-quality Kata containing a large number of both fixed and random tests, that teaches both the fundamentals of object-oriented programming in PHP (in the first 7 Kata of this Series) and more advanced OOP topics in PHP (in the last 3 Kata of this Series) such as interfaces, abstract classes and even anonymous classes in a way that stimulates critical thinking and encourages independent research"
    $kata_list - This public property should be equal to an ordinary (non-associative) array containing the full names of each of the Kata in this Series in order. So, for example, $object_oriented_php->kata_list[0] === "Object-Oriented PHP #1 - Classes, Public Properties and Methods" and $object_oriented_php->kata_list[5] === "Object-Oriented PHP #6 - Visibility"
    $kata_count - This property should be equal to 10
    $author - This property should be equal to another instance of an Anonymous Class (Method #3) such that its $name is "Donald", its $age is 17, its $gender is "Male" and its $occupation is "Computer Programmer". This particular property should also have a string value of "Donald, aged 17, who is a computer programmer proficient in Javascript and PHP and is a PHP enthusiast" when treated as a string (Hint: It's magic).
    
    Methods
    advertise - This method should receive exactly 1 required argument $name and return a string of the form "Hey NAME_HERE, don't forget to check out this great PHP Kata Series authored by Donald called \"Object-Oriented PHP\""
    get_kata_by_number - This method should accept one argument $kata_number and return the full name of that Kata in this Series. For example, $object_oriented_php->get_kata_by_number(1) === "Object-Oriented PHP #1 - Classes, Public Properties and Methods" and $object_oriented_php->get_kata_by_number(10) === "Object-Oriented PHP #10 - Objects on the Fly [Advanced]". An InvalidArgumentException should be thrown if the provided argument $kata_number is not an integer in the range of 1 to 10 (both inclusive).
    complete - This method should receive no arguments and return the string "Hooray, I've finally completed the entire \"Object-Oriented PHP\" Kata Series!!!"
*/

$object_oriented_php = new class
{
    public $description = "An amazing PHP Kata Series, complete with 10 top-quality Kata containing a large number of both fixed and random tests, that teaches both the fundamentals of object-oriented programming in PHP (in the first 7 Kata of this Series) and more advanced OOP topics in PHP (in the last 3 Kata of this Series) such as interfaces, abstract classes and even anonymous classes in a way that stimulates critical thinking and encourages independent research";
    public $kata_list = [
        "Object-Oriented PHP #1 - Classes, Public Properties and Methods",
        "Object-Oriented PHP #2 - Class Constructors and \$this",
        "Object-Oriented PHP #3 - Class Constants and Static Methods",
        "Object-Oriented PHP #4 - People, people, people (Practice)",
        "Object-Oriented PHP #5 - Classical Inheritance",
        "Object-Oriented PHP #6 - Visibility",
        "Object-Oriented PHP #7 - The \"Final\" Keyword",
        "Object-Oriented PHP #8 - Interfaces [Advanced]",
        "Object-Oriented PHP #9 - Abstract Classes [Advanced]",
        "Object-Oriented PHP #10 - Objects on the Fly [Advanced]"
    ];
    public $kata_count = 10;
    public $author;
  
    public function __construct()
    {
        $this->author = new class
        {
            public $name = "Donald" ;
            public $age = 17;
            public $gender = "Male";
            public $occupation = "Computer Programmer";
            public function __toString() 
            {
                return "Donald, aged 17, who is a computer programmer proficient in Javascript and PHP and is a PHP enthusiast";
            } 
        };
    }

    public function advertise($name): string
    {
        return "Hey ".$name.", don't forget to check out this great PHP Kata Series authored by Donald called \"Object-Oriented PHP\"";
    }

    public function get_kata_by_number($kata_number): string
    {
        if (!is_int($kata_number) || $kata_number < 1 || $kata_number > 10) {
            throw new InvalidArgumentException;
        }
        return $this->kata_list[$kata_number - 1];
    }

    public function complete(): string
    {
        return "Hooray, I've finally completed the entire \"Object-Oriented PHP\" Kata Series!!!";
    }

    public function __toString()
    {
        return $this->description;
    }
};