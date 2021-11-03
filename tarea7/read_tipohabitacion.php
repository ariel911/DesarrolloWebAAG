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
    $sql = "SELECT id, descripcion, nrocamas FROM tipohabitaciones";    
   
    $resultado = mysqli_query($conn, $sql);
    ?>
    
    <table border="1">
        <tr>
            <th>id</th>
            <th>descrripcion</th>
            <th>Nro camas</th>
            <th>Operaciones</th>

        </tr>
        <?php while ($fila = mysqli_fetch_array($resultado)) { ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['descripcion']; ?></td>
                <td><?php echo $fila['nrocamas']; ?></td>
                <td><a href="frm_update_tipohabitacion.php?id=<?php echo $fila['id']; ?>">Editar</a>
                    <a href="delete_tipohabitacion.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
                </td>

            </tr>
        <?php } ?>
        <a href="frm_create_tipohabitacion.php">Crear</a>
</body>

</html>