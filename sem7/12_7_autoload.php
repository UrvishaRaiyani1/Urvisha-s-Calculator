<?php
    spl_autoload_register(function($class)
    {
    include $class. '.php';
    });
    $p1=new class1("red","AWT");
    $p1=new class2("28","AWT");
?>