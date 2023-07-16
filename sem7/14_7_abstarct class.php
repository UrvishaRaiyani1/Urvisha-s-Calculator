
<?php
abstract class class1 {
abstract protected function prefixName($name);
}
class class2 extends class1 {
 public function prefixName($name) {
                      if ($name == "Moon") {
                      $prefix = "Mrs.";
                      } elseif ($name == "URVISHA") {
                      $prefix = "Mrs.";
                      } else {
                      $prefix = "";
                      }
                      return "{$prefix} {$name}";
 }
}
$class = new class2;
echo $class->prefixName("URVISHA");
echo "<br>";

echo $class->prefixName("Shine");
?>