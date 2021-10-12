<?php

include("Estante.php");
$estante = new Estante();


$fila = $_GET['fila'];


$estante->eliminarLibro($fila);

header("Location: menu.php");

?>