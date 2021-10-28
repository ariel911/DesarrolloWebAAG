<?php
include("conexion.php");
$ciudad=$_POST['ciudad'];

$sql="INSERT INTO ciudades(ciudad) values ('$ciudad') ";

//echo $sql;

$resultado = mysqli_query($conn, $sql);

?>
<div>Se inserto de forma éxitosa</div>
<meta http-equiv="refresh" content="3; url=read.php">