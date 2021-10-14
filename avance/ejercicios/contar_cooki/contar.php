<?php


$cookie_nombre = $_POST['lenguaje'];


isset($_COOKIE[$cookie_nombre])? $_COOKIE[$cookie_nombre]++:$_COOKIE[$cookie_nombre]=1;

setcookie($cookie_nombre,$_COOKIE[$cookie_nombre],time()+3600);

?>
<h1>dato enviado correctamente</h1>
<meta http-equiv="refresh" content="3; url=main.html">