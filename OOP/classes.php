<title> BOOK PAGE </title>

<?php 
    //sınıf
    class Book{
        //propertice
    public $name,$price,$author;

    //method
    public function insert($name,$author,$price) {

    $this->name=$name;
    
    //this:sözde değişkeni. sınıf içerisinde tanımlanan nesnelerin özelliklerine erişmek için kullanilir.

    $this->author=$author;

    $this->price=$price;
}
    public function list(){

    echo '<b>'.'Book Name :'.'</b>'.$this->name.'<br>';

    echo '<b>'.'Book Author :'.'</b>'.$this->author.'<br>';

    echo '<b>'.'Book price :'.'</b>'.$this->price.'<br>';
} }?>

<div id="Books" align="Center" style="border:1px solid red; padding:3px; font-family:'Poppins';"> 

<?php
    $php=new Book();

    $php->insert("Robotların Yükselişi","Martin Ford","50 ₺");

    $php->list();

?>

</div>
