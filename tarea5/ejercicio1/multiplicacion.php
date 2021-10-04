<?php
include("tabla.php");

$num = $_GET["n"];
$tabla = new Tabla();
echo "<h3>tabla de multiplicacion</h3>";
$tabla->multiplicacion($num);
