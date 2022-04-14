    <?php 

        //final classları genişleyemez ve miras olamaz.
    final class Course{

        public function write(){

            echo "Php";
        }
    }
    class bottom extends Course{

    }

    ?>