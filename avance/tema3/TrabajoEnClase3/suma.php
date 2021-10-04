<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>suma del vector:</h2>
    <?php
    
    $resultado=0;
     $n = $_POST['n'];
     for($i=1;$i<=$n;$i++){
         $resultado = $x = $_POST['n'.$i]+$_POST['m'.$i];
         echo $resultado." ";

     }
    ?>
</body>
</html>