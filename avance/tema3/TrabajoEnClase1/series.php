<?php

function fibonaci($n){
    $num1=1;
    $num2=0;
    $s=0;
        for ($i=0;$i<=$n;$i++ ){
            echo $s.",";
            $s=$num1+$num2;
            $num1 = $num2;
            $num2 = $s;
        }
}

?>