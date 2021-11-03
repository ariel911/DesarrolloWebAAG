<?php
include("conexion.php");
$nro=$_POST['nro'];
$idtipohabitacion=$_POST['idtipohabitacion'];
$banoprivado=$_POST['banoprivado'];
$espacio=$_POST['espacio'];
$precio=$_POST['precio'];

$sql="INSERT INTO habitacion(nro,idtipohabitacion,banoprivado,espacio,precio)
values ('$nro','$idtipohabitacion',$banoprivado,$espacio,$precio) ";

$resultado = mysqli_query($conn, $sql);
?>

<div>Se inserto con éxito</div>
<meta http-equiv="refresh" content="3; url=read.php">