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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="container">
    <div class="cabeza">
          <div class="img">
            <img  src="images/logo.png" alt="">
          </div>
       
        <div class="letras"> <p class="letra1"> Carrera Ing de sistemas - Ing en Ciencias de la Computacion  <span class="letra2">semestre 2-2021</span>  <br>
       
    </div>
    <div class="cuerpo">
        <div class="menu-izq">
            <nav class="nav1">
                <a href="#" onclick="llamada1()">Pregunta 1</a>
                <a href="#" onclick="llamada3()">Pregunta 3</a>
                <a href="#" onclick="llamada5()">Pregunta 5</a>
            </nav>

        </div>
        <div class="medio">
 
        </div>
        <div class="menu-der">
            <nav class="nav2">
                <a href="">Pregunta 2</a>
                <a href="#" onclick="llamada4()">Pregunta 4</a>
            </nav>

        </div>

    </div>
     <div class="pie">
         <div class="dentro">
         <div>Alumno: Ariel Achu Gabriel</div>
        <div>Cu: 10350511</div>
		<div> nro ingresos: <?php echo $_COOKIE['pudo']; ?>
     </div>
         </div>
     
</div>



</div>
<script src="javascript.js"></script>
</body>
</html>