<?php
  //estableciendo conexion
  require 'conexion.php';

  //obtener el id del equipo seleccionado desde el parámetro de la URL
  $id_equipo = $_GET["id"];

  //preparar la sentencia sql para obtener los jugadores del equipo seleccionado
  $sql = "SELECT * FROM jugadores WHERE id_equipo = $id_equipo";

  //ejecutar la sentencia y guardar el resultado
  $resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jugadores</title>
</head>
<body>
    <header>
        <h1>Jugadores</h1>
    </header>
    <h2>Jugadores del equipo</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Número</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($fila = $resultado->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $fila['Nombre']; ?></td>
                    <td><?php echo $fila['Numero']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <a href="index.php">Volver a la clasificacion</a>
</body>
</html>
