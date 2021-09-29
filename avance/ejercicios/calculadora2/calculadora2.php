<?php
  class calculadora {
      private $num1;
      private $num2;


    public function insert($n1, $n2){
        $this->num1 = $n1;
        $this->num2 = $n2;
    }
    public function suma(){
          return $this->num1+$this->num2;
      }
    public function multiplicacion(){
        return $this->num1*$this->num2;
    }
    public function division(){
        return $this->num1/$this->num2;
    }
    public function restar(){
        return $this->num1-$this->num2;
    }
  }


  $cal1 = new calculadora();
  $cal1->insert(3,4);
  $ope="/";

  switch ($ope){
      case ($ope == "+"): echo $cal1->suma();break;
      case ($ope == "-"): echo $cal1->restar();break;
      case ($ope == "*"): echo $cal1->multiplicacion();break;
      case ($ope == "/"): echo $cal1->division();break;
      default:
           echo "operador incorrecto";
  }

  ?>
