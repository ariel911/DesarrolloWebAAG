<?php

if (isset($_COOKIE['pudo'])) {
	$valor=$_COOKIE['pudo']+1;
	setcookie("pudo",$valor,time()+3600); /* expira en 1 hora */
}else{
   setcookie("pudo",1,time()+3600); /* expira en 1 hora */
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php session_start();?>
    <div class="contenedor">

        <div class="cabeza">
          
            <img src="img/logo.png" alt="">
            <div class="letras"> <p class="letra1"> Carrera Ing de sistemas - Ing en Ciencias de la Computacion <br>
            <p class="letra2">semester 2-2021</p></div>
           
        </div>
        <div class="derecha">
            <ul class="menu">
                <li><a href="#">inicio </a></li>
				<li><a href="menu.php">pregunta2</a></li>

            </ul>
        </div>

        <div class="izquierda">
            <br>
           <p>Primer examen de programacion Internet Intranet <br>
           

        </div>
        <div class="derecha derecha2">
            <ul class="menu">
				<li><a href="formulario.html">pregunta3</a></li>
				<li><a href="formulario2.html">pregunta4</a></li>
            </ul>
        </div>

        <div class="pie">
		<div>Alumno: Ariel Achu Gabriel</div>
        <div>Cu: 10350511</div>
		<div> nro ingresos: <?php echo $_COOKIE['pudo']; ?>
	 </div>

    
    </div>
</body>
</html>