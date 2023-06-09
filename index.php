<?php
  
  require 'conexion.php';

  
  $sql = "SELECT * FROM equipos order by Puntos DESC";

  $resultado = $mysqli->query($sql);
	
?>
<!DOCTYPE html>
<html>
<head>
    <title>Liga Santander</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
        }

        h2 {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        thead {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a.btn {
            margin-right: 5px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>
<body>
    <header>
        <h1>Liga Santander</h1>
    </header>
        <h2>Tabla de Posiciones</h2>
        <table>
            <thead>
                <tr>
                    <th>Equipo</th>
                    <th>Puntos</th>
                </tr>
            </thead>
            <tbody>
					<?php
					while($fila = $resultado->fetch_assoc()){
						?>
							<tr>
								<td><?php echo $fila['Nombre'];?></td>
								<td><?php echo $fila['Puntos'];?></td>					
						<td><a href="Jugadores.php?id=<?php echo $fila["id_equipo"];?>"class="btn btn-primary">Jugadores</a></td>
                        <td><a href="Estadio.php?id=<?php echo $fila["id_equipo"];?>"class="btn btn-success">Estadios</a></td>
                        <td><a href="Entrenadores.php?id=<?php echo $fila["id_equipo"];?>"class="btn btn-info">Entrenadores</a></td>
                        <td><a href="editar1.php?id=<?php echo $fila["id_equipo"];?>"class="btn btn-warning">Editar</a></td>
                        <td><a href="eliminar.php?id=<?php echo $fila["id_equipo"];?>"class="btn btn-danger">Eliminar</a></td>

							</tr>
						<?php
						}
						?>
					
			</tbody>
        </table>
        <a href="añadir1.php">Añadir equipo</a>
        
    <footer>
        <p>@2023 Liga Santander. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
