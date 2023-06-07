<?php
  // Estableciendo la conexión
  require 'conexion.php';

  // Obtener el ID del equipo seleccionado desde el parámetro de la URL
  $id_equipo = $_GET["id"];

   $sql = "SELECT * FROM entrenador WHERE id_equipo = $id_equipo";

   $resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Entrenador</title>
</head>
<body>
    <header>
        <h1>Entrenador</h1>
    </header>
    <h2>Detalles del entrenador</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Temporadas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($fila = $resultado->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $fila['Nombre']; ?></td>
                    <td><?php echo $fila['Temporadas']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <a href="index.php">Volver a la clasificacion</a>
</body>
</html>
