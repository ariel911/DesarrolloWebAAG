<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="suma.php" method="POST">
    <?php 
     $n = $_POST["n"]; 
   
      for($i=1;$i<=$n;$i++){   ?>
         <input type="text" name="n<?php echo $i;?>">
          
      <?php  } ?>
      <br>
      <br>
      <?php 
      for($i=1;$i<=$n;$i++){   ?>
         <input type="text" name="m<?php echo $i;?>">
          
      <?php  } ?>
    <input type="hidden" name="n" value="<?php echo $n ?>">
    <input type="submit" value="calcular">

   

    </form>
</body>
</html>