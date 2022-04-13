<?php

//public: Heryerden erişilebilir.
//private sadece tanımlandığı sınıf içerisinden erişilebilir.
//protected sadece tanımladığı sınıf yada miras yoluyla erişilebilir.

class BookSCategories{

    public $name="1984";
    protected $author="George Orwell";
    protected $category="Software";
    private $price="50 ₺"; // gizli oldugu için hata veriyor.

}

class SoftwareBooks extends BookSCategories{

    public function ViewCategory(){

        echo "Book Name : ".$this->name.'<br>';
        echo "Book Author : ".$this->author.'<br>';
        echo "Book Category : ".$this->category.'<br>';
        echo "Book Price : ".$this->price.'<br>';

    }
}

$view=new SoftwareBooks();

$view->ViewCategory();

?>