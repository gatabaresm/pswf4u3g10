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
// variables

date_default_timezone_set("America/Bogota");

require('config.php');

//Para utilizar Mysqldump y realizar el respaldo, se debe declarar una variable haciendo referencia a la ubicacion del archivo mysqldump.exe
$mysqldump='"../../../MySQL/bin/mysqldump.exe"';
$backup_file = '"../backups/"'.$dbname. "-" .date("Y-m-d-H-i-s"). ".sql";
system("$mysqldump --no-defaults -u $username -p$password $dbname > $backup_file",$output);

//var_dump($output);  //para mostrar el resultado de la operación, 0 satisfactoria, 1 error en path, 2 error en conexión a base de datos

switch($output){
case 0:

?>

<!-- The Modal -->
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Excelente</h4>
          <button class="close" onclick="location.href='../index.html'">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body"> 
    <?php
        echo 'La base de datos <b>' .$dbname .'</b> se ha almacenado correctamente en la siguiente ruta '.getcwd().'/' .$backup_file .'</b>';
    ?>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
        </div>
      </div>
    </div>

 <?php

break;
case 1:

?>

<!-- The Modal -->
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
        echo 'Se ha producido un error al exportar <b>' .$dbname .'</b> a '.getcwd().'/ verifique la siguiente ruta: ' .$backup_file .'</b>';
    ?>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
        </div>
      </div>
    </div>

 <?php

break;
case 2:

?>

<!-- The Modal -->
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
        echo 'Se ha producido un error de exportación, compruebe la siguiente información: <br/><br/><table><tr><td>Nombre de la base de datos:</td><td><b>' .$dbname .'</b></td></tr><tr><td>Nombre de usuario MySQL:</td><td><b>' .$username .'</b></td></tr><tr><td>Contraseña MySQL:</td><td><b> '.$password.' </b></td></tr><tr><td>Nombre de host MySQL:</td><td><b>' .$servername .'</b></td></tr></table>';
    ?>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
        </div>
      </div>
    </div>

 <?php

break;
}

mysqli_close($conn);
?>

</main>
<<<<<<< HEAD
<footer id="footer"></footer>
=======
<footer id="footer" id="footer"></footer>
>>>>>>> 2_GAT_Todo

</body>
</html>
