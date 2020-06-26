<?php
 
       if($_POST){
            $cedula = $_POST["cedula"];
            $nombre = $_POST["nombre"];
            $monto = $_POST["monto"];
            $interes = $_POST["interes"];
            $plazo = $_POST["plazo"];
       }

       $saldo = $monto;
       $interes = $interes / 100;
       
       $cuotaFinal = $monto * ($interes * ((1 + $interes) ** $plazo)) / ((1 + $interes) ** $plazo -1);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Tabla de amortización</title>
</head>
<body class="bg-secondary">
    <div class="container">
        <div class="row my-2">
            <div class="col">
                <div class="card my-2 h3">Cedula: <?php echo $cedula?>  Cliente:<?php echo $nombre?></div>

                <table class="table table-hover bg-dark text-white table-dark table-bordered">
                    <thead>
                        <th>No.Cuota</th>
                        <th>Saldo Anterior</th>
                        <th>Valor Cuota Fija</th>
                        <th>Abono Interés</th>
                        <th>Abono Capital</th>
                        <th>Nuevo Saldo</th>
                    </thead>

                        <?php
                             for($i = 1; $saldo >1 ; $i++){ ?>
                              
                                <tr>
                                    <td> <?php echo $i?></td>
                                    <td> <?php echo number_format($saldo) ?> </td>
                                    <td> <?php echo number_format($cuotaFinal) ?> </td>
                                    <td> <?php $abono = ($saldo * $interes) ; echo number_format($abono)?> </td>
                                    <td> <?php $abnCapital = $cuotaFinal - $abono; echo number_format($abnCapital) ?> </td>
                                    <td> <?php $saldo -= $abnCapital; echo number_format($saldo) ?> </td>
                                    
                                </tr>

                        <?php } 
                        ?>
                </table>
            </div>
        </div>
    </div>
    



    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
