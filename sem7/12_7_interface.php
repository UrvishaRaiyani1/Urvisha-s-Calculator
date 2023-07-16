<?php
        interface Getdata{
              public function get();
        }
        interface Printdata{
              public function put();
        }
        class class1 implements Getdata, Printdata{
              public function get(){
                    echo "Get data method is called";
              }
              public function put(){
                    echo "<br>Put data method is called";
              }
        }
        $obj=new class1;
        $obj->get();
        $obj->put();

?>