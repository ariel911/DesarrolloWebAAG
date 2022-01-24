<?php

include("alumno.php");
$alumno1= new lista_alumno();


$nombre = $_GET['alumno'];
$cu = $_GET['cu'];
$apellido = $_GET['apellido'];

$alumno1->insertarAlumno($nombre,$apellido,$cu);
header("Location: home.php");

?>