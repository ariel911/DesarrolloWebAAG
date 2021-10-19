<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('conexion.php');
  $id=$_GET['id'];
  $sql="SELECT * FROM ciudades where id=$id";
  $resultado = mysqli_query($conn, $sql);
  $fila = mysqli_fetch_array($resultado);
?>
<form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id?>">
<label for="ciudad">Ciudad</label>
<input type="text" name="ciudad" value="<?php echo $fila['ciudad']?>"> <br>

<input type="submit" value="editar">
</form>
</body>
</html>
