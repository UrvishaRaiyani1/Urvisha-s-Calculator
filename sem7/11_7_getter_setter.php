<?php
class Movie
{
 public $name;
 private $rating;//Not accessible outside the class
 function __construct($name, $rating)
 {
 $this->name = $name;
 $this->rating = $rating;
 $this->setrating($rating);
 }
function setrating($rating) //setter
{
if($rating == "G" ||$rating == "PG" ||$rating == "PG-13" || $rating == "R" || $rating == "NR")
//only valid rating accepted
 {
 $this->rating=$rating;
 }
 else{
 
 $this->rating="NR";
 }
}
function getrating() //getter
{
 return $this->rating;
}
 }
 $ZNMD=new Movie("ZNMD","G");
 echo "Movie rating is:".$ZNMD->getrating();
?>