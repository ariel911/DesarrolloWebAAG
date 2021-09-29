<?php
    if(isset($_POST['operacion'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['operacion'];
           

        //!empty = verifica si no hay algun elemento "!"
        if(!empty($num1) && !empty($num2) && !empty($op)){
            //comprobamos que los numeros y variables no vengan vacio
            if(is_numeric($num1) && is_numeric($num2)){
                //comprobamos que nos esten enviando numeros
                if($op == "+"){
                    //Es una suma, sumamos
                  $resultado = $num1 + $num2;
                }else if($op == "-"){
                    $resultado = $num1 - $num2;
                }else if($op == "*"){
                    $resultado = $num1 * $num2;
                }else if($op == "/"){
                    $resultado = $num1 / $num2;
                }else{
                    $resultado="esa no es una operacion valida";
                }
            }else{
                $resultado="esos no son numeros";
            }
            
        }else{
            $resultado = "debes de teclear los numeros";
       }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="cal">
            <h2>Calculadora</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <label> Digita el Primer Numero:</label>
                <input type="number" name="num1" value="<?php if(isset($_POST['num1'])) echo $_POST['num1']?>">
                <label> Digita el Segundo Numero:</label>
                <input type="number" name="num2" value="<?php if(isset($_POST['num2'])) echo $_POST['num2']?>">
                <div class="op">
                    <input type="submit" name="operacion" value="+">
                </div>
                <div class="op">
                    <input type="submit" name="operacion" value="-">
                </div>
                <div class="op">
                    <input type="submit" name="operacion" value="*">
                </div>
                <div class="op">
                    <input type="submit" name="operacion" value="/">
                </div>
                <h3 class="resultado">
                    <?php
                    if(isset($resultado)){
                        echo $resultado;
                    }
                    
                    ?>
                </h3>
            </form>
        </div>
    </div>
    
</body>
</html>