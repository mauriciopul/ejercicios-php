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
    $titulos = array('N° Cuota','Saldo Anterior',' 	Valor Cuota Fija',' 	Abono Intereses',' 	Abono Capitál','Nuevo Saldo');
    $filas = $plazo+1;
    $columnas = count($titulos);


   /*  echo "Cedula: $cedula <br /><br />";
    echo "Nombre: $nombre <br /><br />";
    echo "Monto: $monto <br /><br />";
    echo "Interes: $interes%<br /><br />";
    echo "Plazo: $plazo  meses<br /><br />"; */

    $cuotaFija = $monto * ($dividento / $divisor);
    $cuota = number_format($cuotaFija, 2, '.', '');

    echo "Cuota: $ $cuota <br /><br />";
    $saldoAnterior = $monto;
    $saldoAnterior = $saldoAnterior - $abonoCapital;
    $abonoIntereses = ($saldoAnterior * $interes)/100;
    $abonoCapital = $cuotaFija - $abonoIntereses;
    $nuevoSaldo = $saldoAnterior - $abonoCapital;
    echo "Saldo anterior: $saldoAnterior<br />";
    echo "Abono Intereses: $abonoIntereses<br />";
    echo "Abono Capital: $abonoCapital<br />";
    echo "Nuevo Saldo: $nuevoSaldo<br />";

    ?>
  </head>
  <body class="bg-secondary">

   <!--
   Saldo anterior   =
   Valor Cuota Fija
   Abono Intereses  = (saldo anterior * tasa intereses) / 100
   Abono Capital    = cuita fina - abono intereses
   Nuevo Saldo      = saldo anterior - abono capital


   --------------------------------------------------------------->

     <div class="container">

     <table class="table table-dark">
       <?php
           for ($i=0; $i < $filas; $i++) {
             echo "<thead><tr>";

                  for ($j=0; $j < $columnas; $j++) {
                    if ($i==0) {
                      echo "<td> $titulos[$j] </td>";
                    }elseif($i>0&& $j==0){
                      echo "<td> $i </td>";
                    }elseif($i>0&& $j==1){
                      echo "<td>".$cuotaSaldoAnterior = number_format($saldoAnterior, 2, '.', '');
                       $saldoAnterior = $saldoAnterior - $abonoCapital ."</td>";
                     }elseif($i>0&& $j==2){
                       echo "<td>$cuota</td>";
                     }elseif($i>0&& $j==3){
                       echo "<td>".$r =  number_format((($saldoAnterior * $interes)/100), 2, '.', '');
                       $t = ($saldoAnterior * $interes)/100 ."</td>";
                     }elseif($i>0&& $j==4){
                       echo "<td>$cuota</td>";
                     }elseif($i>0&& $j==5){
                       echo "<td>$cuota</td>";
                     }
                    else {
                      echo "<td>I: $i// J: $j-----</td>";
                    }
                  }
              echo "</tr></thead>";
           }

        ?>


        </table>

    <!---------------------------------------------------------------------------------------------------------->

      <div class="d-flex justify-content-center">
        <a href="../index.html"><button type="button" class="btn btn-primary " name="regresar">Regresar</button></a>
      </div>

  </body>
</html>
