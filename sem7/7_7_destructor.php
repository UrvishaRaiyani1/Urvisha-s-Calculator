<?php
class Car {
public $name;
public $color;
function __construct($name, $color) {
$this->name = $name; 
$this->color = $color; 
}
function __destruct() {
echo "The Car is {$this->name} and the color is {$this->color}."; 
}
}
$apple = new Car("Audi", "red");
?>