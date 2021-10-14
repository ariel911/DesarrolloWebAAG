<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="autenticar.php" method="post">
        <?php
        if(isset($_COOKIE['usuario'])){
        echo '<label for="">Usuario:</label>
        <input type="text" name="usuario" value="'.$_COOKIE['usuario'].'"><br>
        <input type="checkbox" name="rusuario" checked><br>';
        }else{
        echo '<label for="">Usuario:</label>
        <input type="text" name="usuario"><br>
        <input type="checkbox" name="rusuario"><br>';
        }
        if(isset($_COOKIE['password'])){
            echo '<label for="">Password:</label>
            <input type="text" name="password" value="'.$_COOKIE['password'].'"><br>
            <input type="checkbox" name="rpassword" checked>  <br>';
            }else{
            echo '<label for="">Password:</label>
            <input type="text" name="password"><br>
            <input type="checkbox" name="rpassword"><br>';
            }
        ?>
        <button>Ingresar</button>
    </form>
</body>
</html>