<?php
class vector{
    private $arreglo=array();

     function __construct($arr){
        $this->arreglo = $arr;
     }

    public function burbuja(){
        $longitud = count($this->arreglo);
        for ($i = 0; $i < $longitud; $i++) {
            for ($j = 0; $j < $longitud - 1; $j++) {
                if ($this->arreglo[$j] > $this->arreglo[$j + 1]) {
                    $temporal = $this->arreglo[$j];
                    $this->arreglo[$j] = $this->arreglo[$j + 1];
                    $this->arreglo[$j + 1] = $temporal;
                }
            }
        }
    }
    public function seleccion(){
        $n = sizeof($this->arreglo);
        for ($i=0; $i<$n-1; $i++)
        {
                  $min=$i;
                  for($j=$i+1; $j<$n; $j++)
                        if($this->arreglo[$min] >$this->arreglo[$j])
                           $min=$j;
                  $aux=$this->arreglo[$min];
                  $this->arreglo[$min]=$this->arreglo[$i];
                  $this->arreglo[$i]=$aux ;
            }
     
          return $this->arreglo;
    }
    //$VectorA,sizeof($VectorA)
    public function imprimir(){
        foreach($this->arreglo as $elemento){
            echo $elemento.",";
        }

    }
}
?>