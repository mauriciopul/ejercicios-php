<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Tabla</title>
</head>
<body class="bg-secondary">
        
    <div class="container">
        <div class="row my-2">
            <div class="col mx-auto">
                <div class="card">
                    <div class="card-header h1 text-center">Armotización de credito</div>
                    <div class="card-body">
                        <form action="resultado.php" method="POST">

                        <div class="form-group">
                                <label for="cedula" class="form-label">Cedula:</label>
                                <input type="text" name="cedula" id="cedula" class="form-control">                          
                        </div>
                       
                        <div class="form-group">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="monto" class="form-label">Monto del crédito:</label>
                            <input type="text" name="monto" id="monto" class="form-control">
                        </div>

                        <div class="from-group">
                            <label for="interes" class="form-label">Tasa de interés mensual:</label>
                            <input type="text" id="interes" name="interes" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="plazo" class="form-label">Plazo en meses:</label>
                            <input type="text" name="plazo" id="plazo" class="form-control">
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                        </form>
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