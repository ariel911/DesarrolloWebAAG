<?php
class operacionescadena{
    private $cad;
    function __construct($cad){
          $this->cad = $cad;
    }
    public function invertir(){
        //for($i=count($this->cad);$i>=0;$i--){
       //     echo $this->cad[$i];
        //}
        echo strrev($this->cad),"<br>";
           
    }
    public function Mayusculas(){
        echo strtoupper($this->cad),"<br>";
    }
    public function Minusculas(){
        echo strtolower($this->cad),"<br>";
    }
}
?>