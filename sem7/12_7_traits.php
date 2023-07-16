<?php
             trait message1 {
             public function msg1() {
                   echo "Trait 1: msg1 called";
             }
             }
             trait message2 {
             public function msg2() {
                   echo "Trait 2: msg2 called";
}
             }
class class1 {
             use message1;
}
class class2 {
             use message1, message2;
}
$obj = new class1();
$obj->msg1();
echo "<br>";
$obj2 = new class2();
$obj2->msg1();
echo "<br>";
$obj2->msg2();
?>