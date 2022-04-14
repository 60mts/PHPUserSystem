<?php 

//Static kelimesi methodta kullanılırsa new kullanmadan çağırma.
class Class1{

    public static function method1()
    {
echo "Method One Content";
    }

}

Class1::method1();


?>