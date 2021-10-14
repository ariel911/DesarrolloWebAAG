<?php
session_start();
$session_nombre = $_POST['lenguaje'];
isset($_SESSION[$session_nombre])? $_SESSION[$session_nombre]++:$_SESSION[$session_nombre]=1;
?>
<h1>dato enviado correctamente</h1>
<meta http-equiv="refresh" content="3; url=main.html">