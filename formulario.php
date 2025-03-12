<?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$cidudad = $_POST['ciudad'];
$peso= $_POST['peso'];
$servicio = $_POST['servicio'];
$valor = $_POST['valor'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa de envio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!-- Inicio del cuerpo del HTML -->

    <div class="container-md">
        <div class="row mb-3">
            <h1>Formulario de Envio</h1>
        </div>

        <form action="formulario.php" method="post">
            <div class="row mb-3">
                <!-- Campo para el nombre del cliente -->
                <div class="col-6">
                    <label for="nombre" class="form-label">Nombre del Cliente:</label>
                    <input type="text" class="form-control"
                    value="<?php echo $nombre; ?>" 
                    disabled="disabled">
                </div>
                <!-- Campo para la direccion del destino -->
                <div class="col-6">
                    <label for="direccion" class="form-label">Direccion del Destino:</label>
                    <input type="text" class="form-control" 
                    value="<?php echo $direccion; ?>"
                    disabled="disabled">
                </div>
                <!-- Campo para la ciudad de destino -->
                <div class="col-6">
                    <label for="ciudad" class="form-label">Ciudad de Destino:</label>
                    <input type="text" class="form-control" 
                    value="<?php echo $ciudad; ?>"
                    disabled="disabled">
                </div>
                <!-- Campo para el peso del producto -->
                <div class="col-6">
                    <label for="peso" class="form-label">Peso (kg):</label>
                    <input type="text" class="form-control" 
                    value="<?php echo $peso; ?>"
                    disabled="disabled">
                </div>
                <!-- Campo para el tipo de servicio -->
                <div class="col-6">
                    <label for="servicio" class="form-label">Tipo de Servicio (kg):</label>
                    <input type="text" class="form-control"
                    value="<?php echo $servicio; ?>"
                    disabled="disabled">
                </div>
                <!-- Campo para el valor declarado -->
                <div class="col-6">
                    <label for="valor" class="form-label">Valor declarado:</label>
                    <input type="text" class="form-control" 
                    value="<?php echo $valor; ?>"
                    disabled="disabled">
                </div>


                <!-- Botón para volver al formulario -->
                <div class="col-12 mt-3">   
                    <a href="index.html" class="btn btn-primary">Volver</a>
                </div>
        </form>
    </div>



    <!-- Enlace al script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>