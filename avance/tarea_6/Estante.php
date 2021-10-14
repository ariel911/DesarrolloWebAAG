
<?php

session_start();

class Estante
{
    // this hace referencia o a punta a las variables o atributos de la clase  

    // Propiedades o atributos 
    public $fila1 = array();
    public $fila2 = array();
    public $tope1;
    public $tope2;


    // METODOS 

    public function __construct()
    {

        $this->fila1 = isset($_SESSION['fila1']) ? $_SESSION['fila1'] : [];
        $this->fila2 = isset($_SESSION['fila2']) ? $_SESSION['fila2'] : [];
        $this->tope1 = isset($_SESSION['tope1']) ? $_SESSION['tope1'] : 0;
        $this->tope2 = isset($_SESSION['tope2']) ? $_SESSION['tope2'] : 0;
    }

    // insertar Elemento 
    public function insertarLibro($numFila, $elemento)
    {
        if ($numFila == "1") {
            $this->fila1[$this->tope1] = $elemento; // insertamos el elemento
            $this->tope1++;
            $_SESSION['fila1'] = $this->fila1;  // creamos las sessiones 
            $_SESSION['tope1'] = $this->tope1;
        } else {
            if ($numFila == "2") {
                $this->fila2[$this->tope2] = $elemento;
                $this->tope2++;
                $_SESSION['fila2'] = $this->fila2;
                $_SESSION['tope2'] = $this->tope2;
            }
        }
    }



   public function mostrarFila($numFila)
    {
        if ($numFila == "1") {
            echo "Estante en la Fila 1<br>";
            for ($i = 0; $i < $this->tope1; $i++) {
                echo $this->fila1[$i] . "<br>";    # code...
            }
        } else {
            echo "Estante en la Fila 2<br>";
            for ($i = 0; $i < $this->tope2; $i++) {
                echo $this->fila2[$i] . "<br>";    # code...
            }
        }
        
    }


    public function mostrarTodo()
    {
        echo "Estante en la Fila 1<br>";
        for ($i = 0; $i < $this->tope1; $i++) {
            echo $this->fila1[$i] . "<br>";    # code...
        }

        echo "Estante en la Fila 2 <br>";
        for ($i = 0; $i < $this->tope2; $i++) {
            echo $this->fila2[$i] . "<br>";    # code...
        }
    }
    public function eliminarLibro($numFila){
        if ($numFila == "1") {
            
            $this->tope1--;
            $aux = $this->elemento[$this->tope1]; // insertamos el elemento
            $_SESSION['fila1'] = $this->fila1;  // creamos las sessiones 
            $_SESSION['tope1'] = $this->tope1;

            return $aux;
        } 
        else {
            if ($numFila == "2") {
                
                $this->tope2--;
                $aux = $this->elemento[$this->tope2];
                $_SESSION['fila2'] = $this->fila2;
                $_SESSION['tope2'] = $this->tope2;

                return $aux;
            }
        }
    }
}



?>