<?php
include("alumno.php");
$alumno1= new lista_alumno();
$opcion = $_GET['opcion'];

switch ($opcion) {
    case "insertar":
        header("Location: insertar.html");
        break;
        
    case "mostrar":
        $alumno1->mostrarAlumno();
        break;
    case "eliminar":
        $alumno1->eliminarAlumno();
        break;

    default: 
               echo "Error: opcion no valida";
}
?>
<meta http-equiv="refresh" content="3; url=menu.php">