<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNAD - F4U3 - Diseño e implementacion backend - 2021 - Borrar Producto</title>
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
    <header class="container">
      <h1 class="col-lg-12" style="text-align: center;">Utilidades de la Empresa “PC Electronics”</h1>    
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  id="sticky">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarScroll"
            aria-controls="navbarScroll"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul
              class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
              style="--bs-scroll-height: 100px">
              <a class="navbar-brand" href="../index.html">PC Electronics</a>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarScrollingDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Administrador
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarScrollingDropdown">
                  <li>
                    <a class="dropdown-item" href="crear_bd.php">Crear Base de Datos</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="crear_tabla.php">Crear tabla</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pdf.php" target="_blank">Reportes PDF</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="backup.php">Backup</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarScrollingDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Inventario
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarScrollingDropdown">
                  <li>
                    <a class="dropdown-item" href="../registrar.html">Registrar Producto</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="../modificar.html">Modificar Producto</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../borrar.html">Borrar Producto</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../consultar.html">Consultar Producto</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                  <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarScrollingDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Utilidades
                </a>
                  <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarScrollingDropdown">
                  <li>
                    <a class="dropdown-item" href="../cal_ventas.html">Cálculo Valor de Venta de Producto</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="../cal_equi_datos.html">Cálculo Equivalencia de tamaño de Datos</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../autores.html">
                  Autores
                </a>
            </li>
            </ul>
          </div>
        </div>
      </nav>

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
          <h4>Borrar Productos</h4>
          <form action="borrar2.php" method="POST">
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
              <button type="submit" class="btn btn-primary">Borrar Producto</button>
              <a class="btn btn-danger" href="../borrar.html" role="button">Volver</a>
          </form>
      </section>
      </br>

  <?php

    }

} else {

  ?>

<!-- Ventana Modal -->
    <link rel="stylesheet" href="../css/estilos.css">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='../modificar.html'">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <?php
              echo "El Producto no existe " . "<br>";
          ?>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../modificar.html'">Cerrar</button>
        </div>
      </div>
    </div>

  <?php

}

    mysqli_close($conn);
  ?> 

    </main>
    <footer id="footer">  
      <p class="pie">
        <a name='acercade'></a>
        <b>Director/Tutor: </b>Francisco Javier Hilarión Novoa<br/>
        <b>Skype: </b>frankelectro<br/>
        <b>Email: </b>francisco.hilarion@unad.edu.co<br/><br/>
        <b>Universidad Nacional Abierta y a Distancia UNAD de Colombia</b><br/>
        Institución de Educación Superior sujeta a inspección y vigilancia por el Ministerio de Educación Nacional - SNIES 2102<br/>
        En Bogotá D.C. (Colombia) Tel: <b>(+57)(1)375 9500</b>  Línea gratuita nacional: <b>01 8000 115223</b><br/><br/>
        <b>Fecha de Creación:</b> lunes 17 de noviembre de 2021<b> / Fecha de Actualización:</b> sabado 20 de noviembre de 2021
      </p>
    </footer>
</body>
</html>