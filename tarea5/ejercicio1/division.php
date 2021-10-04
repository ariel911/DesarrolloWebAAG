<?php
include("tabla.php");

$num = $_GET["n"];
$tabla = new Tabla();
echo "<h3>tabla de division</h3>";
$tabla->division($num);
