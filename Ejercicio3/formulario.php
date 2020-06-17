<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Indice de masa corporal</title>
    <style>
        .box{
            width: 100px;;
            height: 100px;
            border-radius: 50%;
        }
    </style>


</head>
<body class="bg-dark h-100">
    
   <?php
   $nombre = $_POST["nombre"];
   $peso = $_POST["peso"];
   $estatura = $_POST["estatura"];

   $masaCorporal = $peso / ($estatura ** 2);
   $prueba = pow($estatura , 2);
   ?>
<!-- peso : 80  estatura : 175-->
    <div class="conteiner">
        <div class="row my-3">
            <div class="col-5 mx-auto">
                <div class="card">
                    <div class="card-header"><?php echo "<p class=\"h1 text-center\">". $nombre ."</p>"; ?>
                </div>
                <div class="card-body">
                        <?php
                        if($masaCorporal <0.00185 ){
                            echo "<p class=\"text-center h2\"> Por debajo del peso </p>";
                            echo "<div class=\"mx-auto box bg-info\"></div>";
                        }elseif($masaCorporal >= 0.00185 && $masaCorporal <0.00249){
                            echo "<p class=\"text-center h2\"> Saludable</p>";
                            echo "<div class=\"mx-auto box bg-success\"></div>";
                        }elseif($masaCorporal >= 0.00250 && $masaCorporal <0.00299){
                            echo "<p class=\"text-center h2\"> Con sobrepeso</p>";
                            echo "<div class=\"mx-auto box bg-warning\"></div>";
                        }elseif($masaCorporal >= 0.00300 && $masaCorporal <0.00399){
                            echo "<p class=\"text-center h2\"> Obeso</p>";
                            echo "<div class=\"mx-auto box bg-danger\"></div>";
                        }else if($masaCorporal >0.0040){
                            echo "<p class=\"text-center h2\"> Obesidad mórbida</p>";
                            echo "<div class=\"mx-auto box bg-secondary\"></div>";
                        }

                        ?>
                        </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>