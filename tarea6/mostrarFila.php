<?php

include("Estante.php");
$estante = new Estante();


$fila = $_GET['fila'];


$estante->mostrarFila($fila);


?>