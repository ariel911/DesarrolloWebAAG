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
    $sql = "SELECT id,descripcion  FROM tipohabitaciones";
    $resultado = mysqli_query($conn, $sql);
    ?>

    <form action="create.php" method="POST">
        <label for="nro">Número</label>
        <input type="number" name="nro"> <br>
        <label for="tipohabitacion">tipohabitacion</label>
        <select name="idtipohabitacion">
            <?php while ($tipohabitacion = mysqli_fetch_assoc($resultado)) { ?>
                <option value="<?php echo $tipohabitacion['id'] ?>"><?php echo $tipohabitacion['descripcion'] ?></option>
            <?php } ?>

        </select>
        <br>
        <label>baño privado</label>
        <label for="banoprivado">Espacio</label>
            <input type="radio" name="banoprivado" value="1">privado
            <input type="radio" name="banoprivado" value="0">no privado <br>
        <label>espacio</label>
        <input type="number" name="espacio">
        <label for="precio">Precio</label>
        <input type="number" name="precio">
        <input type="submit" value="Registrar">
    </form>
</body>

</html>