<?php 

//override etme: geçersiz kılma.

class Bread
{
    protected $kdv;
    
   public function KDV ($fiyat)
    {
        $this->kdv=0.08;
        return $this->kdv*$fiyat;
    }
}
class  Diesel{

    public $kdv;

    public function KDV($fiyat){
        $this->kdv=0.18;
        return $this->kdv*$fiyat;
    }
}

$bread=new Bread();
echo "Bread KDV : ".$bread->kdv(10).'<br>';

$diesel = new Diesel();
echo "Diesel KDV : ".$diesel->kdv(10);

?>