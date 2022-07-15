<?php
    class gadget{
        function $color = 'red';
        
        function __construct(){
            echo "Welcome Gadget<br>";
        } 
        function layar($size,$jenis){
            echo "Size: ".$size; 
            echo "<br>Jenis: ".$jenis;
            echo "<br><br>";
        }
        function prosesor($speed,$vendor){
            echo "Speed: ".$speed;
            echo "<br>Vendor: ".$vendor;
            echo "<br><br>";
        }
    }

    $hp = new gadget;
    $hp->layar(6,'Amoled');
    $hp->layar(10,'IPS');
    $hp->layar(15,'IPA');
    $hp->prosesor(720,'Oppo');
    $hp->prosesor(880,'Vivo');
?>