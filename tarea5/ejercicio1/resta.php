<?php
include("tabla.php");

$num = $_GET["n"];
$tabla = new Tabla();
echo "<h3>tabla de resta</h3>";
$tabla->resta($num);
