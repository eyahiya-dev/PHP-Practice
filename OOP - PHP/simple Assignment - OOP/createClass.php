<?php
/*

Assignment 1: Create a Class

* Create a class named "Person" with properties like name, age, and email.
* Add methods to set and get these properties.
* Create an object from the class and demonstrate property manipulation.

*/

// method wih constructor function
class Person{
    public $name;
    public $email;
    public $age;

    function __construct(string $name, string $email, int $age){
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    // get the data with function
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getAge(){
        return $this->age;
    }
}

$personOne = new Person('Yahya', 'yahya@ex.com', 23);
echo $personOne->getName() . PHP_EOL;
echo $personOne->getEmail() . PHP_EOL;
echo $personOne->getAge() . PHP_EOL;