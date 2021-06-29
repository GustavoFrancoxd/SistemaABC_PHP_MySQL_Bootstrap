<?php 
			include("conexion.php");
			$id= $_GET["id"];
			$eliminar= "DELETE FROM producto WHERE id_producto= '$id'";
			$resultado=mysqli_query($conexion,$eliminar);
			header('Location: productos.php');
			?>