<?php
  // Estableciendo la conexión
  require 'conexion.php';

  // Obtener el ID del equipo seleccionado desde el parámetro de la URL
  $id_equipo = $_GET["id"];

  $sql = "SELECT * FROM estadios WHERE id_equipo = $id_equipo";


  $resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Estadio</title>
</head>
<body>
    <header>
        <h1>Estadio</h1>
    </header>
    <h2>Detalles del estadio</h2>
    <table>
    <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Capacidad</th>
                    <th>Año de fundacion</th>
                </tr>
            </thead>
    <?php
     while ($fila = $resultado->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $fila['Nombre']; ?></td>
            <td><?php echo $fila['Capacidad']; ?></td>
            <td><?php echo $fila['Fundado']; ?></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <a href="index.php">Volver a la clasificacion</a>
</body>
</html>

