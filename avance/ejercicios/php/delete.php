<?php

require('coneccion.php');


$sql = "DELETE FROM usuarios WHERE id=3";

$resultado = $mysqli->query($sql);

if($resultado){
    if($mysqli->affected_rows > 0){
        echo "se elimino correctamente";
    }else{
        echo "NO se elimino correctamente";
    }

}else{
    echo "Hubo un error al insertar usuario".$mysqli->error;
}

?>