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
    $sql = "SELECT * FROM ciudades";
    
    if (isset($_GET['orden'])) {
        $sql .= " ORDER BY ".$_GET['orden'];
    }
    if (isset($_GET['buscar'])) {
        $buscar = $_GET['buscar'];
        $sql .= " WHERE ciudad LIKE '%$buscar%'";
    }
    $resultado = mysqli_query($conn, $sql);
    ?>
   
   <form action="read.php" method="GET">
        <label for="buscar">ciudad a buscar</label>
        <input type="text" name="buscar" value="<?php echo isset($buscar)?$buscar:''; ?>">
        <input type="submit" value="buscar">
    </form>
    <table border="1">
        <tr>
             <th><a href="read.php?orden=ciudad">Ciudad</a> </th>
            <th>Operaciones</th>
        </tr>
        <?php while($fila = mysqli_fetch_array($resultado)){ ?>
        <tr>
            <td><?php echo $fila['ciudad']; ?></td>
            <td><a href="frm_edit.php?id=<?php echo $fila['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
            </td>

        </tr>
        <?php } ?>
        <a href="frm_create.html">Crear</a>
        </table>
</body>

</html>