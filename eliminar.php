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
				$sql="DELETE FROM equipos where id_equipo=$id";
				$sql2="DELETE FROM jugadores where id_equipo=$id";
				$sql3="DELETE FROM entrenador where id_equipo=$id";
				$sql4="DELETE FROM estadios where id_equipo=$id";
				
		 
				//ejecutamos la sentencia y guardamos resultado
				$resultado = $mysqli->query($sql);
				$resultado2 = $mysqli->query($sql2);
				$resultado3 = $mysqli->query($sql3);				
				$resultado4 = $mysqli->query($sql4);
		?>
		<br>
		<p class="alert alert-warning" role="alert">Registro eliminado</p>
		<br>
		<a href="index.php" class="btn btn-primary">Regresar</a>

	</body>
</html>