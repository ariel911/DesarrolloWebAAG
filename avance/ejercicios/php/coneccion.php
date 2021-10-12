<?php

$mysqli = new mysqli("localhost","root","","curso");


if($mysqli ->connect_errno){
    echo "fallo al conectar, numero de error: ".$mysqli->connect_errno."<br> Descripcion del error".$mysqli->connect_error;

}else{
    echo "Conexion exitosa";
}


?>