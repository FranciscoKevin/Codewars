<?php

/*
    DESCRIPTION

    Task
    Note: The lesson provided in this Kata is designed to teach you most, if not all, of the key concepts required to complete the Task in this Kata.
    However, if in doubt, you are strongly encouraged to conduct your own research.

    Firstly, define the following interfaces with the following public methods:

    CanFly
    This interface must have the following methods:

    fly - This public method should accept no arguments
    CanSwim
    This interface must have the following methods:

    swim - This public method should accept no arguments
    CanClimb
    This interface must have the following methods:

    climb - This public method should accept no arguments
    CanGreet
    This interface must have the following methods:

    greet - This public method should accept exactly one argument - you could call that argument $name for readability purposes (or you could name it whatever you want, it doesn't matter since the implementing class does not have to name the argument the exact same way)
    CanIntroduce
    This interface must have the following methods:

    speak - This public method should accept no arguments
    introduce - This public method should accept no arguments
    CanSpeak
    This interface must have the following methods:

    speak - This public method should accept no arguments
    Thinking Exercise: Just by the descriptions above, can you tell me which two interfaces a class cannot implement simultaneously?

    After you have defined your interfaces, define the classes specified below and follow the instructions carefully in each section to pass the tests.

    Bird
    Since a Bird can fly (well, most of them can anyway :p), the Bird class must implement the CanFly interface.

    Properties
    The Bird class should have the following properties:

    $name - this property should be public
    Constructor
    The class constructor of Bird must receive the following arguments and set its respective properties:

    $name - This parameter is required. The argument should ideally be a string but no error checking is necessary.
    Methods
    The Bird class must define/implement the following methods:

    fly - This method must be implemented as it is required by the CanFly interface being implemented. The fly method should return the string "I am flying".
    chirp - Additionally, a bird can also chirp. This method should receive no arguments and return the string "Chirp chirp".
    Duck
    Since a Duck "is a" Bird, the Duck class should inherit from the Bird class. Furthermore, since a Duck can fly and swim, it should implement the interfaces CanFly and CanSwim.

    Fun Fact: When a class implements an interface / multiple interfaces in PHP, it is said that there is a "has a" relationship between the class and the interface(s) being implemented. In this case, the Duck class is said to "has a" (sic) CanFly and CanSwim.

    Properties
    The Duck class should have no other properties other than the properties inherited from the Bird class.

    Constructor
    The Duck class should have a constructor identical to that of its parent class.

    Methods
    fly - This method must be implemented by the Duck class due to it implementing the CanFly interface, but the method does not need to be reimplemented since the parent class already has this method.
    chirp - This method should return the string "Quack quack"
    swim - This method must be implemented as specified in the CanSwim interface being implemented. It should receive no arguments and return the string "Splash! I'm swimming"
    Cat
    A Cat "has a" CanClimb.

    Properties
    For the purposes of this Kata, all cats are wild cats so they do not have a name. Therefore you do not need to declare any properties.

    Constructor
    You do not need to define a constructor for this class.

    Methods
    climb - This method must be implemented as per the CanClimb interface. This method should accept no arguments and return the string "Look, I'm climbing a tree".
    meow - A cat can also meow. This method should accept no arguments and return the string "Meow meow"
    play - All cats love to play, even ones in the wild! This method should receive exactly one argument $name and return a string of the format "Hey NAME_HERE, let's play!"
    Dog
    A Dog "has a" CanSwim and CanGreet.

    Properties
    For the purposes of this Kata, all dogs are stray dogs so they have no known properties.

    Constructor
    A constructor is not required for this class.

    Methods
    swim - This method must be implemented as per the CanSwim interface. This method should accept no arguments and return the string "I'm swimming, woof woof"
    greet - This method must be implemented as per the CanGreet interface. This method should accept exactly one argument $name and return a string of the format "Hello NAME_HERE, welcome to my home"
    bark - A dog can also bark. This method should accept no arguments and return the string "Woof woof"
    Person
    A Person "has a" CanGreet and CanIntroduce.

    Properties
    $name - This property should be public and should be a string but no error checking is needed.
    $age - This property should be public and should be a non-negative integer but no error checking is required.
    $occupation - This property should be public and should be a string but no error checking is required.
    Constructor
    The class constructor for this class should receive three required arguments in the following order: $name, $age, $occupation and set the respective properties correctly. No error checking is required.

    Methods
    greet - This method must be implemented as per the CanGreet interface. It should receive one argument $name and return a string of the format "Hello NAME_HERE, how are you?"
    speak - This method must be implemented as per the CanIntroduce interface. It should receive no arguments and return the string "What am I supposed to say again?"
    introduce - This method must be implemented as per the CanIntroduce interface. It should receive no arguments and return a string of the form "Hello, my name is NAME_HERE, I am AGE_HERE years old and I am currently working as a(n) OCCUPATION_HERE".
*/

interface CanFly
{
    public function fly();
}

interface CanSwim
{
    public function swim();
}

interface CanClimb
{
    public function climb();
}

interface CanGreet
{
    public function greet($name);
}

interface CanIntroduce
{
    public function speak();
    public function introduce();
}

interface CanSpeak
{
    public function speak();
}

class Bird implements CanFly
{
    public function __construct(public $name)
    {
        $this->name = $name;
    }

    public function fly(): string
    {
        return "I am flying";
    }

    public function chirp(): string
    {
        return "Chirp chirp";
    }
}

class Duck extends Bird implements CanFly, CanSwim
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function fly(): string
    {
        return "I am flying";
    }

    public function chirp(): string
    {
        return "Quack quack";
    }

    public function swim(): string
    {
        return "Splash! I'm swimming";
    }
}

class cat implements CanClimb
{
    public function climb(): string
    {
        return "Look, I'm climbing a tree";
    }

    public function meow(): string
    {
        return "Meow meow";
    }

    public function play(string $name): string
    {
        return "Hey ".$name.", let's play!";
    }
}

class dog implements CanSwim, CanGreet
{
    public function swim(): string
    {
        return "I'm swimming, woof woof";
    }

    public function greet($name): string
    {
        return "Hello ".$name.", welcome to my home";
    }

    public function bark(): string
    {
        return "Woof woof";
    }
}

class Person implements CanGreet, CanIntroduce
{
    public function __construct(public string $name, public string $age, public string $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function greet($name): string
    {
        return "Hello ".$name.", how are you?";
    }

    public function speak(): string
    {
        return "What am I supposed to say again?";
    }

    public function introduce(): string
    {
        return "Hello, my name is ".$this->name.", I am " .$this->age." years old and I am currently working as a(n) ".$this->occupation;
    }
}