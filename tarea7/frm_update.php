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
  $sql = "SELECT * FROM habitacion where id=$id";
  $resultado = mysqli_query($conn, $sql);
  $fila = mysqli_fetch_array($resultado);
  $sql = "SELECT id,descripcion  FROM tipohabitaciones";
  $resultado_tipohabitacion = mysqli_query($conn, $sql);

  ?>
  <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <label for="nro">Número</label>
    <input type="number" name="nro" value="<?php echo $fila['nro'] ?>"> <br>
    <label for="tipohabitacion">Tipo Habitacion</label>
    <select name="idtipohabitacion">
      <?php while ($tipohabitacion = mysqli_fetch_assoc($resultado_tipohabitacion)) { ?>
        <option value="<?php echo $tipohabitacion['id'] ?>" <?php echo $tipohabitacion['id']==$fila['idtipohabitacion']?'selected':'' ?> ><?php echo $tipohabitacion['descripcion'] ?></option>
      <?php } ?>
    </select><br>
    <label for="banoprivado">Espacio</label>
            <input type="radio" name="banoprivado" value="<?php echo $fila['banoprivado']=1 ?>">privado
            <input type="radio" name="banoprivado" value="<?php echo $fila['banoprivado']=0 ?>">no privado <br>
    <label for="">Espacio</label>
    <input type="number" name="espacio" value="<?php echo $fila['espacio'] ?>"> <br>
    <label for="precio">Precio</label>
    <input type="number" name="precio" value="<?php echo $fila['precio'] ?>">
    <input type="submit" value="editar">
  </form>
</body>

</html>