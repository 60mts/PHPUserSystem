<?php

class home{
public function __autoload($class){

    require_once $class.".php";
    }
}
$class1=new Class1();

$class2=new Class2();

?>