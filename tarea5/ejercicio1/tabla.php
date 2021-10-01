<?php

class tabla{

    public function suma($n){
        for($i=0;$i<=10;$i++){
           echo $i." + ".$n." = ".$i+$n,"<br>";
        }
    }
    public function resta($n){
        for($i=$n;$i<=$n+10;$i++){
           echo $i." - ".$n." = ".$i-$n,"<br>";
        }
    }
    public function multiplicacion($n){
        for($i=0;$i<=10;$i++){
           echo $n." * ".$i." = ".$i*$n,"<br>";
        }
    }
    public function division($n){
    
        for($i=$n;$i<=$n*10;$i=$i+$n){
           echo $i." / ".$n." = ".$i/$n,"<br>";
        }
    }
}
?>