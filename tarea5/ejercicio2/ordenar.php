<?php

include("vector.php");

$v1 = new vector([3,1,6,3,2,518,2,45,3]);
echo "vector desordenado <br>";
$v1->imprimir();
$v1->burbuja();
echo "<br>";
echo "vector ordenado metodo burbuja <br>";
$v1->imprimir();

echo "<br>";
echo "vector ordenado metodo seleccion <br>";
$v1->seleccion();
$v1->imprimir();
?>