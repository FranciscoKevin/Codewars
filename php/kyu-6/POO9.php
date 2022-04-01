<?php

/*
    DESCRIPTION

    Task
    Note: The lesson provided in this Kata is designed to teach you most, if not all, of the key concepts required to complete the Task in this Kata.
    However, if in doubt, you are strongly encouraged to conduct your own research.

    Define the following classes and follow the instructions carefully to pass the tests and complete this Kata.

    Person
    This class should be declared abstract.

    Properties
    Every person should have a $name, $age and $gender. All of these properties should be declared public.

    Constructor
    The class constructor should receive three required arguments in the following order: $name, $age, $gender and should set their respective properties.

    Methods
    introduce - Every person knows how to introduce himself/herself in some way (well, maybe except for babies but we won't be dealing with them in this Kata), but different types of people can introduce themselves in very different ways so there is no universal implementation of the introduce method. Therefore, declare this method abstract. This method should receive no arguments.
    greet - This method should receive exactly one required argument $name and return a string of the form "Hello NAME_HERE".
    Child
    Since a Child "is a" Person, the Child class should inherit from the Person class. Furthermore, since a Child has infinite possibilities, it is impossible to further categorise children into different categories (by creating child classes) so the Child class should be declared final to prevent further inheritance.

    Properties
    The Child class should have already inherited the following public properties from the Person class:

    $name
    $age
    $gender
    Furthermore, the Child class should also have an additional public property $aspirations which is expected to be an array of strings (but no type checking is required).

    Constructor
    The class constructor should receive four required arguments in the following order: $name, $age, $gender, $aspirations and set their respective properties correctly. No error checking is required.

    Methods
    introduce - This public method should receive no arguments and return a string of the form "Hi, I'm NAME_HERE and I am AGE_HERE years old".
    greet - This public method should accept exactly one required argument $name and return a string of the form "Hi NAME_HERE, let's play!".
    say_dreams - This public method should accept no arguments and return a string of the form "I would like to be a(n) ASPIRATIONS_HERE when I grow up." The exact behaviour of this method is demonstrated below:
    // Aspirations = ["Doctor"]
    $child->say_dreams(); // "I would like to be a(n) Doctor when I grow up."

    // Aspirations = ["Lawyer", "Teacher"];
    $child->say_dreams(); // "I would like to be a(n) Lawyer or Teacher when I grow up."

    // Aspirations = ["Teacher", "Lawyer", "Police Officer"];
    $child->say_dreams(); // "I would like to be a(n) Teacher, Lawyer or Police Officer when I grow up."

    // Aspirations = ["teacher", "lawyer", "doctor", "police officer", "owner of a pet shop"];
    $child->say_dreams(); // "I would like to be a(n) teacher, lawyer, doctor, police officer or owner of a pet shop when I grow up."
    N.B. Preloaded for you is a function say_list which receives an array as its only argument and has the behaviour demonstrated below which could come in handy when implementing Child::say_dreams.

    say_list(["Apple"]) // => "Apple"
    say_list(["Apple", "Orange"]) // => "Apple or Orange"
    say_list(["Apple", "Banana", "Dragonfruit", "Kiwi"]) // "Apple, Banana, Dragonfruit or Kiwi"
    ComputerProgrammer
    A ComputerProgrammer "is a" Person. Since there can be many different types of ComputerProgrammer (e.g. Web Developer, Software Engineer), we want to be able to extend this class when necessary so it should not be declared final.

    Properties
    The ComputerProgrammer class should have the following public properties:

    $name
    $age
    $gender
    $occupation - This should always be equal to "Computer Programmer"
    Note that some of the properties are already declared in the parent class so there is no need to redeclare them.

    Constructor
    The class constructor for this class is identical to that of its parent class.

    Methods
    introduce - This public method should accept no arguments and return a string of the form "Hello, my name is NAME_HERE, I am AGE_HERE years old and I am a(n) OCCUPATION_HERE"
    greet - This public method should accept an argument $name and return a string of the form "Hello OTHER_NAME_HERE, I'm OWN_NAME_HERE, nice to meet you".
    advertise - This public method should return the string "Don't forget to check out my coding projects"
*/

abstract class Person
{
    public $name;
    public $age;
    public $gender;

    public function __construct(string $name, string $age, string $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    abstract public function introduce();

    public function greet($name): string
    {
        return "Hello ".$name;
    }
}

final class Child extends Person
{
    public $aspirations;

    public function __construct(string $name, string $age, string $gender, array $aspirations)
    {
        parent::__construct($name, $age, $gender);
        $this->aspirations = $aspirations;
    }

    public function introduce(): string
    {
        return "Hi, I'm ".$this->name." and I am ".$this->age." years old";
    }

    public function greet($name): string
    {
        return "Hi ".$name.", let's play!";
    }

    public function say_dreams(): string
    {
        return "I would like to be a(n) ".say_list($this->aspirations)." when I grow up.";
    }
}

class ComputerProgrammer extends Person
{
    public $occupation;

    public function __construct($name, $age, $gender)
    {
        parent::__construct($name, $age, $gender);
        $this->occupation = "Computer Programmer";
    }

    public function introduce(): string
    {
        return "Hello, my name is ".$this->name.", I am ".$this->age." years old and I am a(n) ".$this->occupation;
    }

    public function greet($name): string
    {
        return "Hello ".$name.", I'm ".$this->name.", nice to meet you";
    }

    public function advertise(): string
    {
        return "Don't forget to check out my coding projects";
    }
}