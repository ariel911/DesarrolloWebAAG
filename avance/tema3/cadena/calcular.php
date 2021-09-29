<?php


include("operacionescadena.php");
$c1 = $_POST["cadena"];
$cadena = new operacionescadena($c1);

$cadena->invertir();
$cadena->Mayusculas();
$cadena->Minusculas();



?>