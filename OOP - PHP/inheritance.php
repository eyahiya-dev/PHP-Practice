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

$toyota = new Car('Toyota', 'Prime', 'ofwhite', '2018');
$mercedes = new Car('Mercedes', 'Lawren12R', 'Aqua Black', '2012');
echo $toyota->introOfCar() . PHP_EOL . PHP_EOL;
echo $mercedes->introOfCar();