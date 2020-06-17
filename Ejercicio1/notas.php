<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Resultados</title>
    <style>
        .msg{
            border-radius: 50%;
        }
    </style>
</head>
<body class="bg-dark">

<?php
            
            $nt1 = $_POST["nt1"];
            $nt2 = $_POST["nt2"];
            $nt3 = $_POST["nt3"];
    
            $exm = $_POST["exm"];
    
            $tbrF = $_POST["tbrF"];
    
            $notas = (($nt1 + $nt2 + $nt3) / 3) * 0.35;
            $examen = $exm * 0.35;
            $trabajoF = $tbrF * 0.30;
            $resultado = $notas + $examen +$trabajoF;
    
            
        ?>

        <div class="container ">
            <div class="row my-3">
                <div class="col-4 mx-auto">
                  <div class="mx-auto text-white">
                 
                  <p class="display-1">
                  
                  <?php
                    if($resultado > 3){
                        echo "Aprovado <span class=\"text-muted\">". $resultado ."</span>";
                        echo  "<div class=\"msg bg-success mx-auto\" style=\"width: 100px; height: 100px;\"></div>";
                    }else{
                        echo "Reprobado <span class=\"text-muted\">". $resultado ."</span>";
                        echo  "<div class=\"msg bg-danger mx-auto\" style=\"width: 50px; height: 50px;\"></div>";
                    }
                    ?>
                  </p>
                 
                  </div>
                </div>
            </div>
        </div>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>