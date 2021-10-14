
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>
    <label>PHP <?php echo isset($_SESSION['PHP'])?$_SESSION['PHP']:0 ?></label><br>
    <label>JAVA<?php echo isset($_SESSION['JAVA'])?$_SESSION['JAVA']:0 ?></label><br>
    <label>C# <?php echo isset($_SESSION['C#'])?$_SESSION['C#']:0 ?></label><br>
    <label>PYTHON <?php echo isset($_SESSION['PYTHON'])?$_SESSION['PYTHON']:0 ?></label><br>
    <label>JAVASCRIP <?php echo isset($_SESSION['JAVASCRIPT'])?$_SESSION['JAVASCRIPT']:0 ?></label><br>
    <meta http-equiv="refresh" content="4; url=main.html">
</body>
</html>