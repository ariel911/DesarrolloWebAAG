<?php
session_start();
require_once("operaciones.php");
$a = $_SESSION['a1'];
$b = $_SESSION['b1'];
$c =$_SESSION['c1'];

$operaciones = new operaciones($a, $b, $c);
$operaciones->mostrarCalculos();
