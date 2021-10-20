<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ordenar.php"  method="post">
<?php
$n = $_POST['n'];

for($i=0;$i<$n;$i++){
    echo "<input type='num' name='A$i'>";
}

?>
<input type="hidden" name="n" value="<?php echo $n ?>">
<input type="submit" value="calcular">
</form>
</body>
</html>
