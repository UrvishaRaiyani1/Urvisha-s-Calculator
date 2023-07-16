<?php
class student{
   private $name;
   private $gender;
   public function setname($name){
   $this->name=$name;
   echo "Name is ".$name;
   echo "<br>";
   }
   public function setgender($gender){
   if($gender == "Male" || $gender == "Female")
   {
   $this->gender=$gender;
   echo "Gender is ".$gender;
   }
   }
   public function getname(){
   return $this->name;
   }   
   public function getgender(){
   return $this->gender;
   }   
   }
   $Moon = new student();
   $Moon ->setname("URVISHA RAIYANI");
   $Moon ->setgender("Female");
?>