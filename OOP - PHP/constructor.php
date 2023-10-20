<?php
// create a fruits class
class Fruit{
    public $name ;
    public $color;

    // set the data in variable/properties into the constructor function
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    // get the data
    function getName(){
        return $this->name;
    }
    function getColor(){
        return $this->color;
    }

}
$apple = new Fruit("apple","green");
echo $apple->getName(). PHP_EOL;

echo $apple->getColor();


