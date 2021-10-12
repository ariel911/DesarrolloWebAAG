<?php

require('coneccion.php');

$sql = "UPDATE usuarios SET usuario='arieluchin' where nombre='ariel'";
$resultado=$mysqli->query($sql);
if($resultado){
    echo "modificado exitoso";
}else{
    echo "no se modifico correctamente";
}

?>