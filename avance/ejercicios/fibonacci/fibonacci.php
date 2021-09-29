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


//fibonacci recursivo
<?php
    function fibonaci($num){
        if($num == 0)
            return 0;
        if($num == 1)
            return 1;
        if($num > 1){
            return fibonaci($num-1)+fibonaci($num-2);
        }
        
        echo  fibonaci($num-1)+fibonaci($num-1);   
        return fibonaci($num-1)+fibonaci($num-1);
    }
    echo fibonaci(6);

?>
</body>
</html>

