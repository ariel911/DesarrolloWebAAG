<?php
include("conexion.php");
$id=$_GET['id'];


$sql="DELETE  from ciudades WHERE id=".$id;

//echo $sql;

$resultado = mysqli_query($conn, $sql);

?>
<div>Se Elimino con éxito</div>
<meta http-equiv="refresh" content="3; url=read.php">