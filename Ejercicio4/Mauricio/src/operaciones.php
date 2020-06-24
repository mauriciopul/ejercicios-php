<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>Resultados</title>
    
    <?php

    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $monto = $_POST["monto"];
    $interes = $_POST["tasaInteres"] ;
    $tasaInteres = $interes / 100;
    $plazo = $_POST["plazo"];
    $x = ((1 + $tasaInteres) ** $plazo);

    $dividento = $tasaInteres * $x;
    $divisor = $x - 1;

   /*  echo "Cedula: $cedula <br /><br />";
    echo "Nombre: $nombre <br /><br />";
    echo "Monto: $monto <br /><br />";
    echo "Interes: $interes%<br /><br />";
    echo "Plazo: $plazo  meses<br /><br />"; */

    $cuotaFija = $monto * ($dividento / $divisor);
    $cuota = number_format($cuotaFija, 2, '.', '');

  /*   echo "Cuota: $ $cuota <br /><br />"; */

    ?>
  </head>
  <body class="bg-secondary">

<?php
  for ($i=0; $i < $plazo+1; $i++) {
    // code...
/*     echo "cuotas <br />"; */
  }
 ?>

     <div class="container">

     <table class="table table-dark table-hover table-bordered">
       <thead>
         <tr>
           <th scope="col">Cedula</th>
           <th scope="col">Nombre</th>
           <th scope="col">Monto</th>
           <th scope="col">Interes</th>
           <th scope="col">Plazo</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <th scope="row"><?php $nombre ?></th>
           <td>Mark</td>
           <td>Otto</td>
           <td>@mdo</td>
           <td>sdsdf</td>
         </tr>
         <tr>
           <th scope="row">2</th>
           <td>Jacob</td>
           <td>Thornton</td>
           <td>@fat</td>
         </tr>
         <tr>
           <th scope="row">3</th>
           <td>Larry</td>
           <td>the Bird</td>
           <td>@twitter</td>
         </tr>
       </tbody>
     </table>

    </div>


      <div class="d-flex justify-content-center">
        <a href="../index.html"><button type="button" class="btn btn-primary " name="regresar">Regresar</button></a>
      </div>
    
  </body>
</html>
