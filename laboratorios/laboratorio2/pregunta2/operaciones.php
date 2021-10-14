<?php
class operaciones
{
    private $a, $b, $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function calcularSuma()
    {
        $suma = $this->a + $this->b + $this->c;
        return $suma;
    }
    public function calcularMayor()
    {
        if ($this->a > $this->b && $this->a > $this->c) {
            return $this->a;
        } else {
            if (($this->b > $this->a) && ($this->b > $this->c)) {
                return $this->b;
            } else {
                return $this->c;
            }
        }
    }
    public function mostrarCalculos(){
        echo "<table border='1'>
        <tr>
            <th scope='col' style='background-color:yellow;'>valor de A</th>
            <th scope='col' style='background-color:yellow;'>valor de B</th>
            <th scope='col' style='background-color:yellow;'>valor de C</th>
        </tr>
        <tr>
            <td>".$this->a."</td>
            <td>".$this->b."</td>
            <td>".$this->c."</td>
        </tr>
        <tr>
            <td style='background-color:blue;'> Suma</td>
            <td>".$this->calcularSuma()."</td>
            
        </tr>
        <tr>
           <td style='background-color:blue;' >Mayor</td>
           <td >".$this->calcularMayor()."</td>
        </tr>
    </table>";
        
    }
}
?>
