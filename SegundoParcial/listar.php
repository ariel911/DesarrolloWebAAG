<?php include ("conexion.php"); // conectarse
$sql="SELECT id,imagen,titulo,autor from libros";
$resultado = mysqli_query ($con, $sql) ; //ejecutar elsql
$i=1;
?>

<table border="1" class="table">
	<tr>
	<th>Fotografia</th>
	<th>Titulo </th>
	<th>Autor</th>
	</tr>
	<tbody>
		<?php
	while ($fila=$resultado->fetch_assoc())
		{
			?>
			<tr>
			<td><img src="images/<?php echo $i.".jpg";?>" width="50px" height="50px">   </td>
				<td><?php echo $fila['titulo'];?> </td>
				<td><?php echo $fila['autor'];?> </td>
				
			</tr>
		<?php $i++; 
		} ?>	
	</tbody>
</table>

<?php 
mysqli_close ($con); //cerrar

?>
