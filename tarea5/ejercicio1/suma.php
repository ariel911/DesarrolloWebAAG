<?php
include("tabla.php");

$num = $_GET['n'];
$tabla = new Tabla();
echo "<h3>tabla de suma</h3>";
$tabla->suma($num);