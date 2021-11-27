<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNAD - F4U3 - Diseño e implementacion backend - 2021 - Crear BD</title>
    <meta name="description" content="El propósito de este sitio es Implementar sitios web interactivos haciendo uso de lenguajes de programación web del lado del servidor, bases de datos y librerías para la ejecución proyectos web que den solución a problemáticas planteadas."/>
    <meta name="keywords" content="aplicativo, javascript, frameworks, proyecto web, etiquetas, HTML, Bootstrap, PHP, MySQL"/>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
    </script>
    <script> 
      $(function(){
        $("#header").load("../header.html"); 
        $("#footer").load("../footer.html"); 
        $("#nav").load("nav.html"); 
      });
    </script>
</head>
<body>
    <link rel="stylesheet" href="../css/estilos2.css">
    <header class="container" id="header"></header>

    <section id="nav"></section>

<main class="container">

<?php

require('config.php');

// sql para crear la tabla
$sql = "CREATE TABLE tabla10 (
codigo INT(10) PRIMARY KEY,
nombre VARCHAR(15),
marca VARCHAR(15),
precio INT(20),
cantidad INT(20)
)";

if (mysqli_query($conn, $sql)) {
 ?>
 <!-- Ventana Modal -->
     <div class="modal-dialog">
       <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
           <h4 class="modal-title">Excelente</h4>
           <button class="close" onclick="location.href='../index.html'">&times;</button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
           Tabla de productos creada satisfactoriamente
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
           <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
         </div>
       </div>
     </div>
<?php
 } else {
  ?>
 <!-- Ventana Modal -->
     <div class="modal-dialog">
       <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
           <h4 class="modal-title">Error</h4>
           <button class="close" onclick="location.href='../index.html'">&times;</button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
           <?php
           echo "Error creando tabla de productos: " . mysqli_error($conn);
           ?> 
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
           <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
         </div>
       </div>
     </div>
  <?php
 }
 mysqli_close($conn);
 ?>
<<<<<<< HEAD
<<<<<<< Updated upstream
=======

</main>
<footer id="footer"></footer>

>>>>>>> Stashed changes
=======

</main>
<footer id="footer" id="footer"></footer>

>>>>>>> 2_GAT_Todo
</body>
</html>