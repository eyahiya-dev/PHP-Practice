<?php
class Car{
    public $name;
    public $model;
    public $color;
    public $launch;

    function __construct($name, $model, $color, $launch){
        $this->name = $name;
        $this->model = $model;
        $this->color = $color;
        $this->launch = $launch;
    }

    function introOfCar(){
        return "Name : {$this->name}, Model : {$this->model}, Color : {$this->color}, Launch in : {$this->launch}";
    }
}

class Toyota extends Car{
    function message(){
        return "This is one of the best Car Manufacture Company in Asia and well-known all over the world";
    }
}

class Bugatti extends Car{
    function message(){
        return "the fastest car in the world";
    }
}


$toyota = new Toyota('Toyota', 'prime', 'white', '2018');
$bugatti = new Bugatti('Bugatti','Veron', 'Violet & Black','2022');
echo $toyota->introOfCar().PHP_EOL.PHP_EOL;
echo $toyota->message(). PHP_EOL . PHP_EOL;
echo $bugatti->introOfCar().PHP_EOL.PHP_EOL;
echo $bugatti->message(). PHP_EOL;

