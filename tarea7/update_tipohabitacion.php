<?php
include("conexion.php");
$id=$_POST['id'];

$descripcion=$_POST['descripcion'];
$nrocamas=$_POST['nrocamas'];

$sql="UPDATE tipohabitaciones SET descripcion='$descripcion',nrocamas=$nrocamas WHERE id=".$id;

//echo $sql;

$resultado = mysqli_query($conn, $sql);

?>
<div>Se edito con éxito</div>
<meta http-equiv="refresh" content="3; url=read_tipohabitacion.php">