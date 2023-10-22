<?php
/*

Assignment 2: Inheritance

* Create a base class named "Shape" with properties for color and area.
* Create two child classes, "Circle" and "Rectangle," that inherit from "Shape" and have methods to calculate their respective areas.
* Create objects for both child classes and display their properties.

*/
class Shape {
    protected $color;
    protected $area;

    public function __construct($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    public function getArea() {
        return $this->area;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($color, $radius) {
        parent::__construct($color);
        $this->radius = $radius;
        $this->calculateArea();
    }
    
    private function calculateArea() {
        $this->area = pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($color, $length, $width) {
        parent::__construct($color);
        $this->length = $length;
        $this->width = $width;
        $this->calculateArea();
    }

    private function calculateArea() {
        $this->area = $this->length * $this->width;
    }
}

$circle = new Circle('blue', 5);
$rectangle = new Rectangle('red', 10, 20);

echo 'Circle color: ' . $circle->getColor() . ', area: ' . $circle->getArea() . PHP_EOL;
echo 'Rectangle color: ' . $rectangle->getColor() . ', area: ' . $rectangle->getArea() . PHP_EOL;

