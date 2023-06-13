<link rel="stylesheet" href="css/bootstrap.min.css">

<?php
require 'conexion.php';


// Verificar si se ha enviado el formulario
if (isset($_POST["Añadir"])) {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $temporadas = $_POST['Temporadas'];
    $id_equipo = $_POST['id_equipo'];
    
    $sql = "INSERT INTO entrenador (Nombre, Temporadas, id_equipo) VALUES ('$nombre', '$temporadas', '$id_equipo')";

    if ($mysqli->query($sql)){
        echo '
		<p class="alert alert-primary" role="alert">Entrenador añadido</p>
		<br>
		<a href="index.php" class="btn btn-primary">Regresar</a>';
    } else {
        echo "Error: " . $mysqli->error;
    }
    }

?>