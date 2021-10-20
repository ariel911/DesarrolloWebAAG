
<?php
$n = $_POST['n'];

for($i = 0; $i < $n; $i++){
    $arreglo[$i]= $_POST['A'.$i];
}
for ($i=0; $i<$n-1; $i++)
{
    $min=$i;
    for($j=$i+1; $j<$n; $j++){
       if($arreglo[$min] >$arreglo[$j]){
        $min=$j;
         $aux=$arreglo[$min];
          $arreglo[$min]=$arreglo[$i];
          $arreglo[$i]=$aux ;
       }
     }
}

echo "<h3>Vector ordenado </h3>";
for($i=0;$i<$n;$i++){
    echo $arreglo[$i]." ";
}  
?>

<meta http-equiv="refresh" content="3; url=index.php">