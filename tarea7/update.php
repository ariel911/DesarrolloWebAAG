<?php
include("conexion.php");
$id=$_POST['id'];

$nro=$_POST['nro'];
$tipohabitacion=$_POST['idtipohabitacion'];
$banoprivado=$_POST['banoprivado'];
$espacio=$_POST['espacio'];
$precio=$_POST['precio'];

$sql="UPDATE habitacion SET nro=$nro,idtipohabitacion=$tipohabitacion,banoprivado=$banoprivado,espacio=$espacio,precio=$precio WHERE id=".$id;

echo $sql;

$resultado = mysqli_query($conn, $sql);

?>
<div>Se edito con éxito</div>
<meta http-equiv="refresh" content="3; url=read.php">