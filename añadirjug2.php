<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
require 'conexion.php';

$id_equipo = $_POST["id_equipo"];
// Verificar si se ha enviado el formulario
if (isset($_POST["Añadir"])) {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $numero = $_POST['numero'];

    $sql = "SELECT * from jugadores where Numero=$numero and id_equipo=$id_equipo";
    $resultado=$mysqli->query($sql);
    if($fila = $resultado->fetch_assoc()) {
        echo '
		<p class="alert alert-primary" role="alert">Dorsal repetido</p>
		<br>
		<a href="index.php" class="btn btn-primary">Regresar</a>';
    } else {
    $sql2 = "SELECT * FROM jugadores where Nombre='$nombre'";
    $resultado2=$mysqli->query($sql2);
    if($fila2 = $resultado2->fetch_assoc()) {
        echo '
		<p class="alert alert-primary" role="alert">Nombre repetido</p>
		<br>
		<a href="index.php" class="btn btn-primary">Regresar</a>';
    } else {
    $sql1 = "INSERT INTO jugadores (Nombre, numero, id_equipo) VALUES ('$nombre', '$numero', '$id_equipo')";

    if ($mysqli->query($sql1)){
        echo '
		<p class="alert alert-primary" role="alert">Jugador añadido</p>
		<br>
		<a href="index.php" class="btn btn-primary">Regresar</a>';
    } else {
        echo "Error: " . $mysqli->error;
    }
    }
}
}
?>
