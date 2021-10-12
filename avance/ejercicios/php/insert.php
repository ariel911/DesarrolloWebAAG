<?php
require('coneccion.php');
$mi_nombre="ariel";
$mi_usuario="usuario";
$mi_password="password";

$sql = "INSERT INTO usuarios(id,nombre,usuario,password) VALUES(NULL,'$mi_nombre','$mi_usuario','$mi_password')";

$resultado=$mysqli->query($sql);

if($resultado){
    if($mysqli->affected_rows > 0){
        echo "Usuario se inserto correctamente";
    }else{
        echo "Ese usuario no existe";
    }
    

}else{
    echo "Hubo un error al insertar usuario".$mysqli->error;
}
?>