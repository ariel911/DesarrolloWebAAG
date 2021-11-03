<?php
include("conexion.php");
$descripcion=$_POST['descripcion'];
$nrocamas=$_POST['nrocamas'];

$sql="INSERT INTO tipohabitaciones(descripcion,nrocamas)
values ('$descripcion',$nrocamas) ";

//echo $sql;

$resultado = mysqli_query($conn, $sql);

?>
<div>Se inserto con éxito</div>
<meta http-equiv="refresh" content="3; url=read_tipohabitacion.php">