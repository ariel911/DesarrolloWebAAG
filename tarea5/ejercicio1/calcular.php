<?php
include("tabla.php");
$ope = $_GET["ope"];
$num = $_GET["num"];
$tabla = new Tabla();

 switch ($ope){
     case "+":echo "<h3>tabla de suma</h3>";
        $tabla->suma($num);break;
     case "-":echo "<h3>tabla de resta</h3>";
        $tabla->resta($num);break;
     case "*":echo "<h3>tabla de multiplicacion</h3>";
        $tabla->multiplicacion($num);break;
     case "/":echo "<h3>tabla de division</h3>";
        $tabla->division($num);break;
     default: echo "La operacion no existe";
 }
?>