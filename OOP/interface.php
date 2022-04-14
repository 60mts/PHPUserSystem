    <?php 

    interface Add{

    public function add($name);

    }

    interface Listener {

    public function Listener();

    }

    class bottom implements Add,Listener{

    public $name;

    public function Add($name){

        return $this->name=$name;

    }
    public function Listener(){

        echo $this-> name;
    }
    
    }
    $last=new bottom();

    $last->Add("Özcan Öner");

    $last->Listener();

    ?>