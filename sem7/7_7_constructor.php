<?php
class Car {
public $name;
public $color;
function __construct($name, $color) {
$this->name = $name; 
$this->color = $color; 
}
function get_name() {
return $this->name;
}
function get_color() {
return $this->color;
}
}
$audi = new Car("Audi", "red");
echo $audi->get_name();
echo "<br>";
echo $audi->get_color();
?>