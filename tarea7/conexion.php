<?php
$conn=new mysqli("localhost","root","","bd_hotel");
if($conn->connect_errno){
    echo "Error al conectar con la base de datos";
    exit();
}
?>