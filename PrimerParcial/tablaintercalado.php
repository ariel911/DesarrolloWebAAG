<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$n = $_POST['n'];
$m = $_POST['m'];
?>
<table border=1>
<?php
$cont=0;
for($i=0;$i<$n;$i++){
    echo "<tr>";
    if($cont == 3){
        $cont=0;
    }
    $cont++;
    for($j=0;$j<$m;$j++){
       
         if($i % 2 == 0){
            $color = 'blanco';
            $color2 = 'azul';
            
         }else{
            $color2 = 'blanco';
            $color = 'rojo';
         }
        
        if($i % 2==0 && $cont < 2){
            if($j % 2==0){
            echo "<td class='$color2'> Viva </td>";

            }else{
                echo "<td class='$color'> Cuna </td>";
                
            }
        }elseif($i % 2==1 && $cont < 3){
            
            if($j % 2==0){
                echo "<td class='$color2'> Mi </td>";
               
                }else{
                    echo "<td class='$color'> De </td>";
                   
                }
        }else{
            if($j % 2==0){
                echo "<td class='$color2'> Sucre </td>";
               
                }else{
                    echo "<td class='$color'> Libertad </td>";
                 
                }
        }
           
        
        
    }
    
    echo "</tr>";
}

?>

</form>
</body>
</html>
