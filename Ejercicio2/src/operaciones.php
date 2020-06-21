<?php

  $nombre = $_POST['nombre'];
  $cantidad=$_POST['cantidad'];
  $valor=$_POST['valor'];

  $salarioBase = 737000;
  $comisionBaseAuto = 50000;
  $comisionPorcentajeVenta = 0.05;
  $totalComisionPorcentaje = $valor * $comisionPorcentajeVenta;
  $totalComisionCantidad = $cantidad * $comisionBaseAuto;

  $totalSalario = $salarioBase + $totalComisionCantidad + $totalComisionPorcentaje;

  echo "<h2>Informacion de Venta</h2>";
  echo "nombre del vendedor: ".$nombre."<br />";
  echo "Cantidad autos: ".$cantidad."<br />";
  echo "Salari para este mes: ".$totalSalario."<br />";

?>

<a href="../index.html"><br><button type="submit"
  href="../index.html" class="btn btn-primary btn-block">Regresar</button></a>
