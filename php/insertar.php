<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNAD - F4U3 - Diseño e implementacion backend - 2021 - Registrar Producto</title>
    <meta name="description" content="El propósito de este sitio es Implementar sitios web interactivos haciendo uso de lenguajes de programación web del lado del servidor, bases de datos y librerías para la ejecución proyectos web que den solución a problemáticas planteadas."/>
    <meta name="keywords" content="aplicativo, javascript, frameworks, proyecto web, etiquetas, HTML, Bootstrap, PHP, MySQL"/>
    <link rel="stylesheet" href="css/estilos.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</head>
<body>

 <?php

require('config.php');

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$sql = "INSERT INTO tabla10 (codigo, nombre, marca, precio, cantidad) VALUES ('$codigo', '$nombre', '$marca', '$precio', '$cantidad')";

if (mysqli_query($conn, $sql)) {

?>
<!-- The Modal -->
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Excelente</h4>
          <button class="close" onclick="location.href='../registrar.html'">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          Producto Registrado Safisfactoriamente
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../registrar.html'">Cerrar</button>
        </div>
      </div>
    </div>
 <?php
} else 
{
?>
<!-- The Modal -->
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='../registrar.html'">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <?php
          echo "Error Registrando el Producto: <br>" . $sql . "<br>" . mysqli_error($conn);
          ?> 
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../registrar.html'">Cerrar</button>
        </div>
      </div>
    </div>
 <?php
}
mysqli_close($conn);
?>
</body>
</html>