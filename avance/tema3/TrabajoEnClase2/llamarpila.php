<?php
  include("pila.php");

  $pila=new pila();
  $pila->insertar("ariel");
  $pila->insertar("jose");
  $pila->insertar("carlos");

  $pila->mostrar();


?>