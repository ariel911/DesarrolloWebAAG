<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //ejercicio 1
    echo"<p> <strong>1.- Realizar un programa en php que permita calcular el mayor de 3 numeros </strong><p>";
    $num1 =6;
    $num2 =8;
    $num3 =9;
    $resultado=0;
    $resultado = ($num1>=$num2 and $num1>=$num3)? $num1: (($num2>=$num1 and $num2>=$num3)? $num2:$num3);
    echo "El mayor de ".$num1." , ".$num2." y ".$num3." es : ".$resultado."<br>";

    //ejercicio 2
    echo"<p> <strong>2.- Realizar un programa en php que calculeel factorial de n, que tiene un valor de 7 </strong><p>";
    $n=7;
    $r=1;
     for($i=7;$i>=1;$i--){
         $r*=$i;
     }
     echo"El factorial de 7 es: ".$r;
     ?>
     //ejercicio 3
     
    <?php 
    echo"<p> <strong>3.- imprimir la tabla de  sumas del 1 al 10 del numero 2 </strong><p>";
    for($i=1;$i<=10;$i++){
            echo"2 + ".$i." = ".($i+2)."<br>";
           }
           
    ?>
    <?php 
     echo"<p> <strong>4.- Determinar si n es un numero primo </strong><p>";
    $n=7;
    $i=1;
    $cont=0;
    echo "El número ".$n." es primo?<br>";
    while ($i<=$n) {
        if($n % $i == 0)
         $cont++;
        $i++;
    }
    echo($cont==2)?"El nÚmero ".$n." SI es primo":"El nÚmero".$n." NO es primo";

    ?>

      
     

    
</body>
</html>