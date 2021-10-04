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
    $n = $_GET['num'];
    ?>
    <form action="suma.php" method="GET">
       <input type="hidden" value="<?php echo $n ?>" name="n">
       <input type="submit" value="+" name="suma">
    </form>
    <form action="resta.php" method="GET">
       <input type="hidden" value="<?php echo $n ?>"  name="n">
       <input type="submit" value="-" name="resta">
    </form>
    <form action="multiplicacion.php" method="GET">
       <input type="hidden" value="<?php echo $n ?>"  name="n">
       <input type="submit" value="*" name="multi">
    </form>
    <form action="division.php" method="GET">
       <input type="hidden" value="<?php echo $n ?>" name="n" >
       <input type="submit" value="/" name="divi">
    </form>
        
       
        
        
        
  
   
 

        


</body>
</html>