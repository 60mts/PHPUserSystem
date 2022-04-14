<?php 


interface Hello{

    public function Language($name);      
    }

class Turkish implements Hello{
    
    public function Language($name){
    echo "Merhaba ".$name;   
    }
}
class English implements Hello{

    public function Language($name){
        echo "Hello ".$name;
    }
}



$tr = new Turkish();
$tr->Language("Tayyib");

$eng=new English();
$eng->Language("TAYYİB");

?>