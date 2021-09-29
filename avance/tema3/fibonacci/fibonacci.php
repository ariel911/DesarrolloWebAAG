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
   $num1=1;
   $num2=0;
   $n=10;
   $s=0;
   
   for ($i=0;$i<=$n;$i++ ){
        echo $s.",";
       $s=$num1+$num2;
       $num1 = $num2;
       $num2 = $s;
   }
?>




</body>
</html>

