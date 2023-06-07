<?php
  
  require 'conexion.php';

  
  $sql = "SELECT * FROM equipos order by Puntos DESC";

  $resultado = $mysqli->query($sql);
	
?>
<!DOCTYPE html>
<html>
<head>
    <title>Liga Santander</title>
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
						<td><a href="Jugadores.php?id=<?php echo $fila["id_equipo"];?>"class="btn btn-danger">Jugadores</a></td>
                        <td><a href="Estadio.php?id=<?php echo $fila["id_equipo"];?>"class="btn btn-danger">Estadios</a></td>
                        <td><a href="Entrenadores.php?id=<?php echo $fila["id_equipo"];?>"class="btn btn-danger">Entrenadores</a></td>
							</tr>
						<?php
						}
						?>
					
			</tbody>
        </table>
        
    <footer>
        <p>@2023 Liga Santander. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
