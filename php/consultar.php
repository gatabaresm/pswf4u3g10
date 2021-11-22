<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNAD - F4U3 - Diseño e implementacion backend - 2021 - Consultar Producto</title>
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

$codigo = $_POST['codigo'];


$sql = "SELECT * FROM tabla10 WHERE codigo=$codigo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

       ?>

      <link rel="stylesheet" href="../css/estilos.css">
      <br>
      <section class="registrar-producto">
          <h4>Consultar Productos</h4>

              <label>Codigo del Producto:</label>
              <input type="text" class="controles" value=" <?php echo $row['codigo'] ?> " id="codigo" placeholder="Ingrese aquí el código del Producto" name="codigo" readonly>
              <label>Nombre del Producto:</label>
              <input type="text" class="controles" value=" <?php echo $row['nombre'] ?> " id="nombre" placeholder="Ingrese aquí el nombre del Producto" name="nombre" readonly>
              <label>Marca del Producto:</label>
              <input type="text" class="controles" value=" <?php echo $row['marca'] ?> " id="marca" placeholder="Ingrese aquí la marca del Producto" name="marca" readonly>
              <label>Precio del Producto:</label>
              <input type="text" class="controles" value=" <?php echo $row['precio'] ?> " id="precio" placeholder="Ingrese aquí el precio del Producto" name="precio" readonly>
              <label>Cantidad de Producto comprado:</label>
              <input type="text" class="controles" value=" <?php echo $row['cantidad'] ?> " id="cantidad" placeholder="Ingrese aquí la cantidad de Producto comprado" name="cantidad" readonly>

              <a class="btn btn-danger" href="../consultar.html" role="button">Volver</a>

      </section>
      </br>

  <?php

    }

} else {

  ?>

<!-- Ventana Modal -->
    <link rel="stylesheet" href="../css/estilos2.css">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='../consultar.html'">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <?php
              echo "El Producto no existe " . "<br>";
          ?>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../consultar.html'">Cerrar</button>
        </div>
      </div>
    </div>

  <?php

}

    mysqli_close($conn);
  ?> 

    </main>
    <footer id="footer" id="../footer"></footer>
</body>
</html>