<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Liga Santander</title>
	</head>
	<body>
		<?php
			
			     //establece conexion con la BD
				 require 'conexion.php';

				 //obtengo los datos del formulario
				 $id=$_GET["id"];
		 
				 //borramos los datos
				$sql="DELETE FROM entrenador where id=$id";
		 
				//ejecutamos la sentencia y guardamos resultado
				$resultado = $mysqli->query($sql);			
		?>
		<br>
		<p class="alert alert-primary" role="alert">Registro eliminado</p>
		<br>
		<a href="index.php" class="btn btn-primary">Regresar</a>

	</body>
</html>