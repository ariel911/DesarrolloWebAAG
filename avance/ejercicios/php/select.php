<?php
require("coneccion.php");
$sql = "SELECT * FROM usuarios";
$resultado = $mysqli -> Query($sql);

  if($resultado->num_rows>0){
      while($row = $resultado->fetch_assoc()){ //fetch listas de fila con los atributos
          echo "<pre>";
          var_dump($row);
          echo "</pre>";

          echo $row["id"];
          echo "<br>";
          echo $row["usuario"];
          echo "</br>";
          echo $row["password"];
          echo "</br>";
          echo $row["nombre"];

      }

  }else{
      echo "NO hay usuarios";
  }
?>