<?php
    include 'classes.php';

    class FounderAndSubversive extends Book{ 
    
    //extends ile miras aliyoz
    
    public function __construct()
    {
        //kurucu method:sınıf cagrıldıgında yerine getirilen.
        
        echo 'başladı'.'<br>';
    }
     public function __destruct()
     {
         //yıkici method
    
         echo 'bitti'.'<br>'.'<br>';
    }
}
class ScienceFictionBook extends Book {

    public function DisplayPrint(){

        echo "science fiction books";
    }
}
    $php=new FounderAndSubversive();
    
    $php-> insert("Python","Mustafa Murat Coşkun","50");

    $php->list();
 
    $php=new ScienceFictionBook();

    $php-> insert("C#","Murat Yücedağ","20");

    $php->list();

    
?>