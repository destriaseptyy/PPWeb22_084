<?php
    class gadget{
        
        
        function __construct(){
            echo "Welcome Gadget<br>";
        } 
        public $color = 'red';

        function layar($size=10,$jenis='amoled'){
            echo "Size: ".$size; 
            echo "<br>Jenis: ".$jenis;
            echo "<br>Warna: ".$this->color;
            echo "<br><br>";
        }
        function prosesor($speed,$vendor){
            echo "Speed: ".$speed;
            echo "<br>Vendor: ".$vendor;
            echo "<br><br>";
        }
    }

    $hp = new gadget;
    $hp->layar('x');
    /*$hp->color = 'Silver';
    $hp->layar(10,'IPS');
    $hp->layar(15,'IPA');
    $hp->prosesor(720,'Oppo');
    $hp->prosesor(880,'Vivo');*/

    /*pengisian argumen mengikuti x=size diawal
?>