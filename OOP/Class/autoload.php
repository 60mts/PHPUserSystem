<?php

 spl_autoload_register(function($class){

    require_once $class.".php";
    });

    $class1=new Class1();

    $class2=new Class2();
?>