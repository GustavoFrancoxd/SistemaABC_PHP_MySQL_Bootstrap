<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gustavo Franco Lizarraga">
    <meta name="generator" content="Sublime Text">
    <title>Francompras</title>
    
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
    <br>

    <main class="container">
      <div class="bg-light p-5 rounded">
        <h1>editar registro</h1>
        <p class="lead">editando producto seleccionado.</p>

        <form method="POST" class="form-horizontal" action="update.php">

          <?php 
            include("conexion.php");
            $id= $_GET["id"];
            $sql= "SELECT * FROM producto WHERE id_producto = '$id'";
            $resultado=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($resultado)){
          ?>

          <div class="form-group">
            <div class="col-xs-10">
              <input type="hidden" class="form-control" name="id_producto" value="<?php echo $mostrar['id_producto'] ?>" >
            </div>
          </div>
          <div class="form-group">
            <label for="producto" class="control-label col-xs-2">producto: </label>
            <div class="col-xs-10">
              <input type="text" class="form-control" name="producto" value="<?php echo $mostrar['producto'] ?>" disabled >
            </div>
          </div>
          <div class="form-group">
            <label for="descripcion" class="control-label col-xs-2">descripcion: </label>
            <div class="col-xs-10">
              <input type="text" class="form-control" name="descripcion" value="<?php echo $mostrar['descripcion'] ?>" disabled >
            </div>
          </div>
          <div class="form-group" >
            <label for="precio_compra" class="control-label col-xs-2">precio de compra: </label>
            <div class="col-xs-10">
              <input type="text" class="form-control" name="precio_compra" value="<?php echo $mostrar['precio_compra'] ?>" disabled >
            </div>
          <div class="form-group" >
            <label for="precio_venta" class="control-label col-xs-2">precio de venta: </label>
            <div class="col-xs-10">
              <input type="text" class="form-control" name="precio_venta" placeholder="precio de venta" value="<?php echo $mostrar['precio_venta'] ?>">
            </div>
          </div>
          <div class="form-group" >
            <label for="existencia" class="control-label col-xs-2">existencia: </label>
            <div class="col-xs-10">
              <input type="text" class="form-control" name="existencia" placeholder="existencia" value="<?php echo $mostrar['existencia'] ?>">
            </div>
          </div>
          <div class="form-group">
            <br>
            <input type="submit" name="submit" value="enviar" class="btn btn-primary">
          </div>
        </form>
        <?php 
          }
        ?>
      </div>
    </main>

    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
