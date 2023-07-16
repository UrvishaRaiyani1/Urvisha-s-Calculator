<?php
    class class1{
    private $font_color;
    private $font_text;
    function __construct($f,$s){
        
                            $this->$font_color=$f;
                            $this->$font_text=$s;
                            $this->print_msg();
    }

    function print_msg(){
    echo "<p style=color:red".$this->font_color.";>".$this->font_text."</p>";
    }
    }
?>