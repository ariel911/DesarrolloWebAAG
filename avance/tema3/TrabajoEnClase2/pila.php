<?php

class pila {
    private $elementos=array();
    private $tope;
    function __construct(){
        $this->tope = 0;
    }
    public function insertar($n){
        $this->elementos[$this->tope] =  $n;
        $this->tope++;
    }
    public function eliminar(){
        if($this->tope==0){
            echo "pila vacia";
        }
        else{
            $this->tope--;
            return $this->elementos[$this->tope];
        }
    }
    public function mostrar(){
        for($i=0;$i< $this->tope;$i++){
              echo $this->elementos[$i],"<br>";
        }
        "<hr>";
    }

}
?>