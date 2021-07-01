<?php
	include("conexion.php");
	
	$id_producto=$_POST['id_producto'];
	$precio_venta=$_POST['precio_venta'];
	$existencia=$_POST['existencia'];

	$actualizar= "UPDATE producto SET precio_venta='$precio_venta', existencia='$existencia' WHERE id_producto='$id_producto'";

	$resultado=mysqli_query($conexion,$actualizar);
	mysqli_close($conexion);
	header('Location: productos.php');
?>