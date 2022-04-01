<?php

/*
    DESCRIPTION 

    Task
    Note: The lesson provided in this Kata is designed to teach you most, if not all, of the key concepts required to complete the Task in this Kata.
    However, if in doubt, you are strongly encouraged to conduct your own research.

    In Kata #4 of this Series, we created a Person class which modelled a real-life person in PHP. However, there were a few vulnerabilities in the way we wrote the class in that Kata.
    For example, the constructor of that class accepted 3 arguments: $name, $age and $occupation in that order and set the correct properties respectively. However, the constructor did not do any error checking. 
    It naturally assumed that the inputs passed in would be valid, e.g. $name and $occupation would always be a string and $age would always be a non-negative integer. 
    Furthermore, since all the properties were public, even if all the inputs passed into the constructor were valid, the properties could later be accidentally changed into invalid values which would cause a number of problems if the code were to be used in real life. Therefore, in this Kata, we will aim to improve the Person class we defined in Kata #4 to make it less prone to such human errors.

    Copy and paste a working solution from Kata #4 of this Series (you may want to complete that first if you haven't done so already).
    You may safely remove the class constant and all class methods (except the class constructor) as these will not be tested in this Kata (Optional).
    Change the visibilites of all properties into protected visibility.
    Since all valid names must be strings, throw an InvalidArgumentException with the message "Name must be a string!" if the $name argument of the class constructor is not a string.
    Since all valid ages must be non-negative integers, throw an InvalidArgumentException with the message "Age must be a non-negative integer!" if the $age argument of the class constructor is not a non-negative integer.
    Since all valid occupations must be strings, throw an InvalidArgumentException with the message "Occupation must be a string!" if the $occupation argument of the class constructor is not a string.
    Since the $name, $age and $occupation properties of the Person class are now protected, any attempt at directly accessing them from outside the class will result in a Fatal error. Therefore, define three methods, get_name(), get_age() and get_occupation() which all accept no arguments and returns the $name, $age and $occupation of the Person respectively.
    Since $name, $age and $occupation are now protected, any attempt at directly reassigning them values outside the class will result in a Fatal error. Therefore, define three methods, set_name(), set_age() and set_occupation() in which each of them receives exactly one argument and sets the value of their respective properties to the value of the argument if and only if the argument is valid. The validity of the argument is the same as the standards used in the constructor (i.e. string value for $name and $occupation and non-negative integer for $age) and if the argument is invalid then throw the exact same errors (with the same messages) thrown by the constructor in such cases.
*/

class Person 
{
    protected $name;
    protected $age;
    protected $occupation;

    public function __construct($name, $age, $occupation) {
        $this->set_name($name);
        $this->set_age($age);
        $this->set_occupation($occupation);
    }

    public function set_name($name) 
    {
        if (!is_string($name)) {
            throw new InvalidArgumentException("Name must be a string!");
        }
        $this->name = $name;
    }

    public function get_name() 
    {
        return $this->name;
    }

    public function set_age($age) 
    {
        if (!is_int($age) || ($age < 0)) {
            throw new InvalidArgumentException("Age must be a non-negative integer!");
        }
        $this->age = $age;
    }

    public function get_age() 
    {
        return $this->age;
    }

    public function set_occupation($occupation) 
    {
        if (!is_string($occupation)) {
            throw new InvalidArgumentException("Occupation must be a string!");
        }
        $this->occupation = $occupation;
    }

    public function get_occupation() 
    {
        return $this->occupation;
    }
}