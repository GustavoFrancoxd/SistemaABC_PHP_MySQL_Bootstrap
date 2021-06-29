<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gustavo Franco Lizarraga">
    <meta name="generator" content="Sublime Text">
    <title>Francompras</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Francompras</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="productos.php">tabla-productos</a></li>
            <li><a class="dropdown-item" href="agregarproducto.php">agregar productos</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="container">
  <!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Gustavo Franco Lizarraga">
</head>

<body>

<br>  

<h1>Lista de productos</h1>

<br>

  <table border="1" class="table" >
    <thead>
    <tr>
      <td>id</td>
      <td>producto</td>
      <td>descripcion</td>
      <td>precio_compra</td>
      <td>precio_venta</td>
      <td>existencia</td> 
      <td>editar | eliminar</td>
    </tr>
    </thead>

    <?php 
    include("conexion.php");
    $sql="SELECT * from producto";
    $resultado=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($resultado)){
     ?>

    <tr>
      <td><?php echo $mostrar['id_producto'] ?></td>
      <td><?php echo $mostrar['producto'] ?></td>
      <td><?php echo $mostrar['descripcion'] ?></td>
      <td><?php echo $mostrar['precio_compra'] ?></td>
      <td><?php echo $mostrar['precio_venta'] ?></td>
      <td><?php echo $mostrar['existencia'] ?></td>
      <td>
        <a href="editar.php?id=<?php echo $mostrar["id_producto"];?>">Editar</a>
        <a href="eliminar.php?id=<?php echo $mostrar["id_producto"];?>">Eliminar</a>
      </td>
    </tr>
  <?php 
  }   
   ?>
  </table>

  <?php
$sql = "SELECT * FROM producto";
if ($result=mysqli_query($conexion,$sql)) {
    $rowcount=mysqli_num_rows($result);
    echo "El numero de registros son: ".$rowcount; 
}
?>

</div>




  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
