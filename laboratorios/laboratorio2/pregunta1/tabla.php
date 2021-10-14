<?php
  $fila=$_POST['tabla'];
  $columna=$_POST['columna'];   
  $array=array();
  echo "<table border='1'>";
   $cont = 0;
   for($i = 0; $i<=$fila ; $i++){
     echo "<tr>";
     for($j = 0  ; $j<=$columna ; $j++){
     if($i == 0 || $j == 0){
      echo"<td id='td'>";
      $r=($i+$j);
      echo $r."</td>";
     }else{
       echo "<td>";
     }
     if(($i*$j) > 0){
      echo $j*$i."</td>";
     }
     
     
    
     }
     echo "</tr>";
   
}
echo "</table>";

?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
</body>
</html>