<?php
$mysqli = new mysqli("localhost","root","","curso");


if($mysqli->connect_errno){

    echo "algo salio mal, intentalo de nuevo mas tarde";
}

?>