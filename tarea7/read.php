<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'conexion.php';
    $sql = "SELECT id,nro,idtipohabitacion, banoprivado, espacio, precio FROM habitacion";
 
    if (isset($_GET['buscar'])) {
        $buscar = $_GET['buscar'];
        $sql .= " WHERE nro LIKE '%$buscar%'";
    }
    if (isset($_GET['orden'])) {
        $sql .= " ORDER BY ".$_GET['orden'];
    }
    
   
    $resultado = mysqli_query($conn, $sql);
    ?>
    <form action="read.php" method="GET">
        <label for="buscar">nombre a buscar</label>
        <input type="text" name="buscar" value="<?php echo isset($buscar)?$buscar:''; ?>">
        <input type="submit" value="buscar">
    </form>
    <table border="1">
        <tr>
            <th><a href="read.php?orden=nro">Número</a>      </th>
            <th><a href="read.php?orden=idtipohabitacion">id tipo Habitacion</a> </th>
            <th><a href="read.php?orden=banoprivado">Baño privado</a> </th>
            <th><a href="read.php?orden=espacio">Espacio</a> </th>
            <th><a href="read.php?orden=precio">Precio</a> </th>
            <th>Operaciones</th>

        </tr>
        <?php while ($fila = mysqli_fetch_array($resultado)) { ?>
            <tr>
                <td><?php echo $fila['nro']; ?></td>
                <td><?php echo $fila['idtipohabitacion']; ?></td>
                <td><?php echo $fila['banoprivado']; ?></td>
                <td><?php echo $fila['espacio']; ?></td>
                <td><?php echo $fila['precio']; ?></td>
                <td><a href="frm_update.php?id=<?php echo $fila['id']; ?>">Editar</a>
                    <a href="delete.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
                </td>

            </tr>
        <?php } ?>
       
</body>

</html> 
<a href="frm.create.php">Crear</a><br>
<a href="frm_create_tipohabitacion.php">Crear Tipo de habitacion</a><br>
<a href="read_tipohabitacion.php">ver tipos de habitaciones</a><br>