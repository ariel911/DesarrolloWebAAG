<?php

include("Estante.php");
$estante = new Estante();


$nombreLibro = $_GET['libro'];
$fila = $_GET['fila'];


$estante->insertarLibro($fila, $nombreLibro);

header("Location: menu.php");

?>