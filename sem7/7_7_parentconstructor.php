<?php
    class TC1
    { 
 public function TC1()
{
 echo "constructor TC1";
 }
 }

class Abatch extends TC1
{
 public function __construct()
 {
 echo parent::TC1(); 
echo "<br>";
echo "constructor A batch"; 
}
}
$obj= new Abatch();
?>