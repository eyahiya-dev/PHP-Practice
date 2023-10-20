<?php
// create a class
class Car{
    //properties
    public $name;
    public $modelDate;
    
    // methods
    // set the name with method
    function setName($name){
        $this->name = $name;
    }

    // set the model with method
    function setModelDate($modelDate){
        $this->modelDate = $modelDate;
    }

    // get the name 
    function getName(){
        return $this->name;
    }

    // get the model of date
    function getModelDate(){
        return $this->modelDate;
    }

}

// create object of Car
$carInfo = new Car();
$carInfo->setName("Toyota");
$carInfo->setModelDate("2018");
echo $carInfo->getName();
echo $carInfo->getModelDate();