<?php
class Person{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce(){
        return "Hey! This is {$this->name} and I'am {$this->age} years old";
    }    
}

$person = new Person('Yahya Mahmud', 23);
echo $person->introduce();