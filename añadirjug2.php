<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
require 'conexion.php';

$id_equipo = $_POST["id_equipo"];
// Verificar si se ha enviado el formulario
if (isset($_POST["Añadir"])) {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $numero = $_POST['numero'];

    $sql = "INSERT INTO jugadores (Nombre, numero, id_equipo) VALUES ('$nombre', '$numero', '$id_equipo')";

    if ($mysqli->query($sql)){
        echo '
		<p class="alert alert-primary" role="alert">Jugador añadido</p>
		<br>
		<a href="index.php" class="btn btn-primary">Regresar</a>';
    } else {
        echo "Error: " . $mysqli->error;
    }
    }

?>
