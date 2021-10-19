<?php
include("conexion.php");
$id=$_POST['id'];

$ciudad=$_POST['ciudad'];

$sql="UPDATE ciudades SET ciudad='$ciudad' WHERE id=".$id;

//echo $sql;

$resultado = mysqli_query($conn, $sql);

?>
<div>Se edito con éxito</div>
<meta http-equiv="refresh" content="3; url=read.php">