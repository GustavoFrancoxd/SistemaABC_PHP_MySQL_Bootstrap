<?php
    include("conexion.php");

    $producto=$_POST['producto'];
    $descripcion= $_POST['descripcion'];
    $precio_compra=$_POST['precio_compra'];
    $precio_venta=$_POST['precio_venta'];
    $existencia=$_POST['existencia'];
    
    $consulta = "INSERT INTO producto (producto, descripcion, precio_compra, precio_venta, existencia) VALUES ('$producto', '$descripcion', '$precio_compra', '$precio_venta', '$existencia')";

    if (mysqli_query($conexion, $consulta)) {
      header('Location: productos.php');
    }   
?>