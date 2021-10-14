<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$rusuario =isset($_POST['rusuario']) ? $_POST['rusuario']:null;
$rpassword = isset($_POST['rpassword'])? $_POST['rpassword']:null;

($rusuario != null)?setcookie("usuario",$usuario):setcookie("usuario",$usuario,time()-1);
($rpassword != null)?setcookie("password",$password):setcookie("password",$password,time()-1);

echo $usuario,"<br>";
echo $password,"<br>";
?>
<meta http-equiv="refresh" content="3; url=login.php">