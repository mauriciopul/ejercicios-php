<html>
 <head>
 <?php
  //Creamos los parametros iniciales
  //estos podrían proceder de un formulario, sql, etc...
  $filas = 10;
  $columnas = 15;
  $texto = 0;
  $grey = true;
  ?>
 </head>
 <body>

<!-- Creamos el inicio de la tabla manualmente-->
<table border="1">
 <?php
 //Iniciamos el bucle de las filas
 for($t=0;$t<$filas;$t++){
  echo "<tr>";
  //Iniciamos el bucle de las columnas
  for($y=0;$y<$columnas;$y++){
   if($grey){
    //Pintamos el cuadro
    echo "<td style=padding:20px;
        background-color:#F5D0A9;>".$texto."</td>";
    //El próximo no será pintado
    $grey=false;
    $texto++;
   }else{
    //Dejamos cuadro en blanco
    echo "<td style=padding:20px;>".$texto."</td>";
    //El próximo será pintado
    $grey=true;
    $texto++;
    }
   }
   //Cerramos columna
   echo "</tr>";
  }
 ?>
 <!-- Cerramos tabla -->
 </table>
 </body>
 </html>
