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

// create child class
class Student extends Person{
    public string $mark;

    public function __construct(string $name, int $age, string $mark){
        parent::__construct($name, $age);
        $this->mark = $mark;
    }

    public function calculate_grade(){
        $gradePercentage = ($this->mark /100) * 100;
        return $gradePercentage;
    }
}

$student = new Student('Yahya Mahmud', 23 , '90');
$gradePercentage = $student->calculate_grade();
echo $student->introduce() . " and ";
echo "My Grade is {$gradePercentage}%";