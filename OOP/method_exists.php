<?php

class Course{

public function TeacherAdd(){

    echo "Teacher Eklendi";
}
    }
    class Edication extends Course{}
$cls=new Course();
$cls->TeacherAdd();

if(method_exists($cls,"asd")) {

    echo "Böyle bir method bulundu ! <br>";
    $cls->TeacherAdd();
}
else {

    echo "Böyle bir method bulunamadı. Tekrar dene.";
}

?>