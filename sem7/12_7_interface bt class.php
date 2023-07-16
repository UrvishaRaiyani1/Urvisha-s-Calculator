<?php
class books{
  public $title;
  public $author;
  public $price;
  public function __construct($t,$a,$p){
  $this->title=$t;
  $this->author=$a;
  $this->price=$p;
  }
  public function get_values(){
  echo "Title is:".$this->title."<br>";
  echo "Author is:".$this->author."<br>";
  echo "Price is:".$this->price;
  }
}
class technicalbooks extends books{
  public $publication;  
  public function set($p){
  $this->publication=$p;
  }
  public function get(){
        echo "<br>Publication is:".$this->publication;
  }
}
$AWT=new technicalbooks("Advance web Technology", "XYZ","350");
$AWT->set("Mc Grill");
$AWT->get_values();
$AWT->get();
?>