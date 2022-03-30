<?php

/*
    DESCRIPTION

    This is the first part of this kata series. Second part is here and third part is here

    Add two English words together!

    Implement a class Arith (struct struct Arith{value : &'static str,} in Rust) such that

    //javascript
    var k = new Arith("three");
    k.add("seven"); //this should return "ten" 
    Input - Will be between zero and ten and will always be in lower case

    Output - Word representation of the result of the addition. Should be in lower case
*/

class Arith 
{ 
    const arrayNumber = [
    'zero', 'one','two','three','four','five','six','seven','eight',
    'nine','ten', 'eleven', 'twelve', 'thirteen', "fourteen", "fifteen", 'sixteen', 'seventeen', 'eighteen', 'nineteen', 'twelve'];
    private $value1;

    public function __construct(string $value1) {
        $this->value1 = $value1;
    }

    public function add(string $value2): string {
        $value2 = array_search($value2, self::arrayNumber);
        $value1 = array_search($this->value1, self::arrayNumber);
        $sum = $value1 + $value2;
        return self::arrayNumber[$sum];
    }
}