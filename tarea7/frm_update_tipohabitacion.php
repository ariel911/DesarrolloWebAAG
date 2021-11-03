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
  $id = $_GET['id'];
  

  $sql = "SELECT id,descripcion,nrocamas  FROM tipohabitaciones WHERE id=".$id;
  
  //echo $sql;
  $resultado = mysqli_query($conn, $sql);
  $fila = mysqli_fetch_array($resultado);
  //var_dump($fila);
  ?>
  <form action="update_tipohabitacion.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <label>descripcion</label>
    <input type="text" name="descripcion" value="<?php echo $fila['descripcion'] ?>"> <br>
    <label for="">nro camas</label>
    <input type="number" name="nrocamas" value="<?php echo $fila['nrocamas'] ?>"> <br>
    <input type="submit" value="editar">
  </form>
</body>

</html>